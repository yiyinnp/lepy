@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-20">
    <div class="flex justify-center items-center">
        <div class="flex justify-center items-center w-8/12">
            <div class="w-full p-6 shadow-lg bg-white rounded-md">
                <h1 class="text-3xl block text-center font-semibold">Edit Jawaban <i>Live Coding</i></h1>
                <form action="{{ route('answers.update', $answer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mt-3">
                        <label for="title" class="block text-base mb-1">Judul Subbab</label>
                        <input type="text" id="title" name="title" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-1 focus:border-blue-400 bg-gray-200 
                        @error('title') border-red-500 @enderror required" value="{{ old('title', $answer->title) }}" placeholder="Ketikkan Nama Forum Diskusi..."/>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="content" class="block text-base mb-1">Kunci Jawaban</label>
                        <textarea id="content" name="content" rows="6" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-1 focus:border-blue-400 bg-gray-200
                        @error('content') border-red-500 @enderror required" placeholder="Ketikkan Hal yang Ingin Didiskusikan...">{{ old('content', $answer->content) }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:scale-105 font-semibold"><i class="bi bi-floppy2"> </i>Simpan</button>
                    </div>
                </form>
                <div class="mt-2">
                    <a href="{{ route('answers.index') }}"><button type="submit" class="border-2 border-gray-400 bg-gray-400 text-white py-1 w-full rounded-md hover:scale-105 font-semibold"><i class="bi bi-x-lg"></i> Kembali</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection