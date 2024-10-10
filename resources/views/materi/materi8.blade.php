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
                    Pemrograman Python menyediakan beberapa tipe data bentukan, seperti <i>array, list, dictionaries,
                        multidimensional list, sets, tuple, stack,</i> dan <i>queues</i>
                    Struktur umum tipe data buatan yang dimiliki oleh pemrograman python adalah <i>array</i> dan
                    <i>array</i> multidimensi.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    <b><i>Array</i></b> adalah struktur yang dapat menyimpan data-data dalam bentuk daftar sebagai satu
                    kesatuan.
                    <b><i>Array</i></b> didesain untuk mengelompokkan sekumpulan data menjadi satu kesatuan dan diacu
                    sebagai sebuah data tunggal
                    dengan nama tertentu. Bayangkan sebuah <b><i>array</i></b> sebagai lemari dengan banyak laci dimana
                    setiap laci bisa menyimpan
                    sebuah data. Laci-laci pada lemari ini kita sebut dengan <b>elemen <i>array</i></b> atau terkadang
                    disebut juga dengan <b><i>item</i></b>.
                    Meskipun lemari memiliki banyak laci, semua laci di dalam lemari dianggap sebagai satu kesatuan.
                    Begituan pula dengan <b><i>array</i></b>,
                    walaupun array menyimpan banyak nilai, saat suatu data menggunakan tipe data <b><i>array</i></b>, kita
                    akan memperlakukannya sebagai satu variabel.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Dalam bahasa pemrograman python, struktur data ini dibuat sebagai fungsi. <i>Array</i> menyimpan lebih
                    dari satu nilai yang memiliki <b>tipe data yang sama</b>.
                    Misalnya, sebuah <i>array</i> menyimpan 5 buah nilai yang semuanya memiliki tipe data <i>string</i>.
                    Contoh kode program struktur <i>array</i>:
                    <div class="py-2">
                        <div class="lg:px-10 px-2 overflow-x-auto">
                            <div class="lg:w-full w-[35rem] p-3 bg-slate-700 rounded-lg"
                                style="font-family: 'Source Code Pro';">
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Import fungsi array() dari modul
                                    numpy</h3>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Jika belum memiliki modul numpy,
                                    dapat menginstalnya dengan menjalankan perintah: pip install numpy</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-purple-500">from</span> numpy <span
                                        class="text-purple-500">import</span> <span class="text-yellow-500">array</span>
                                </h3>
                                <h3 class="lg:text-lg text-base font-md text-white">a = <span
                                        class="text-yellow-500">array</span>([<span
                                        class="text-green-500">'telur'</span>,<span
                                        class="text-green-500">'susu'</span>,<span class="text-green-500">'keju'</span>])
                                </h3>
                            </div>
                        </div>
                    </div>
                    <br>
                    Setiap elemen dalam <i>array</i> diberi nomor yang dimulai dari 0. Nomor ini dikenal sebagai
                    <b>indeks</b>. Penjelasan dari contoh kode program di atas adalah:
                    <ul class="list-disc lg:pl-10 pl-5">
                        <li>a : nama variabel dengan tipe data <i>array</i></li>
                        <li>array : pemanggilan fungsi <span class="text-green-500"
                                style="font-family: 'Source Code Pro';">array()</span> untuk mendeklarasikan variabel
                            bertipe data <i>array</i></li>
                        <li>'telur' : item pada indeks 0</li>
                        <li>'susu' : item pada indeks 1</li>
                        <li>'keju' : item pada indeks 2</li>
                    </ul>
                    Pembacaan sebuah data <i>item</i> dari <i><b>array</b></i> harus menggunakan <b>indeks</b>. Contohnya
                    seperti berikut:
                    <div class="py-2">
                        <div class="lg:px-10 px-2 overflow-x-auto">
                            <div class="lg:w-full w-[35rem] p-3 bg-slate-700 rounded-lg"
                                style="font-family: 'Source Code Pro';">
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Import fungsi array() dari modul
                                    numpy</h3>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Jika belum memiliki modul numpy,
                                    dapat menginstalnya dengan menjalankan perintah: pip install numpy</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-purple-500">from</span> numpy <span
                                        class="text-purple-500">import</span> <span class="text-yellow-500">array</span>
                                </h3>
                                <h3 class="lg:text-lg text-base font-md text-white">a = <span
                                        class="text-yellow-500">array</span>([<span
                                        class="text-green-500">'telur'</span>,<span
                                        class="text-green-500">'susu'</span>,<span class="text-green-500">'keju'</span>])
                                </h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-yellow-500">print</span>(a[2])</h3>
                            </div>
                        </div>
                    </div>
                    Keluaran atau <i>output</i> dari kode program di atas adalah <b>keju</b>. Penjelasannya adalah program
                    tersebut akan mencetak item variabel a dengan indeks ke-2.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    <i>Array</i> dalam pemrograman Python dioptimalisasi untuk melakukan operasi aritmatika. Jadi, jika kita
                    ingin melakukan suatu operasi <b>aritmatika</b> terhadap elemen-elemen <i>array</i>,
                    kita tidak perlu mengakses elemen <i>array</i> satu per satu. Kita bisa melakukan operasi yang sama
                    untuk semua elemen <i>array</i> secara bersamaan. Contoh kode program sebagai berikut:
                    <div class="py-2">
                        <div class="lg:px-10 px-2 overflow-x-auto">
                            <div class="lg:w-full w-[35rem] p-3 bg-slate-700 rounded-lg"
                                style="font-family: 'Source Code Pro';">
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Import fungsi array() dari modul
                                    numpy</h3>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Jika belum memiliki modul numpy,
                                    dapat menginstalnya dengan menjalankan perintah: pip install numpy</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-purple-500">from</span> numpy <span
                                        class="text-purple-500">import</span> <span class="text-yellow-500">array</span>
                                </h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b = <span
                                        class="text-yellow-500">array</span>([1, 2, 3])</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-yellow-500">print</span>(b)</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-white">b = b/3</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-yellow-500">print</span>(b)</h3>
                            </div>
                        </div>
                    </div>
                    Keluaran atau output dari kode program diatas akan membagi seluruh elemen dalam array dengan bilangan 3.
                    Operasi yang dilakukan pada variabel <i>array</i> tanpa nomor indeks, maka akan mengakses seluruh elemen
                    <i>array</i>.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    <i>Array</i> juga mengakomodasi operasi <i>slice</i>. Operasi <i>slice</i> adalah operasi yang
                    mengekstrak subset elemen dari suatu <i>array</i> dan mengemasnya sebagai <i>array</i> lain, mungkin
                    dalam dimensi/ukuran yang berbeda dari <i>array</i> aslinya.
                    <div class="py-2">
                        <div class="lg:px-10 px-2 overflow-x-auto">
                            <div class="lg:w-full w-[35rem] p-3 bg-slate-700 rounded-lg"
                                style="font-family: 'Source Code Pro';">
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Digunakan untuk mengekstrak elemen
                                    1 hingga 2</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-purple-500">from</span> numpy <span
                                        class="text-purple-500">import</span> <span class="text-yellow-500">array</span>
                                </h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b = <span
                                        class="text-yellow-500">array</span>([1, 2, 3, 4, 5, 6, 7, 8])</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b[1:2]</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Digunakan untuk mengekstrak elemen
                                    pertama hingga elemen ke-2</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b = <span
                                        class="text-yellow-500">array</span>([1, 2, 3, 4, 5, 6, 7, 8])</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b[:2]</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Digunakan untuk mengekstrak elemen
                                    ke-5 hingga elemen terakhir</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b = <span
                                        class="text-yellow-500">array</span>([1, 2, 3, 4, 5, 6, 7, 8])</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b[5:]</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Digunakan untuk mengekstrak semua
                                    elemen</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b = <span
                                        class="text-yellow-500">array</span>([1, 2, 3, 4, 5, 6, 7, 8])</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b[:]</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Digunakan untuk mengekstrak indeks
                                    elemen dari belakang</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b = <span
                                        class="text-yellow-500">array</span>([1, 2, 3, 4, 5, 6, 7, 8])</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b[-2]</h3>
                            </div>
                        </div>
                    </div>
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Untuk mengubah nilai suatu elemen, sama seperti variabel, kita menggunakan perintah <i>assignment</i>.
                    Jangan lupa untuk menyebutkan indeks elemen yang akan diubah nilainya.
                    Jika kita lupa untuk menyebutkan indeks, variabel akan berubah menjadi tipe data primitif sesuai dengan
                    nilai baru yang akan disimpan di variabel tersebut.
                    Karena nilai pada data elemen bisa diubah, karakteristik ini dikenal dengan istilah <b>mutable</b>
                    <div class="py-2">
                        <div class="lg:px-10 px-2 overflow-x-auto">
                            <div class="lg:w-full w-[35rem] p-3 bg-slate-700 rounded-lg"
                                style="font-family: 'Source Code Pro';">
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Digunakan untuk mengekstrak elemen
                                    1 hingga 2</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-purple-500">from</span> numpy <span
                                        class="text-purple-500">import</span> <span class="text-yellow-500">array</span>
                                </h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b = <span
                                        class="text-yellow-500">array</span>([1, 2, 3, 4, 5, 6, 7, 8])</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-yellow-500">print</span>(b)</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Digunakan untuk mengubah nilai
                                    pada elemen 1</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b[1] = 4</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-yellow-500">print</span>(b)</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Mengubah nilai elemen tanpa
                                    menyebut indeks</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">b = 4</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span
                                        class="text-yellow-500">print</span>(b)</h3>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Hasil output hanya akan mencetak
                                    angka 4 dan tipe data variabel sudah berubah menjadi tipe data integer bukan array lagi
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center pt-5">
                        <iframe width="640" height="360"
                            src="https://www.youtube.com/embed/2XtmRUIdGTg?si=9N-WaeahVO2_qULr" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </h4>
            </div>
            <div class="pb-20 flex justify-center">
                <a href="https://colab.google/" target="_blank"><button
                        class="border-4 border-[#395886] bg-[#638ECB] text-white py-2 w-72 rounded-md hover:scale-105 duration-300 font-medium">Ayo
                        Latihan Live Coding</button></a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="bg-[#dadce1] fixed py-2 px-10 bottom-0 w-full rounded-t-lg">
        <div class="flex justify-between items-center hidden sm:flex">
            <a href="{{ route('material.looping') }}"><button type="button"
                    class="bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-left-fill"></i>Materi Sebelumnya</button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-book-half"></i> Kembali ke Menu Materi</button></a>
            <a href="" class="pointer-events-none"><button type="button"
                    class="ml-2 bg-[#dadce1] text-[#dadce1] px-3 py-2 mt-1 rounded hover:scale-105 duration-300">Materi
                    Selanjutnya<i class="bi bi-caret-right-fill"></i></button></a>
        </div>
        <div class="flex justify-between items-center md:hidden">
            <a href="{{ route('material.looping') }}"><button type="button"
                    class="bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:bg-blue-400"><i
                        class="bi bi-caret-left-fill"></i></button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:bg-amber-400"><i
                        class="bi bi-book-half"></i></button></a>
            <a href="" class="pointer-events-none"><button type="button"
                    class="ml-2 bg-[#dadce1] text-[#395886] px-3 py-2 mt-1 rounded hover:bg-[#dadce1]"><i
                        class="bi bi-caret-right-fill"></i></button></a>
        </div>
    </div>
@endsection
