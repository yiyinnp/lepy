@extends('layouts.main1')
@section('container')
<div class="flex justify-center items-center py-16">
    <div class="flex justify-center items-center w-8/12">
        <div class="w-full p-6 shadow-lg bg-[#D9D9D9] rounded-md">
            <h1 class="text-3xl block text-center font-semibold">Edit Profil Pengguna</i></h1>
            <form action="{{ route('userlist.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mt-3">
                    <label for="name" class="block text-base mb-2">Nama Pengguna</label>
                    <input type="text" id="name" name="name" class="border w-full text-base px-2 py-1 
                    focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400
                    @error('name') border-red-500 @enderror required" value="{{ old('name', $user->name) }}"/>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="username" class="block text-base mb-2">Username</label>
                    <input type="text" id="username" name="username" class="border w-full text-base px-2 py-1 
                    focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                    @error('username') border-red-500 @enderror required" value="{{ old('username', $user->username) }}"/>
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="email" class="block text-base mb-2">Surel</label>
                    <input type="email" id="email" name="email" class="border w-full text-base px-2 py-1 
                    focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                    @error('email') border-red-500 @enderror required" value="{{ old('email', $user->email) }}"/>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password" class="block text-base mb-2">Password</label>
                    <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 
                    focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                    @error('password') border-red-500 @enderror required" value="{{ old('password') }}" placeholder="Abaikan/Kosongi, jika tidak ada perubahan"/>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="level" class="block text-base mb-2">Level Pengguna</label>
                    <select name="level" id="level" class="w-full" value="{{ old('level') }}">
                        <option value="siswa" @if(old('level', $user->level) == 'siswa') selected @endif>Siswa</option>
                        <option value="guru" @if(old('level', $user->level) == 'guru') selected @endif>Guru</option>
                        <option value="admin" @if(old('level', $user->level) == 'admin') selected @endif>Admin</option>
                    </select>
                    @error('level')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-5">
                    <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:bg-[#395886] hover:border-[#395886] font-semibold"><i class="bi bi-floppy2"> </i>Simpan</button>
                </div>
            </form>
            <div class="mt-2">
                <a href="{{ route('userlist.index') }}"><button type="submit" class="border-2 border-gray-400 bg-gray-400 text-white py-1 w-full rounded-md hover:bg-gray-500 hover:border-gray-500 font-semibold"><i class="bi bi-x-lg"></i> Kembali</button></a>
            </div>
        </div>
    </div>
</div>
@endsection