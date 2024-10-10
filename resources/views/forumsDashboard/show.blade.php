@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-24">
    <div class="flex justify-center items-center">
        <div class="flex justify-center items-center w-8/12">
            <div class="w-full p-6 shadow-lg bg-white rounded-md">
                <h1 class="text-3xl font-semibold">{{ $forum->title }}</h1>
                <p class="text-xl">{{ $forum->content }}</p>
                <p class="pb-5 text-xs text-gray-500">Dibuat Oleh: {{ $forum->user->name }}</p>
                <div class="border-t-2 border-[#395886]"></div>
                <h2 class="font-bold">Komentar:</h2>
                
                @forelse ($forum->comments as $comment)
                    <div class="pb-2">
                        <p class="text-lg"><b>{{ $comment->user->name }}</b>: {{ $comment->content }}</p>
                        <p class="text-xs pb-1">Ditulis pada {{ $comment->created_at->locale('id')->diffForHumans() }}</p>
                        <div class="inline-flex space-x-1">
                            @if ($comment->user_id == auth()->id())
                            <form action="{{ route('commentsdashboard.edit', [$forum->id, $comment->id]) }}" method="GET">
                                @csrf
                                <button class="w-6 h-6 border-2 border-amber-300 bg-amber-300 hover:scale-105 rounded-md">
                                <i class="bi bi-pencil"></i></button>
                            </form>
                            @endauth
                            <form action="{{ route('commentsdashboard.destroy', [$forum->id, $comment->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-6 h-6 border-2 border-rose-400 bg-rose-400 
                                hover:scale-105 rounded-md"><i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="pb-5 text-gray-500">Belum Ada Komentar</p>
                @endforelse
            
                <form action="{{ route('commentsdashboard.store', $forum->id) }}" method="POST">
                    @csrf
                    <textarea name="content" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-0 focus:border-gray-400 bg-gray-200
                    @error('content') border-red-500 @enderror" placeholder="Tambahkan Komentar"></textarea>
                    @error('content')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="flex justify-end space-x-3">
                        <button type="submit" class="bg-green-500 hover:scale-105 text-white font-semibold py-2 px-4 rounded">Kirim</button>
                </form>
                        <button class="bg-gray-400 hover:scale-105 text-white font-semibold py-2 px-4 rounded">
                            <a href="{{ route('forumsdashboard.index') }}">Kembali</a>
                        </button>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection