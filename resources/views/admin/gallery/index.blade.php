@extends('layouts.admin')

@section('title', 'Galeri Foto')
@section('header', 'Kelola Link Galeri')

@section('content')
    @if(session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded shadow-sm" role="alert">
        <p class="font-bold">Sukses</p>
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Form Input -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 sticky top-28">
                <h3 class="text-lg font-black mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">add_link</span>
                    Tambah / Update Link
                </h3>
                
                <form action="{{ route('gallery.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Pilih Tanggal</label>
                        <input type="date" name="photo_date" required class="w-full bg-gray-50 border-gray-200 rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Link Google Drive</label>
                        <input type="url" name="drive_url" required placeholder="https://drive.google.com/..." class="w-full bg-gray-50 border-gray-200 rounded-xl p-3 focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                    </div>

                    <button type="submit" class="w-full bg-primary text-white font-black py-3 rounded-xl hover:bg-opacity-90 transition-all shadow-lg shadow-primary/20">
                        Simpan Link
                    </button>
                </form>
            </div>
        </div>

        <!-- List Data -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                    <h3 class="text-lg font-black">Riwayat Upload</h3>
                </div>
                
                @if($links->isEmpty())
                    <div class="p-12 text-center text-gray-400">
                        <span class="material-symbols-outlined text-5xl mb-3">folder_off</span>
                        <p>Belum ada link yang diupload.</p>
                    </div>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 text-gray-500 font-bold uppercase text-xs tracking-wider">
                                <tr>
                                    <th class="px-6 py-4">Tanggal</th>
                                    <th class="px-6 py-4">Link</th>
                                    <th class="px-6 py-4 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach($links as $link)
                                <tr class="hover:bg-gray-50 transition-colors group">
                                    <td class="px-6 py-4 font-bold text-gray-900">
                                        {{ \Carbon\Carbon::parse($link->photo_date)->format('d F Y') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ $link->drive_url }}" target="_blank" class="text-primary hover:underline truncate max-w-[200px] block">
                                            {{ $link->drive_url }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <form action="{{ route('gallery.destroy', $link) }}" method="POST" onsubmit="return confirm('Hapus link tanggal ini?');" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-600 p-2 rounded-lg hover:bg-red-50 transition-colors">
                                                <span class="material-symbols-outlined">delete</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
