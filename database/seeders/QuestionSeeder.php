<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 1',
                'content' => '1. Deklarasikan sebuah variabel dengan nama \"usia\"!\r\n2. Isi variabel tersebut dengan nilai 27.\r\n3. Tampilkan variabel tersebut menggunakan perintah print!',
            ],
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 2',
                'content' => '1. Deklarasikan sebuah variabel dengan nama \"nama\"!\r\n2. Gunakan perintah input dengan prompt \"Masukkan nama Anda: \" untuk memberikan nilai.\r\n3. Masukkan nilai variabel \"nama\" pada kotak input.\r\n4. Tampilkan nilai variabel \"nama\"!',
            ],
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 3',
                'content' => '1. Deklarasikan sebuah variabel dengan nama \"angka\"!\r\n2. Isi variabel tersebut dengan nilai 10.\r\n3. Tampilkan variabel tersebut menggunakan perintah print dan kalimat \"Nilai Angka Awal:\"!\r\n4. Lakukan manipulasi nilai variabel dengan mengkalikan 30.\r\n5. Tampilkan variabel tersebut menggunakan perintah print dan kalimat \"Nilai Angka Akhir:\"!',
            ],
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 4',
                'content' => '1. Deklarasikan sebuah variabel dengan nama \"nilai_string\"\r\n2. Isi variabel tersebut dengan nilai 5\r\n3. Deklarasikan sebuah variabel dengan nama \"nilai_float\" dan konversi variabel nilai_string\r\n4. Tampilkan variabel \"nilai_float\" menggunakan perintah print',
            ],
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 5',
                'content' => '1. Deklarasikan sebuah variabel dengan nama \"nilai_string\"!\r\n2. Gunakan perintah input untuk memberikan nilai dengan prompt \"Masukkan nilai: \".\r\n3. Masukkan nilai variabel \"nilai_string\" pada kotak input!\r\n4. Tampilkan nilai dari variabel \"nilai_string\"!\r\n5. Deklarasikan variabel dengan nama \"nilai\"!\r\n6. Isi variabel \"nilai\" dengan hasil konversi tipe data nilai variabel \"nilai_string\" menjadi tipe data integer, lalu kalikan nilainya dengan bilangan 5.\r\n7. Tampilkan nilai dari variabel \"nilai\"!',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 1',
                'content' => '1. Buat sebuah program Python yang mendeklarasikan variabel nama, angka, dan nilai!\r\n2. Isi variabel tersebut dengan nilai Lala, 80, dan 70.8.\r\n3. Tampilkan nilai-nilai variabel tersebut',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 2',
                'content' => 'Buatlah program Python yang meminta  pengguna untuk menginputkan nama dengan prompt "Masukkan nama Anda: " dan mencetak nama serta tipe data dari variabel nama!',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 3',
                'content' => 'Buatlah program Python yang meminta pengguna untuk menginputkan umur dengan prompt "Masukkan umur Anda: " dan mengkonversikannya menjadi integer, serta mencetak umur tipe data dari variabel umur!',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 4',
                'content' => 'Buatlah list angka dalam program Python yang menyimpan data 10, 20, 30, dan 40! Kemudian tampilkan list tersebut.',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 5',
                'content' => 'Buatlah tuple warna dengan tanda kurung dalam program Python yang menyimpan data merah, 8.5, dan 70! Kemudian tampilkan data pada tuple tersebut.',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 1',
                'content' => '1. Buatlah program Python untuk menghitung luas persegi!\r\n2. Program harus meminta pengguna untuk memasukkan sisi persegi yang bernilai desimal dengan prompt \"Masukkan panjang sisi persegi: \".\r\n3. Cetak variabel penyimpan nilai sisi!\r\n4. Tusliskan rumus untuk mengitung luas persegi!\r\n5. Cetak hasil luas persegi ke layar dengan prompt \"Luas persegi adalah:\"!',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 2',
                'content' => '1. Buatlah program Python untuk menghitung luas persegi panjang!\r\n2. Program harus meminta pengguna untuk memasukkan panjang dan lebar persegi panjang yang bernilai desimal secara berurutan. Prompt untuk perintah inputnya \"Masukkan nilai panjang persegi panjang: \" dan \"Masukkan nilai lebar persegi panjang: \".\r\n3. Cetak variabel penyimpan nilai panjang dan lebar!\r\n4. Tusliskan rumus untuk mengitung luas persegi panjang!\r\n5. Cetak hasil luas persegi panjang ke layar dengan tambahan kalimat \"Luas persegi panjang adalah: \"!',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 3',
                'content' => 'sisi = float(input(\"Masukkan nilai panjang sisi persegi: \"))\r\nprint(sisi)\r\nkeliling = 4 * sisi\r\nprint(\"Keliling persegi adalah:\", keliling)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 4',
                'content' => '1. Buatlah program untuk menghitung keliling sebuah persegi! \r\n2. Program harus meminta input dari pengguna untuk mengisi nilai desimal panjang sisi tabung dengan prompt \"Masukkan nilai panjang sisi persegi: \", kemudian menghitung keliling dan menampilkan panjang sisi persegi, dan keliling persegi tersebut. \r\n3. Saat menampilkan keliling persegi menyertakan kalimat \"Keliling persegi adalah: \".',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 5',
                'content' => '1. Buatlah program untuk mengkonversi suhu dari Celcius menjadi Fahrenheit! \r\n2. Program harus meminta input dari pengguna untuk mengisi nilai suhu yang ingin konversi dengan prompt \"Masukkan nilai suhu: \", kemudian menghitung dan menampilkan suhu dan hasil konversi suhu. \r\n3. Saat menampilkan hasil konversi suhu dengan menyertakan kalimat \"Hasil konversi suhu adalah: \".',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 1',
                'content' => 'Buatlah sebuah program Python yang meminta pengguna untuk memasukkan dan mencetak usia mereka! Jika usia pengguna sama dengan atau lebih besar dari 17 tahun, program akan mencetak "Selamat, Anda memasuki usia legal!". Jika tidak, program tidak melakukan apa pun. Prompt untuk fungsi input "Masukkan usia Anda: ".',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 2',
                'content' => 'Buatlah sebuah program Python sederhana yang meminta pengguna memasukkan suatu bilangan desimal yang disimpan di variabel angka, kemudian mencetak bilangan tersebut! Jika angka lebih dari 0 maka program akan mencetak "Bilangan positif", sedangkan jika kurang dari 0 akan mencetak "Bilangan negatif".',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 3',
                'content' => 'Buatlah sebuah program Python sederhana yang meminta pengguna memasukkan suatu bilangan bulat yang disimpan di dalam variabel angka! Jika habis dibagi 2 maka mencetak "Bilangan genap", jika tidak habis dibagi 2 maka mencetak "Bilangan ganjil". Prompt untuk fungsi input "Masukkan suatu bilangan: ".',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 4',
                'content' => 'Buatlah sebuah program Python yang meminta pengguna untuk memasukkan umur dengan prompt "Masukkan umur: " dan mencetak umur tersebut!\r\nProgram tersebut akan mencetak kategori usia seseorang berdasarkan aturan berikut:\r\n1. Jika umur kurang dari 18, cetak "Remaja".\r\n2. Jika umur antara 18 dan 65, cetak "Dewasa".\r\n3. Jika umur lebih dari 65, cetak "Lanjut Usia".',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 5',
                'content' => 'uatlah sebuah program Python yang meminta pengguna untuk memasukkan nilai dengan prompt \"Masukkan nilai Anda: \" dan mencetak nilai tersebut!\r\nProgram tersebut akan mencetak kategori nilai berdasarkan aturan berikut:\r\n1. Jika nilai lebih atau sama dengan 90, cetak \"Grade Anda adalah: A\". \r\n2. Jika nilai lebih atau sama dengan 80, cetak \"Grade Anda adalah: B\". \r\n3. Jika nilai lebih atau sama dengan 70, cetak \"Grade Anda adalah: C\". \r\n4. Jika nilai lebih atau sama dengan 60, cetak \"Grade Anda adalah: D\". \r\n5. Jika nilai kurang dari 60, cetak \"Grade Anda adalah: E\".',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 1',
                'content' => 'Buatlah program perulangan while yang menampilkan semua bilangan bulat positif dari 1 hingga 4! Variabel yang menyimpan data angka 1 adalah i dan yang menyimpan data angka 4 adalah j.',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 2',
                'content' => 'Buatlah program dengan perulangan for untuk menampilkan bilangan dari 1 hingga 5 yang disimpan dalam variabel target i!',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 3',
                'content' => 'Buatlah program dengan perulangan for untuk menampilkan bilangan ganjil dari 1 hingga 10 yang disimpan dalam variabel target i!',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 4',
                'content' => 'Buatlah sebuah program Python yang meminta pengguna untuk memasukkan sebuah bilangan bulat positif n dengan prompt "Masukkan bilangan bulat: ", lalu mencetak segitiga terbalik dengan bintang (*), dimana jumlah baris bintang sesuai dengan bilangan yang dimasukkan pengguna.',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 5',
                'content' => 'Buat program Python perulangan bersarang (nested loop) untuk mencetak segitiga angka seperti berikut: \r\n1\r\n12\r\n123\r\n1234',
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
