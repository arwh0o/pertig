@extends('layouts.admin')

@section('title', 'Feedback Customer')
@section('header', 'Suara Customer')

@section('content')
    @if(session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded shadow-sm" role="alert">
        <p class="font-bold">Sukses</p>
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center">
            <h3 class="text-lg font-black">Kotak Masuk</h3>
            <span class="text-xs font-bold text-gray-500 bg-gray-100 px-3 py-1 rounded-full">{{ $feedbacks->count() }} Pesan</span>
        </div>
        
        @if($feedbacks->isEmpty())
            <div class="p-12 text-center text-gray-400">
                <span class="material-symbols-outlined text-5xl mb-3">mark_email_unread</span>
                <p>Belum ada feedback yang masuk.</p>
            </div>
        @else
            <div class="divide-y divide-gray-100">
                @foreach($feedbacks as $feedback)
                <div class="p-6 hover:bg-gray-50 transition-colors group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-4">
                            <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
                                {{ strtoupper(substr($feedback->name, 0, 1)) }}
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">{{ $feedback->name }}</h4>
                                <p class="text-xs text-gray-500 font-medium">{{ $feedback->email }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-xs text-gray-400 font-bold bg-gray-100 px-2 py-1 rounded">
                                {{ $feedback->created_at->format('d M Y, H:i') }}
                            </span>
                            <form action="{{ route('admin.feedbacks.destroy', $feedback) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-gray-400 hover:text-red-500 transition-colors p-1" title="Hapus">
                                    <span class="material-symbols-outlined text-lg">delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="pl-14">
                        <p class="text-gray-700 bg-gray-50 p-4 rounded-xl text-sm leading-relaxed border border-gray-100">
                            {{ $feedback->message }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
