<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'generic_name' => 'Fentanil',
            'description' => " Hanya untuk nyeri berat dan harus diberikan oleh tim medis resusitasi",
            'restriction_formula' => '5 amp/kasus',
            "form" => 'inj 0,05 mg/mL (i.m./i.v.)',
            'faskes_tk1' => false,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 1
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Hidromorfon',
            'restriction_formula' => '30 tab/bulan',
            "form" => 'tab lepas lambat 8 mg',
            'faskes_tk1' => false,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 1
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Kodein',
            'restriction_formula' => '30 tab/bulan',
            "form" => 'tab 10 mg',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 1
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Asam Mefenamat',
            'restriction_formula' => '30 kaps/bulan',
            "form" => 'kaps 250 mg',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 2
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Ibuprofen',
            'restriction_formula' => '30 tab/bulan',
            "form" => 'tab 200 mg',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 2
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Ketoprofen',
            'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral',
            "form" => 'inj 50 mg/mL',
            'faskes_tk1' => false,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 2
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Alopurinol',
            'description' => 'Tidak diberikan pada saat nyeri akut',
            'restriction_formula' => '30 tab/bulan',
            "form" => 'tab 100 mg',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 3
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Kolkisin',
            'restriction_formula' => '30 tab/bulan',
            "form" => 'tab 500 mcg',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 3
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Probenesid',
            'restriction_formula' => '30 tab/bulan',
            "form" => 'tab 500 mg',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 3
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Amitriptilin',
            'restriction_formula' => '30 tab/bulan',
            "form" => 'tab 500 mg',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 4
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Gabapentin',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
            'restriction_formula' => '60 kaps/bulan',
            "form" => 'kaps 100 mg',
            'faskes_tk1' => false,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 4
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Karbamazepin',
            'description' => 'Hanya untuk neuralgia trigeminal',
            'restriction_formula' => '60 tab/bulan',
            "form" => 'tab 100 mg',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 4
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Bupivakain',
            "form" => 'inj 0,5%',
            'faskes_tk1' => false,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 5
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Etil Klorida',
            "form" => 'spray 100 mL',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 5
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'Lidokain',
            "form" => 'inj 2%',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 5
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "deksmedetomidin",
            "description" => "Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.",
            "form" => "inj 100 mcg/mL",
            "faskes_tk1" => false,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 6
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "desfluran",
            "form" => "ih",
            "faskes_tk1" => false,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 6
        ]);
        
        DB::table('medicines')->insert([
            "generic_name" => "halotan",
            "description" => "Tidak boleh digunakan berulang dan tidak untuk pasien dengan gangguan fungsi hati",
            "form" => "ih",
            "faskes_tk1" => false,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 6
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "atropin",
            "form" => "inj 0,25 mg/mL (i.v./s.k.)",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 7
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "diazepam",
            "form" => "inj 5 mg/mL)",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 7
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "midazolam",
            "description" => "Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.",
            "form" => "inj 1 mg/mL (i.v.)",
            "restriction_formula" => "Dosis rumatan: 1 mg/jam (24 mg/hari), Dosis premedikasi: 8 vial/kasus.",
            "faskes_tk1" => false,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 7
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "midazolam",
            "description" => "Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.",
            "form" => "inj 5 mg/mL (i.v.)",
            "restriction_formula" => "Dosis rumatan: 1 mg/jam (24 mg/hari), Dosis premedikasi: 8 vial/kasus.",
            "faskes_tk1" => false,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 7
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "deksametason",
            "form" => "inj 5 mg/mL",
            "restriction_formula" => "20 mg/hari.",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 8
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "difenhidramin",
            "form" => "inj 10 mg/mL (i.v./i.m.)",
            "restriction_formula" => "30 mg/hari.",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 8
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "klorfeniramin",
            "form" => "tab 4 mg",
            "restriction_formula" => "3 tab/hari, maks 5 hari.",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 8
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "diazepam",
            "form" => "inj 5 mg/mL",
            "restriction_formula" => "10 amp/kasus, kecuali untuk kasus di ICU",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 9
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "fenitoin",
            "form" => "kaps 30 mg*",
            "restriction_formula" => "90 kaps/bulan",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 9
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "fenobarbital",
            "form" => "tab 30 mg*",
            "restriction_formula" => "120 tab/bulan.",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 9
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "albendazol",
            "form" => "tab 400 mg*",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 10
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "mebendazol",
            "form" => "tab 100 mg",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 10
        ]);

        DB::table('medicines')->insert([
            "generic_name" => "prazikuantel",
            "form" => "tab 600 mg",
            "faskes_tk1" => true,
            "faskes_tk2" => true,
            "faskes_tk3" => true,
            "category" => 10
        ]);
    }
}
