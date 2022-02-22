<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "name" => "Analgesik Narkotik",
            "description" => "Analgesik bersifat narkotik seperti opioid dan opidium bisa menekan sistem saraf pusat dan mengubah persepsi terhadap nyeri (noisepsi). Obat jenis ini lebih kuat dalam mengurangi nyeri dibandingkan OAINS"
        ]);

        DB::table('categories')->insert([
            "name" => "Analgesik Non Narkotik",
            "description" => "Obat Analgesik Non-Narkotik dalam Ilmu Farmakologi juga sering dikenal dengan istilah Analgetik/Analgetika/ Analgesik Perifer. Analgetika perifer (non-narkotik), yang terdiri dari obat-obat yang tidak bersifat narkotik dan tidak bekerja sentral"
        ]);

        DB::table('categories')->insert([
            "name" => "Antipirai",
            "description" => "Fenofibrate, obat golongan agonis PPAR-alfa (peroxisome proliferator-activated receptor alpha) yang umum digunakan untuk penanganan hiperlipidemia, ditemukan dapat menurunkan kadar asam urat dalam darah (antipirai)"
        ]);

        DB::table('categories')->insert([
            "name" => "Nyeri Neuropatik",
            "description" => "Neuropati adalah istilah yang digunakan untuk gejala gangguan atau penyakit pada saraf di tubuh. Gejala yang muncul bisa berupa nyeri, kesemutan, kram otot, hingga susah buang air kecil"
        ]);

        DB::table('categories')->insert([
            "name" => "Anestetik Lokal",
            "description" => "Anestesi lokal dilakukan dengan memblokir sensasi atau rasa sakit pada area tubuh yang akan dioperasi. Jenis anestesi ini tidak memengaruhi kesadaran, sehingga pasien akan tetap sadar selama menjalani operasi atau prosedur medis"
        ]);

        DB::table('categories')->insert([
            "name" => "Anestetik Umum dan Oksigen",
            "description" => "Anestesi umum atau general anestesi merupakan tindakan meniadakan nyeri secara sentral disertai hilangnya kesadaran yang dapat pulih kembali (reversible). Anestesi umum menyebabkan mati rasa karena obat ini masuk ke jaringan otak dengan tekanan setempat yang tinggi"
        ]);

        DB::table('categories')->insert([
            "name" => "Obat untuk Prosedur Pre Operatif"
        ]);

        DB::table('categories')->insert([
            "name" => "Antialergi dan Obat untuk Anafilaksis"
        ]);

        DB::table('categories')->insert([
            "name" => "Antiepilepsi - Antikonvulsi"
        ]);

        DB::table('categories')->insert([
            "name" => "Antelmintik Intestinal"
        ]);
    }
}
