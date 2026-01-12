@extends('layouts.admin')

@section('title', 'Menu Manager')
@section('header', 'Kelola Menu')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-bold">Daftar Menu</h3>
        <a href="{{ route('menus.create') }}" class="bg-primary text-white px-6 py-3 rounded-xl shadow-lg shadow-primary/20 hover:bg-opacity-90 font-bold flex items-center gap-2">
            <span class="material-symbols-outlined">add</span>
            Add New Menu
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-6 py-4">Name</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Price</th>
                    <th class="px-6 py-4">Description</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($menus as $menu)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-bold text-gray-900">{{ $menu->name }}</td>
                    <td class="px-6 py-4">
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">{{ $menu->category }}</span>
                    </td>
                    <td class="px-6 py-4 font-bold text-primary">Rp {{ number_format($menu->price, 0, ',', '.') }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">{{ $menu->description }}</td>
                    <td class="px-6 py-4 text-right flex justify-end gap-2">
                        <a href="{{ route('menus.edit', $menu) }}" class="text-blue-500 hover:bg-blue-50 p-2 rounded-lg transition-colors">
                            <span class="material-symbols-outlined">edit</span>
                        </a>
                        <form action="{{ route('menus.destroy', $menu) }}" method="POST" onsubmit="return confirm('Delete this item?');" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-400 hover:text-red-600 hover:bg-red-50 p-2 rounded-lg transition-colors">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
