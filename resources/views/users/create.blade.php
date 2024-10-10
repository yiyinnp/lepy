@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-7">
    <div class="flex justify-center items-center">
        <div class="w-4/5 lg:w-3/5 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <h1 class="text-3xl block text-center font-semibold">Formulir Tambah Pengguna</h1>
            <form action="{{ route('userlist.store') }}" method="post" class="mb-0">
                @csrf
                <div class="mt-3">
                    <label for="name" class="block text-sm">Nama Pengguna</label>
                    <input type="text" id="name" name="name" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 @error('name') border-red-500 @enderror required" value="{{ old('name') }}" placeholder="Ketikkan Nama Pengguna..." />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="username" class="block text-sm">Username</label>
                    <input type="text" id="username" name="username" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 
                    @error('username') border-red-500 @enderror required" value="{{ old('username') }}" placeholder="Ketikkan Username..." />
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="email" class="block text-sm">Email</label>
                    <input type="email" id="email" name="email" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 @error('email') border-red-500 @enderror required" value="{{ old('email') }}" placeholder="Ketikkan Alamat Email Pengguna..." />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password" class="block text-sm">Password</label>
                    <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 @error('password') border-red-500 @enderror required" value="{{ old('password') }}" placeholder="Ketikkan Password..." />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password_confirmation" class="block text-sm">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 required" placeholder="Ketikkan Konfirmasi Password..." />
                    <label for="showPassword" class="ml-2 text-xs cursor-pointer"><input type="checkbox" class="text-xs" id="showPassword" /> Tampilkan Password</label>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="level" class="block text-sm">Level Pengguna</label>
                    <select name="level" id="level" class="w-full h-10 rounded-md" value="{{ old('level') }}">
                        <option value="">Pilih Level Pengguna</option>
                        {{-- <option value="guru">Siswa</option> --}}
                        <option value="guru">Guru</option>
                        <option value="admin">Admin</option>
                    </select>
                    @error('level')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-5">
                    <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:bg-[#395886] hover:border-[#395886] font-semibold"><i class="bi bi-person-fill-add"></i>&nbsp;&nbsp;Tambah</button>
                </div>
            </form>
            <div class="mt-2">
                <a href="{{ route('userlist.index') }}"><button type="submit" class="border-2 border-gray-400 bg-gray-400 text-white py-1 w-full rounded-md hover:bg-gray-500 hover:border-gray-500 font-semibold"><i class="bi bi-x-lg"></i> Kembali</button></a>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showPasswordCheckbox = document.getElementById('showPassword');
        const passwordInput = document.getElementById('password');
        const password_confirmationInput = document.getElementById('password_confirmation');

        showPasswordCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordInput.type = 'text';
                password_confirmationInput.type = 'text';
            } else {
                passwordInput.type = 'password';
                password_confirmationInput.type = 'password';
            }
        });
    });
</script>