@extends('layouts.main2')
@section('container')
<div class="flex justify-center items-center pt-24">
    <h1 class="text-5xl font-extrabold w-9/12 text-center">{{ $title }}</h1>
</div>
<div class="flex justify-center items-center pt-10">
    <div class="w-9/12 ">
        <div class="pb-2">
            <h4 class="text-lg text-justify pb-4">
                Tipe data di dalam bahasa pemrograman Python terdiri dari dua macam, yakni tipe data dasar dan bentukan.
                <ul class="list-disc pl-10">
                    <li>Tipe data dasar: tipe data yang dapat langsung digunakan.</li>
                    <li>Tipe data bentukan: tipe data yang diturunkan atau dibentuk dari tipe data dasar atau tipe data bentukan lainnya.</li>
                </ul>
            </h4>
            <h4 class="text-lg text-justify pb-4">
                Dalam pemrograman ada tipe data dasar sebagai berikut.
                <ul class="list-disc pl-10">
                    <li>Integer: Bilangan bulat</li>
                    <li><i>Float</i>: Bilangan riil</li>
                    <li>Karakter: 1 karakter huruf, angka, atau tanda baca</li>
                    <li><i>String</i>: Lebih dari 1 karakter huruf, angka, atau tanda baca</li>
                    <li><i>Boolean</i>: Bilangan logika</li>
                </ul>
            </h4>
            <h4 class="text-lg text-justify pb-4">
                <div class="overflow-x-auto px-24">
                    <table class="table-auto min-w-full divide-y divide-gray-200">
                      <thead>
                        <tr>
                          <th class="px-6 py-4 bg-gray-50 text-left text-md leading-4 font-medium text-gray-500 uppercase tracking-wider">Tipe Data</th>
                          <th class="px-6 py-4 bg-gray-50 text-center text-md leading-4 font-medium text-gray-500 uppercase tracking-wider">Rentang Nilai</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="text-base">
                            <td class="px-6 py-3 whitespace-no-wrap">Integer</td>
                            <td class="px-6 py-3 whitespace-no-wrap">Bilangan bulat secara teoritis memiliki rentang tidak terbatas, dari minus hingga tak terhingga sampai plus tak terhingga. 
                                Dalam bahasa pemrograman Python, rentang nilai untuk tipe data interger adalah -2.147.483.648 hingga 2.147.483.647.</td>
                        </tr>
                        <tr class="text-base">
                            <td class="px-6 py-3 whitespace-no-wrap"><i>Float</i></td>
                            <td class="px-6 py-3 whitespace-no-wrap">Bilangan riil, atau bilangan memiliki angka desimal secara teoritis memiliki rentang tidak terbatas, dari minus tak terhingga sampai plus tak terhingga. Dalam bahasa pemrograman Python, 
                                rentang nilai untuk tipe data <i>float</i> adalah 3,4 x 10<sup class="text-xs">-37</sup> hingga 3,4 x 10<sup class="text-sm">37</sup>. 
                                Perbedaan <i>float</i> dengan integer adalah bilangan riil atau <i>float</i> harus mengandung titik (.).
                            </td>
                        </tr>
                        <tr class="text-base">
                            <td class="px-6 py-3 whitespace-no-wrap">Karakter</td>
                            <td class="px-6 py-3 whitespace-no-wrap">Semua huruf dalam abjad baik huruf besar maupun huruf kecil (a-z, A-Z), angka (0..9), tanda baca (! : ; , .), semua operator arimetika (+ - * /), dan karakter khusus ($ # @).
                            </td>
                        </tr>
                        <tr class="text-base">
                            <td class="px-6 py-3 whitespace-no-wrap"><i>String</i></td>
                            <td class="px-6 py-3 whitespace-no-wrap">Gabungan dari beberapa karakter. Rentang nilainya sama dengan karakter.
                            </td>
                        </tr>
                        <tr class="text-base">
                            <td class="px-6 py-3 whitespace-no-wrap"><i>Boolean</i></td>
                            <td class="px-6 py-3 whitespace-no-wrap">Bilangan logika hanya memiliki dua buah nilai: benar (True) atau salah (False). Nilai benar biasanya juga dinyatakan dengan 1 dan salah dinyatakan dengan 0.
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            </h4>
            <h4 class="text-lg text-justify pb-4">
                Tipe data integer dan <i>float</i> disebut juga dengan tipe data numerik atau angka, sedangkan tipe data <i>string</i> dikenal dengan tipe data alfanumerik karena merupakan gabungan antara angka dan huruf. 
                Tipe data <i>string</i> sebenarnya bukan tipe data dasar, karena tipe data ini dibentuk dari rangkaian tipe data karakter. Namun, karena tipe data <i>string</i> sering digunakan dalam pemrograman, 
                sebagian besar bahasa pemrograman menganggap <i>string</i> sebagai tipe data dasar.
            </h4>
            <h4 class="text-lg text-justify pb-4">
                <p><b>Memeriksa Tipe Data</b></p>
                <p>Dalam bahasa pemrograman Python, tipe data bisa diubah-ubah pada saat <i><b>re-assignment</b></i> variabel. Kita bisa menggunakan fungsi <span class="font-[Montserrat] font-normal text-green-500">type ()</span> untuk memeriksa tipe data dari nilai yang disimpan pada variabel</p>
            </h4>
            <h4 class="text-lg text-justify pb-4">
                <p><b>Tipe Data Bentukan</b></p>
                <p>Beberapa nilai dari tipe data bentukan dikeompokkan dan diacu sebagai sebuah tipe data tunggal. Python menyediakan beberapa tipe data bentukan, seperti:</p>
                <ul class="list-disc pl-10">
                    <li><i>List.</i></li>
                    <li><i>Dictionaries.</i></li>
                    <li><i>Multidimensional list.</i></li>
                    <li><i>Sets.</i></li>
                    <li><i>Tuples.</i></li>
                    <li><i>Stack.</i></li>
                    <li><i>Queue.</i></li>
                </ul>
            </h4>
        </div>
        <div class="flex justify-center pb-5">
            <video width="640" height="360" controls>
                <source src="assets/TIPE DATA.mp4" type="video/mp4">
            </video>
        </div>
        <div class="pb-20 flex justify-center">
            <a href="{{ route('compile.tipedata.1') }}"><button class="border-4 border-[#395886] bg-[#638ECB] text-white py-2 w-72 rounded-md hover:bg-[#395886] font-medium">Ayo Latihan Live Coding</button></a>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="bg-[#395886] fixed py-3 px-10 bottom-0 w-full">
    <div class="flex justify-between items-center">
        <a href="{{ route('material.variable') }}" class="text-white text-sm underline underline-offset-2"><i class="bi bi-chevron-double-left"></i> Pendeklarasian Variable Pemrograman Python</a>
        <a href="{{ route('material.operatorexpresion') }}" class="text-white text-sm underline underline-offset-2">Operator dan Ekspresi Pemrograman Python <i class="bi bi-chevron-double-right"></i></a>
    </div>
</div>
@endsection