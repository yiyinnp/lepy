@extends('layouts.main')
@section('container')
<div class="flex justify-center items-center pt-36 pb-10">
    <div class="flex justify-center items-center w-9/12">
        <div class="w-full p-6 shadow-md bg-[#d9d9d9] rounded-lg">
            <h1 class="text-3xl font-semibold">{{ $forum->title }}</h1>
            <p class="text-xl">{{ $forum->content }}</p>
            <p class="pb-3 text-xs text-gray-500">Dibuat Oleh: {{ $forum->user->name }}</p>
            <div class="border-t-2 border-[#395886]"></div>
            <h2 class="font-bold">Komentar:</h2>
            
            @forelse ($forum->comments as $comment)
                <div class="pb-2">
                    <p class="text-lg"><b>{{ $comment->user->name }}</b>: {{ $comment->content }}</p>
                    <p class="text-xs pb-1">Ditulis pada {{ $comment->created_at->locale('id')->diffForHumans() }}</p>
                    @if ($comment->user_id == auth()->id())
                        <div class="inline-flex space-x-1">
                            <form action="{{ route('comments.edit', [$forum->id, $comment->id]) }}" method="GET">
                                @csrf
                                <button class="w-6 h-6 border-2 border-amber-300 bg-amber-300 hover:scale-105 duration-300 rounded-md">
                                <i class="bi bi-pencil"></i></button>
                            </form>
                            <form action="{{ route('comments.destroy', [$forum->id, $comment->id]) }}" method="POST" id="deleteBtn">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-6 h-6 border-2 border-rose-400 bg-rose-400 
                                hover:scale-105 duration-300 rounded-md"><i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    @endauth
                </div>
            @empty
                <p class="pb-5 text-gray-500">Belum Ada Komentar</p>
            @endforelse
        
            <form action="{{ route('comments.store', $forum->id) }}" method="POST">
                @csrf
                <textarea name="content" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 
                @error('content') border-red-500 @enderror" placeholder="Tambahkan Komentar"></textarea>
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="flex justify-end space-x-3 mt-3">
                    <button type="submit" class="bg-green-500 hover:scale-105 duration-300 text-white font-semibold py-2 px-4 rounded">Kirim</button>
            </form>
                    <button class="bg-gray-400 hover:scale-105 duration-300 text-white font-semibold py-2 px-4 rounded">
                        <a href="{{ route('forums.index') }}">Kembali</a>
                    </button>
                </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var deleteBtn = document.getElementById('deleteBtn');
        if (deleteBtn) {
            deleteBtn.addEventListener('submit', function(e) {
                e.preventDefault(); //mencegah aksi default dari form, yaitu pengiriman data ke server.
                var confirmation = confirm('Apakah Anda yakin ingin menghapus komentar?');
                if (confirmation) {
                    this.submit();
                } else {
                    alert('Hapus komentar dibatalkan.');
                }
            });
        }
    });
</script>