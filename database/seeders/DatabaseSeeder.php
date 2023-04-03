<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('lokalen')->insert([
                'name'          => '319',
                'floor'         => '3',
                'capacity'      => 28,
                'has_screen'    => 1
        ]);

        DB::table('courses')->insert(
        [
            [
                'name' => 'WEB',
                'description' => 'Alles op het gebied van web',
                'docent' => 'Fedde van Gils'
            ],
            [
                'name' => 'NATIVE',
                'description' => 'Alles op het gebied van native',
                'docent' => 'Wicher Hulzebosch'
            ],
            [
                'name' => 'ALGO',
                'description' => 'Leren denken als een programmeur',
                'docent' => 'Wicher Hulzebosch'
            ],
        ]
        );




    }
}
