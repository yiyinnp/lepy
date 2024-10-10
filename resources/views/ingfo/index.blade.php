@extends('layouts.main')
@section('container')
<div class="py-28">
    <div class="flex justify-center items-center">
        <h1 class="text-5xl font-black text-center">Profil Pengembang <i>E-learning</i></h1>
    </div>
    <div class="flex justify-center items-center pt-10">
        <div class="w-80 lg:w-7/12 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <img src="{{ asset('assets/yiyin.png') }}" alt="" class="max-h-40 float-left pr-6">
    
            <div class="pt-3">
                <h3 class="text-2xl font-extrabold">YIYIN NORIYAH PUTRI</h3>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md font-semibold">200631100038</h4>
                <h4 class="text-md font-semibold">Pendidikan Informatika</h4>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md text-justify">PENGEMBANGAN <i>WEB BASED LEARNING</i> MENGGUNAKAN <i>USER CENTERED DESIGN</i> PADA MATA PELAJARAN PEMROGRAMAN DASAR DI SMK NEGERI 2 BANGKALAN</h4>
            </div>
        </div>
    </div>
</div>
@endsection