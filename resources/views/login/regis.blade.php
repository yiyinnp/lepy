@extends('layouts.main')
@section('container')
<div class="flex justify-center items-center pt-24 pb-6">
    <div class="w-96 p-6 shadow-lg bg-[#D9D9D9] rounded-md">
        <h1 class="text-3xl block text-center font-semibold">Registrasi</h1>
        <form action="/register" method="post">
            @csrf
            <div class="mt-3">
                <label for="name" class="block text-base mb-2">Nama Pengguna</label>
                <input type="text" id="name" name="name" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 @error('name') border-red-500 @enderror required" value="{{ old('name') }}" placeholder="Ketikkan Nama Pengguna..." />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-3">
                <label for="username" class="block text-base mb-2">Username</label>
                <input type="text" id="username" name="username" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                @error('username') border-red-500 @enderror required" value="{{ old('username') }}" placeholder="Ketikkan Username..." />
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-3">
                <label for="email" class="block text-base mb-2">Surel</label>
                <input type="email" id="email" name="email" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 @error('email') border-red-500 @enderror required" value="{{ old('email') }}" placeholder="Ketikkan Surel Pengguna..." />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Password</label>
                <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 @error('password') border-red-500 @enderror required" value="{{ old('password') }}" placeholder="Ketikkan Password..." />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-3">
                <label for="level" class="block text-base mb-2">Level Pengguna</label>
                <select name="level" id="level" class="w-full" value="{{ old('level') }}">
                    <option value="">Pilih Level Pengguna</option>
                    <option value="siswa">Siswa</option>
                    <option value="guru">Guru</option>
                </select>
                @error('level')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-3 flex justify-between items-center gap-8">
                <div>
                    <p class="text-xs">Sudah punya akun? <a href="/login" class="text-indigo-800 text-xs font-normal">Login sekarang</a></p>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:bg-transparent hover:text-[#638ECB] font-semibold"><i class="bi bi-person-fill-add"></i>&nbsp;&nbsp;Registrasi</button>
            </div>
        </form>
    </div>
</div>
@endsection