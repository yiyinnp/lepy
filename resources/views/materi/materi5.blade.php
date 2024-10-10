@extends('layouts.main2')
@section('container')
    <div class="flex justify-center items-center pt-24">
        <div class="w-9/12">
            <h1 class="lg:text-4xl text-3xl font-extrabold w-auto text-center">{{ $title }}</h1>
        </div>
    </div>
    <div class="flex justify-center items-center pt-10">
        <div class="w-9/12 ">
            <div class="pb-2">
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Struktur berurutan adalah struktur yang paling dasar dalam sebuah pemrograman. Struktur ini memproses
                    sebuah program secara berurutan atau satu per satu,
                    mulai dari perintah pertama hingga perintah terakhir atau dengan urutan input-proses-output. Contoh
                    algoritma dari struktur berurutan pada bahasa pemrograman Python
                    adalah program menghitung luas persegi dan luas lingkaran.
                </h4>
                <img src="/assets/1.png" alt="" srcset="" class="pb-4 mx-auto">
                <h4 class="text-lg text-justify pb-4">
                    Perhatikan bagan di atas. Input merupakan interface untuk memasukkan data yang akan diolah. Proses
                    merupakan langkah-langkah yang diperlukan untuk melakukan mengubah data hasil inputan menjadi output.
                    Output merupakann hasli akhir dari proses pengolahan data input.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Sebagai contoh, berikut akan dibahas program sederhana untuk mengitung luas sebuah persegipanjang bisa
                    dilakukan dengan script sebagai berikut.
                    <div class="py-2">
                        <div class="lg:px-10 px-2 overflow-x-auto">
                            <div class="lg:w-full w-[35rem] p-3 bg-slate-700 rounded-lg"
                                style="font-family: 'Source Code Pro';">
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Mendefinisikan variabel panjang dan
                                    lebar</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">panjang = <span
                                        class="text-rose-500">10</span></h3>
                                <h3 class="lg:text-lg text-base font-md text-white">lebar = <span
                                        class="text-rose-500">5</span></h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Menghitung luas persegi panjang
                                </h3>
                                <h3 class="lg:text-lg text-base font-md text-white">luas = panjang * lebar</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Menampilkan hasil</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-yellow-500">print</span>(<span class="text-green-500">"Luas persegi
                                        panjang adalah:"</span>, luas)</h3>
                            </div>
                        </div>
                    </div>
                </h4>
            </div>
            <div class="flex justify-center pb-5">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/6U497v7NKQ4?si=1an7AcpHude1EirF"
                    frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="pb-20 flex justify-center">
                <a href="{{ route('compile.sequential.1') }}"><button
                        class="border-4 border-[#395886] bg-[#638ECB] text-white py-2 w-72 rounded-md hover:scale-105 duration-300 font-medium">Ayo
                        Latihan Live Coding</button></a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="bg-[#dadce1] fixed py-2 px-10 bottom-0 w-full rounded-t-lg">
        <div class="flex justify-between items-center hidden sm:flex">
            <a href="{{ route('material.operatorexpresion') }}"><button type="button"
                    class="bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-left-fill"></i>Materi Sebelumnya</button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-book-half"></i> Kembali ke Menu Materi</button></a>
            <a href="{{ route('material.branching') }}"><button type="button"
                    class="ml-2 bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300">Materi
                    Selanjutnya<i class="bi bi-caret-right-fill"></i></button></a>
        </div>
        <div class="flex justify-between items-center md:hidden">
            <a href="{{ route('material.operatorexpresion') }}"><button type="button"
                    class="bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-left-fill"></i></button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-book-half"></i></button></a>
            <a href="{{ route('material.branching') }}"><button type="button"
                    class="ml-2 bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-right-fill"></i></button></a>
        </div>
    </div>
@endsection
