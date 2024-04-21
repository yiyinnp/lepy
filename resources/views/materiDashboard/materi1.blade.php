@extends('layouts.main1')
@section('container')
<div class="flex justify-center items-center pt-24 center pl-24">
    <h1 class="text-5xl font-extrabold w-9/12 text-center">{{ $title }}</h1>
</div>
<div class="flex justify-center items-center pt-10 pl-24">
    <div class="w-9/12 ">
        <div class="pb-2">
            <h4 class="text-lg text-justify pb-4">
                Bahasa pemrograman Python pertama kali diperkenalkan pada tahun 1991 oleh Guido van Rossum di Scitching Mathematisch Centrum Belanda.
                Penamaan bahasa pemrogramaan ini terinspirasi dari nama grup komedi bernama Monty Python yang disukai oleh Guido. 
                Pengembangan bahasa pemrograman Python bersifat open source, sehingga Python bermigrasi dari lab ke lab yang lain, satu perusahan ke perusahaan yang lain. 
                Saat ini pengembangan bahasa pemrogramaan ini telah sampai pada versi 3.11.0 yang dirilis pada 24 Oktober 2022.
            </h4>
            <h4 class="text-lg text-justify pb-4">
                Masing-masing versi Python memiliki ciri khas, seperti pada versi Python 2 memiliki fitur Python Enhancement Proposal (PEP)  yang memberikan tuntunan informasi bagi para pengguna. 
                Selain itu, Python 2 memiliki fitur-fitur programmatical diantaranya berfungsi untuk manajemen memori. 
                Pada Python 3 berfokus pada merapikan codebase dan menghilangkan redundancy. 
                Perubahan terbesar dalam Python 3 adalah membuat statemen print dalam fungsi yang built-in.
            </h4>
            <h4 class="text-lg text-justify pb-4">
                Python merupakan bahasa pemrograman yang muncul setelah bahasa pemrograman-pemrograman yang lain. 
                Namun perkembangannya cukup pesat dikarenakan memiliki keunggulan-keunggulan sebagai berikut:
                <ul class="list-decimal pl-10">
                    <li>Keterbacaan atau Readablity</li>
                    <li>Efisien</li>
                    <li>Multifungsi</li>
                    <li>Interoperabilitas</li>
                </ul>
            </h4>
        </div>
        <div class="flex justify-center pb-20">
            <video width="640" height="360" controls>
                <source src="assets/PENGENALAN BAHASA PEMROGRAMAN PYTHON.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>

@endsection