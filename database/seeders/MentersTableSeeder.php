<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB as AttributesDB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('menters')->insert([
                'name' => $faker->name,
                'tel' => $faker->phoneNumber,
                'teaching_languages' => $faker->randomElement(['Japanese', 'English', 'Chinese', 'Spanish']),
                'experience_years' => $faker->numberBetween(1, 20),
                'introduction' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
