<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
            [
                'category' => 'Adventure', 
                'remarks' => 'A'
            ],
            [
                'category' => 'Business',
                'remarks' => 'B'
            ],
            [
                'category' => 'Comedy',
                'remarks' => 'C'
            ],
            [
                'category' => 'Drama',
                'remarks' => 'D'
            ],
            [
                'category' => 'Horror',
                'remarks' => 'H'
            ],
            [
                'category' => 'Politics',
                'remarks' => 'P'
            ],
            [
                'category' => 'Religion',
                'remarks' => 'R'
            ],
            [
                'category' => 'Romance',
                'remarks' => 'Rom'
            ]
        ]);
    }
}
