<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 1',
                'content' => 'usia = 27\r\nprint(usia)',
            ],
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 2',
                'content' => 'nama = input("Masukkan nama Anda: ")\r\nprint(nama)',
            ],
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 3',
                'content' => 'angka = 10\r\nprint("Nilai Angka Awal:", angka)\r\nangka *= 30\r\nprint("Nilai Angka Akhir:", angka)',
            ],
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 4',
                'content' => 'nilai_string = \"5\"\r\nnilai_float = float(nilai_string)\r\nprint(nilai_float)',
            ],
            [
                'user_id' => '2',
                'title' => 'Pendeklarasian Variable 5',
                'content' => 'nilai_string = input(\"Masukkan nilai: \")\r\nprint(nilai_string)\r\nnilai = int(nilai_string) * 5\r\nprint(nilai)',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 1',
                'content' => 'nama = \"Lala\"\r\nangka = 80\r\nnilai = 70.8\r\nprint(nama)\r\nprint(angka)\r\nprint(nilai)',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 2',
                'content' => 'nama = input(\"Masukkan nama Anda: \")\r\nprint(nama)\r\nprint(type(nama))',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 3',
                'content' => 'umur = int(input(\"Masukkan umur Anda: \"))\r\nprint(umur)\r\nprint(type(umur))',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 4',
                'content' => 'list = [10, 20, 30, 40]\r\nprint(list)',
            ],
            [
                'user_id' => '2',
                'title' => 'Tipe Data 5',
                'content' => 'tuple = ("merah", 8.5, 70)\r\nprint(tuple)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 1',
                'content' => 'sisi = float(input("Masukkan panjang sisi persegi: "))\r\nprint(sisi)\r\nluas = sisi * sisi\r\nprint("Luas persegi adalah:", luas)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 2',
                'content' => 'panjang = float(input(\"Masukkan nilai panjang persegi panjang: \"))\r\nprint(panjang)\r\nlebar = float(input(\"Masukkan nilai lebar persegi panjang: \"))\r\nprint(lebar)\r\nluas = panjang * lebar\r\nprint(\"Luas persegi panjang adalah:\", luas)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 3',
                'content' => 'sisi = float(input(\"Masukkan nilai panjang sisi persegi: \"))\r\nprint(sisi)\r\nkeliling = 4 * sisi\r\nprint(\"Keliling persegi adalah:\", keliling)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 4',
                'content' => 'jari_jari = float(input(\"Masukkan nilai jari-jari tabung: \"))\r\nprint(jari_jari)\r\ntinggi = float(input(\"Masukkan nilai tinggi tabung: \"))\r\nprint(tinggi)\r\nvolume = 3.14 * jari_jari**2 * tinggi\r\nprint(\"Volume tabung adalah:\", volume)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Berurutan 5',
                'content' => 'suhu = float(input(\"Masukkan nilai suhu: \"))\r\nprint(suhu)\r\nsuhu_fahrenheit = (suhu * 9/5) + 32\r\nprint(\"Hasil konversi suhu adalah:\", suhu_fahrenheit)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 1',
                'content' => 'usia = int(input("Masukkan usia Anda: "))\r\nprint(usia)\r\nif usia >= 17:\r\n print("Selamat, Anda memasuki usia legal!")',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 2',
                'content' => 'angka = float(input(\"Masukkan suatu bilangan: \"))\r\nprint(angka)\r\nif angka > 0:\r\n print(\"Bilangan positif\")\r\nelse:\r\n print(\"Bilangan negatif\")',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 3',
                'content' => 'angka = int(input(\"Masukkan suatu bilangan: \"))\r\nprint(angka)\r\nif angka % 2 == 0:\r\n print(\"Bilangan genap\")\r\nelse:\r\n print(\"Bilangan ganjil\")',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 4',
                'content' => 'umur = int(input(\"Masukkan umur: \"))\r\nprint(umur)\r\nif umur < 18:\r\n print(\"Remaja\")\r\nelif umur >= 18 and umur <= 65:\r\n print(\"Dewasa\")\r\nelse:\r\n print(\"Lanjut Usia\")',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Percabangan 5',
                'content' => 'nilai = int(input(\"Masukkan nilai Anda: \"))\r\nprint(nilai)\r\nif nilai >= 90:\r\n print(\"Grade Anda adalah: A\")\r\nelif nilai >= 80:\r\n print(\"Grade Anda adalah: B\")\r\nelif nilai >= 70:\r\n print(\"Grade Anda adalah: C\")\r\nelif nilai >= 60:\r\n print(\"Grade Anda adalah: D\")\r\nelse:\r\n print(\"Grade Anda adalah: E\")',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 1',
                'content' => 'j = 4\r\ni = 1\r\nwhile i <= j:\r\n print(i)\r\n i += 1',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 2',
                'content' => 'for i in range(1, 6):\r\n print(i)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 3',
                'content' => 'for i in range(1, 11, 2):\r\n print(i)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 4',
                'content' => 'n = int(input(\"Masukkan sebuah bilangan bulat positif: \"))\r\nprint(n)\r\nfor i in range(n, 0, -1):\r\n print(\"*\" * i)',
            ],
            [
                'user_id' => '2',
                'title' => 'Struktur Perulangan 5',
                'content' => 'for i in range(1, 5):\r\n for j in range(1, i + 1):\r\n print(j, end=\'\')\r\n print()',
            ],
        ];

        foreach ($answers as $answer) {
            Answer::create($answer);
        }
    }
}
