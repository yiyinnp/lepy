@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-28">
    <div class="flex justify-center items-center">
        <div class="w-9/12">
            <h1 class="lg:text-4xl text-3xl font-extrabold w-auto text-center">{{ $title }}</h1>
        </div>
    </div>
    <div class="flex justify-center items-center pt-10">
        <div class="w-9/12 ">
            <div class="pb-2">
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Operator digunakan untuk memanipulasi nilai suatu variabel. Variabel yang nilainya dimodifikasi oleh operator disebut dengan <i>operand</i>. 
                    Untuk kemudahan penjelasan, operator pada bahasa pemrograman Python diklasifikasikan menjadi beberapa kelompok yang diantaranya adalah sebagai berikut.
                    <ul class="list-disc pl-10">
                        <li><i>Arithmetic</i> Operator</li>
                        <li><i>Assignment</i> Operator</li>
                        <li><i>Comparison</i> Operator</li>
                        <li><i>Logical</i> Operator</li>
                        <li><i>Bitwise</i> Operator</li>
                    </ul>
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-6">
                    Berikut adalah penjelasannya lebih lanjut.
                    <ul class="list-decimal pl-10">
                        <li><b><i>Arithmetic</i> Operator</b></li>
                        <p>Operator ini merupakan operator yang biasa digunakan dalam operasi matematika. Daftar operator tersebut dapat dilihat pada tabel di bawah ini:</p>
                        <div class="overflow-x-auto py-5"">
                            <table class="table-auto min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Operator</th>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Operasi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">+</td>
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">Penjumlahan</td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">-</td>
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">Pengurangan</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">*</td>
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">Perkalian</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">/</td>
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">Pembagian</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">%</td>
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">Modulo atau sisa hasil bagi</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">**</td>
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">Pangkat</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">//</td>
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">Pembagian Bulat</td>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <li><b><i>Assignment</i> Operator</b></li>
                        <p><i>Assignment</i> Operator atau yang juga biasa disebut operasi penugasan merupakan operator yang digunakan untuk memberikan nilai ke suatu variabel. 
                        Tabel di bawah ini berisi daftar <i>assignment</i> operator.</p>
                        <div class="overflow-x-auto py-5">
                            <table class="table-auto min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Operator</th>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Fungsi</th>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">=</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Memberikan nilai kepada sebuah variabel</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">a=100</td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">+=</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Untuk menambah nilai variabel di kiri dengan nilai di sebelah kanan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">x += 10 <i class="bi bi-arrow-right"></i> x=x+10</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">-=</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Untuk mengurangi nilai variabel di kiri dengan nilai di sebelah kanan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">x -= 5 <i class="bi bi-arrow-right"></i> x=x-5</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">/=</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Untuk membagi nilai variabel di kiri dengan nilai di sebelah kanan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">x /= 10 <i class="bi bi-arrow-right"></i> x=x/10</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">%=</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Sisa hasil bagi antara nilai variabel di kiri dengan nilai di sebelah kanan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">x %= 5 <i class="bi bi-arrow-right"></i> x=x%5</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">**=</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Melakukan operasi pangkat antara nilai variabel kiri dengan nilai di kanan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">x **= 5 <i class="bi bi-arrow-right"></i> x=x**5</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">//=</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Melakukan operasi membagi bulat antara nilai variabel kiri dengan nilai di kanan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">x //= 5 <i class="bi bi-arrow-right"></i> x=x//5</td>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <li><b><i>Comparison</i> Operator</b></li>
                        <p>Operator ini dikenal juga dengan sebutan operator perbandingan atau relasional yaitu operator yang digunakan untuk melakukan perbandingan antara dua buah <i>operand</i> dan menghasilkan nilai <b><i>true</i></b> atau <b><i>false</i></b>.</p>
                        <div class="overflow-x-auto py-5">
                            <table class="table-auto min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Operator</th>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Fungsi</th>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">==</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Sama dengan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">$a==$b <i class="bi bi-arrow-right"></i> True jika $a sama dengan $b</td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">!= atau <></td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Tidakk sama dengan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">$a!=$b atau $a<>$b <i class="bi bi-arrow-right"></i> True jika $a tidak sama dengan $b</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center"><</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Kurang dari</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">$a < $b <i class="bi bi-arrow-right"></i> True jika $a kurang dari $b</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">></td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Lebih besar dari</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">$a > $b <i class="bi bi-arrow-right"></i> True jika $a lebih besar dari $b</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center"><=</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Kurang dari atau sama dengan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">$a <= $b <i class="bi bi-arrow-right"></i> True jika $a kurang dari atau sama dengan $b</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">>=</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Lebih besar dari atau sama dengan</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">$a <= $b <i class="bi bi-arrow-right"></i> True jika $a lebih besar dari atau sama dengan $b</td>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <li><b><i>Logic</i> Operator</b></li>
                        <p>Operator ini biasa digunakan untuk menggabungkan kondisi berganda dan menghasilkan sebuah ekspresi bernilai <i>true</i> atau <i>false</i>. Yang termasuk dalam <i>logic</i> operator adalah:</p>
                        <div class="overflow-x-auto py-5">
                            <table class="table-auto min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Operator</th>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Fungsi</th>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">and</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Melakukan operasi AND</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">a and b <i class="bi bi-arrow-right"></i> True jika a dan b keduannya bernilai True</td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">or</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Melakukan operasi OR</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">a or b <i class="bi bi-arrow-right"></i> True jika a dan b salah satunya bernilai True</td>
                                    </td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">not</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Melakukan operasi NOT</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">not a <i class="bi bi-arrow-right"></i> True jika a adalah False atau sebaliknya</td>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <li><b><i>Bitwise</i> Operator</b></li>
                        <p>Operator ini merupakan operator yang digunakan untuk melakukan operasi berdasarkan bit atau bilangan biner. Tabel di bawah ini merupakan daftar <i>bitwise</i> operator</p>
                        <div class="overflow-x-auto py-5">
                            <table class="table-auto min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Operator</th>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Fungsi</th>
                                <th class="px-6 py-4 bg-gray-50 text-md leading-4 font-medium text-gray-500 uppercase tracking-wider text-center">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">&</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Melakukan operasi AND</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">a = 00111100 <br>
                                                                            b = 00001101 <br>
                                                                            a & b = 00001100</td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">|</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Melakukan operasi OR</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">a = 00111100 <br>
                                        b = 00001101 <br>
                                        a | b = 00111101</td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">^</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Melakukan operasi XOR</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">a = 00111100 <br>
                                        b = 00001101 <br>
                                        a ^ b = 00110001</td>
                                </tr>
                                <tr class="text-base">
                                    <td class="px-6 py-2 whitespace-no-wrap text-center">~</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">Negasi</td>
                                    <td class="px-6 py-2 whitespace-no-wrap">a = 00111100 <br>
                                        ~a = 11000011</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </ul>
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                <p><b>Ekspresi</b></p>
                Ekspresi (<i>expression</i>) adalah gabungan dari nilai, variabel, dan operator. Berikut adalah contoh ekspresi dalam Python:
                <ul class="list-disc pl-10">
                    <li>20+30</li>
                    <li>Jam + 1</li>
                    <li>Menit / 60</li>
                    <li>5 * 2</li>
                    <li>(5 + 9) * (12 + 7)</li>
                </ul>
                </h4>
            </div>
            <div class="flex justify-center pb-20">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/XPtn8okXpL8?si=sD7zdKeysTg3F_0t"
                    frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection