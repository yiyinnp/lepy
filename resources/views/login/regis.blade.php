@extends('layouts.main3')
@section('container')
<div class="flex justify-center items-center h-screen">
    <div class="w-80 lg:w-2/5 p-6 shadow-md bg-[#D9D9D9] bg-opacity-40 rounded-md">
        <div class="flex justify-between items-center">
            <a href="/"><img class="w-32 hover:scale-105 duration-300" src="/assets/logo-web-terbaruu.png" alt="" srcset=""></a>
            <a href="/"><img class="w-16 h-16 rounded-xl hover:scale-105 duration-300" src="/assets/lepi.jpeg" alt="" srcset=""></a>
          </div>
        <h1 class="text-3xl block text-center font-semibold">Registrasi</h1>
        <form action="/register" method="post">
            @csrf
            <div class="mt-3">
                <label for="name" class="block text-sm">Nama Pengguna</label>
                <input type="text" id="name" name="name" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 @error('name') border-red-500 @enderror required" value="{{ old('name') }}" placeholder="Ketikkan Nama Pengguna..." />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="username" class="block text-sm">Username</label>
                <input type="text" id="username" name="username" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 
                @error('username') border-red-500 @enderror required" value="{{ old('username') }}" placeholder="Ketikkan Username..." />
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="email" class="block text-sm">Email</label>
                <input type="email" id="email" name="email" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 @error('email') border-red-500 @enderror required" value="{{ old('email') }}" placeholder="Ketikkan Alamat Email Pengguna..." />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="password" class="block text-sm">Password</label>
                <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 @error('password') border-red-500 @enderror required" value="{{ old('password') }}" placeholder="Ketikkan Password..." />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="password_confirmation" class="block text-sm">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 required" placeholder="Ketikkan Konfirmasi Password..." />
                <label for="showPassword" class="ml-2 text-xs cursor-pointer"><input type="checkbox" class="text-xs" id="showPassword" /> Tampilkan Password</label>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!--{{-- <div class="mt-3">-->
            <!--    <label for="level" class="block text-base mb-2">Level Pengguna</label>-->
            <!--    <select name="level" id="level" class="w-full" value="{{ old('level') }}">-->
            <!--        <option value="">Pilih Level Pengguna</option>-->
            <!--        <option value="siswa">Siswa</option>-->
            <!--        <option value="guru">Guru</option>-->
            <!--        <option value="admin">Admin</option>-->
            <!--    </select>-->
            <!--    @error('level')-->
            <!--        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>-->
            <!--    @enderror-->
            <!--</div> --}}-->
            <!--<div class="mt-2">-->
            <!--    <label for="kelas" class="block text-sm">Kelas</label>-->
            <!--    <input type="text" id="kelas" name="kelas" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 @error('kelas') border-red-500 @enderror required" value="{{ old('kelas') }}" placeholder="Ketikkan Kelas..." />-->
            <!--    @error('kelas')-->
            <!--        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>-->
            <!--    @enderror-->
            <!--</div>-->
            <div class="mt-3 flex justify-between items-center gap-8">
                <div>
                    <p class="text-xs">Sudah punya akun? <a href="/login" class="text-indigo-800 text-xs font-normal">Login sekarang</a></p>
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:scale-105 duration-300 font-semibold"><i class="bi bi-person-fill-add"></i>&nbsp;&nbsp;Registrasi</button>
            </div>
        </form>
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