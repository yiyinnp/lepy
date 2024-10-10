@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-24">
    <div class="flex justify-center items-center">
        <div class="flex justify-center items-center w-10/12">
            <div class="w-full p-6 shadow-md bg-white rounded-md">
                <h1 class="text-3xl block text-center font-semibold">Edit Forum Diskusi</h1>
                <form action="{{ route('forumsdashboard.update', $forum->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mt-3">
                        <label for="title" class="block text-base mb-2">Judul Forum</label>
                        <input type="text" id="title" name="title" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 bg-gray-200
                        @error('title') border-red-500 @enderror required" value="{{ old('title', $forum->title) }}" placeholder="Ketikkan Nama Forum Diskusi..."/>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="content" class="block text-base mb-2">Content</label>
                        <textarea id="content" name="content" rows="6" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 bg-gray-200
                        @error('content') border-red-500 @enderror required" placeholder="Ketikkan Hal yang Ingin Didiskusikan...">{{ old('content', $forum->content) }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:scale-105 font-semibold"><i class="bi bi-floppy2"></i> Simpan</button>
                    </div>
                </form>
                <div class="mt-2">
                    <a href="{{ route('forumsdashboard.index') }}"><button type="submit" class="border-2 border-gray-400 bg-gray-400 text-white py-1 w-full rounded-md hover:scale-105 font-semibold"><i class="bi bi-x-lg"></i> Kembali</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection