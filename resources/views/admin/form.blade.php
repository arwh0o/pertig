<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($menu) ? 'Edit Menu' : 'Create Menu' }} - Pertigaan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 p-8">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-6">{{ isset($menu) ? 'Edit Menu' : 'Add New Menu' }}</h2>

        <form action="{{ isset($menu) ? route('menus.update', $menu) : route('menus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($menu)) @method('PUT') @endif

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Menu Name</label>
                <input type="text" name="name" value="{{ old('name', $menu->name ?? '') }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Category</label>
                <select name="category" class="w-full border rounded px-3 py-2">
                    <option value="coffee" {{ (old('category', $menu->category ?? '') == 'coffee') ? 'selected' : '' }}>Coffee</option>
                    <option value="non-coffee" {{ (old('category', $menu->category ?? '') == 'non-coffee') ? 'selected' : '' }}>Non-Coffee</option>
                    <option value="snack" {{ (old('category', $menu->category ?? '') == 'snack') ? 'selected' : '' }}>Snack</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Price</label>
                <input type="number" name="price" value="{{ old('price', $menu->price ?? '') }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea name="description" rows="3" class="w-full border rounded px-3 py-2">{{ old('description', $menu->description ?? '') }}</textarea>
            </div>

            <div class="flex gap-4 mt-6">
                <button type="submit" class="bg-primary text-white font-bold py-2 px-6 rounded hover:bg-opacity-90">
                    Save Menu
                </button>
                <a href="{{ route('admin.dashboard') }}" class="bg-gray-300 text-gray-700 font-bold py-2 px-6 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</body>
</html>
