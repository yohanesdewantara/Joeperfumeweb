<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DaftarParfumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            $harga = $faker->randomFloat(3, 1000, 160000);
            DB::table('_daftar_parfum')->insert([
                'nama_parfum' => $faker->randomElement(['Saff and Co', 'Onix', 'Myconos']),
                'jenis_parfum' => $faker->randomElement(['EDC', 'EDT', 'EDP', 'Extrait']),
                'Aroma' => $faker->randomElement(['citrus', 'fruity', 'spicy', 'aquatic', 'woody']),
                'harga' => $harga,
                'ukuran' => $faker->randomElement(['30 ml', '5 ml']),
                'poster' => $faker->url(),
                'created_at' => now(),
                'updated_at' => now()
                
            ]);
        }
    }
}