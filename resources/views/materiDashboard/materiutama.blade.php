@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out">
    <div class="flex justify-center items-center pt-28">
        <h1 class="text-4xl font-black">{{ $title }}</h1>
    </div>
    <div class="flex justify-center items-center pt-10">
        <div class="w-8/12 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <img src="{{ asset('assets/python.png') }}" alt="" class="max-h-40 float-left pr-6">
    
            <div class="pt-3 pb-2">
                <h3 class="text-xl font-extrabold">Pengenalan Bahasa Pemrograman Python</h3>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md text-justify">Bahasa pemrograman Python pertama kali diperkenalkan pada tahun 1991 oleh Guido van Rossum di Scitching Mathematisch Centrum Belanda.</h4>
            </div>
            <div class="pt-4 float-right">
                <a href="{{ route('materialdashboard.definition') }}">
                    <button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:scale-105 duration-300 font-semibold">Baca Selanjutnya...</button>
                </a>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center pt-7">
        <div class="w-8/12 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <img src="{{ asset('assets/python.png') }}" alt="" class="max-h-40 float-left pr-6">
    
            <div class="pt-3 pb-2">
                <h3 class="text-xl font-extrabold">Pendeklarasian Variabel Bahasa Pemrograman Python</h3>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md text-justify">Variabel atau peubah adalah suatu wadah untuk menampung suatu nilai di mana nilai yang ditampung pada wadah tersebut bisa diubah atau berganti-ganti.</h4>
            </div>
            <div class="pt-4 float-right">
                <a href="{{ route('materialdashboard.variable') }}"><button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:scale-105 duration-300 font-semibold">Baca Selanjutnya...</button></a>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center pt-7">
        <div class="w-8/12 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <img src="{{ asset('assets/python.png') }}" alt="" class="max-h-40 float-left pr-6">
    
            <div class="pt-3 pb-2">
                <h3 class="text-xl font-extrabold">Pengenalan Tipe Data Bahasa Pemrograman Python</h3>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md text-justify">Tipe data di dalam bahasa pemrograman Python terdiri dari dua macam, yakni tipe data dasar dan bentukan.</h4>
            </div>
            <div class="pt-4 float-right">
                <a href="{{ route('materialdashboard.datatype') }}"><button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:scale-105 duration-300 font-semibold">Baca Selanjutnya...</button></a>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center pt-7">
        <div class="w-8/12 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <img src="{{ asset('assets/python.png') }}" alt="" class="max-h-40 float-left pr-6">
    
            <div class="pt-3 pb-2">
                <h3 class="text-xl font-extrabold">Operator dan Ekspresi Bahasa Pemrograman Python</h3>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md text-justify">Operator digunakan untuk memanipulasi nilai dari suatu variabel. Sedangkan, ekspresi adalah gabungan dari nilai, variabel, dan operator.</h4>
            </div>
            <div class="pt-4 float-right">
                <a href="{{ route('materialdashboard.operatorexpresion') }}"><button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:scale-105 duration-300 font-semibold">Baca Selanjutnya...</button></a>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center pt-7">
        <div class="w-8/12 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <img src="{{ asset('assets/python.png') }}" alt="" class="max-h-40 float-left pr-6">
    
            <div class="pt-3 pb-2">
                <h3 class="text-xl font-extrabold">Struktur Berurutan pada Pemrograman Python</h3>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md text-justify">Struktur berurutan adalah struktur yang paling dasar dalam sebuah pemrograman.</h4>
            </div>
            <div class="pt-4 float-right">
                <a href="{{ route('materialdashboard.sequential') }}"><button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:scale-105 duration-300 font-semibold">Baca Selanjutnya...</button></a>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center pt-7">
        <div class="w-8/12 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <img src="{{ asset('assets/python.png') }}" alt="" class="max-h-40 float-left pr-6">
    
            <div class="pt-3 pb-2">
                <h3 class="text-xl font-extrabold">Struktur Bercabangan pada Pemrograman Python</h3>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md text-justify">Percabangan adalah suatu keadaan dimana kita dihadapkan pada suatu pilihan dan harus membuat suatu keputusan yang dapat mempengaruhi langkah selanjutnya.</h4>
            </div>
            <div class="pt-4 float-right">
                <a href="{{ route('materialdashboard.branching') }}"><button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:scale-105 duration-300 font-semibold">Baca Selanjutnya...</button></a>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center pt-7">
        <div class="w-8/12 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <img src="{{ asset('assets/python.png') }}" alt="" class="max-h-40 float-left pr-6">
    
            <div class="pt-3 pb-2">
                <h3 class="text-xl font-extrabold">Struktur Perulangan pada Pemrograman Python</h3>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md text-justify">Perulangan digunakan untuk suatu aksi yang dilakukan berkali-kali dan memiliki pola yang sama.</h4>
            </div>
            <div class="pt-4 float-right">
                <a href="{{ route('materialdashboard.looping') }}"><button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:scale-105 duration-300 font-semibold">Baca Selanjutnya...</button></a>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center pt-7 pb-10">
        <div class="w-8/12 p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <img src="{{ asset('assets/python.png') }}" alt="" class="max-h-40 float-left pr-6">
    
            <div class="pt-3 pb-2">
                <h3 class="text-xl font-extrabold">Struktur Array pada Pemrograman Python</h3>
            </div>
            <div class="pl-6 pb-2">
                <h4 class="text-md text-justify"><i>Array</i> adalah struktur yang dapat menyimpan data-data dalam bentuk daftar sebagai satu kesatuan.</h4>
            </div>
            <div class="pt-4 float-right">
                <a href="{{ route('materialdashboard.array') }}"><button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:scale-105 duration-300 font-semibold">Baca Selanjutnya...</button></a>
            </div>
        </div>
    </div>
</div>
@endsection