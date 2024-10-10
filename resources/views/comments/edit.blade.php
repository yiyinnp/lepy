@extends('layouts.main')
@section('container')
<div class="flex justify-center items-center pt-36">
    <div class="flex justify-center items-center w-9/12">
        <div class="w-full p-6 shadow-lg bg-[#D9D9D9] rounded-md">
            <h1 class="text-3xl block text-center font-semibold">Edit Komentar</h1>
            <form action="{{ route('comments.update', [$forum->id, $comment->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-3">
                    <label for="content" class="block text-base mb-2">Komentar</label>
                    <textarea id="content" name="content" rows="6" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                    @error('content') border-red-500 @enderror required" placeholder="Ketikkan Hal yang Ingin Didiskusikan...">{{ old('content', $comment->content) }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-5">
                    <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:bg-[#395886] hover:border-[#395886] font-semibold"><i class="bi bi-floppy2"></i> Simpan</button>
                </div>
            </form>
            
            <div class="pt-3">
                <a href="{{ route('forums.show', ['forum'=>$forum->id]) }}">
                    <button type="submit"class="border-2 border-gray-400 bg-gray-400 text-white py-1 w-full rounded-md hover:bg-gray-400 hover:border-gray-500 font-semibold"><i class="bi bi-x-lg"></i> Kembali</button>
                </a>           
            </div>
        </div>
    </div>
</div>
@endsection