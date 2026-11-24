<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hall_seed = [
            ['id'=>'1','lecture_hall_name'=>'BK1', 'lecture_hall_place' =>'BLOK KULIAH'],
            ['id'=>'2','lecture_hall_name'=>'BK2', 'lecture_hall_place' =>'BLOK KULIAH'],
            ['id'=>'3','lecture_hall_name'=>'MAKMAL KOMPUTER 1', 'lecture_hall_place' =>'FSKM'],
            ['id'=>'4','lecture_hall_name'=>'DEWAN SEMINAR 1', 'lecture_hall_place' =>'BLOK KULIAH'],
            ['id'=>'5','lecture_hall_name'=>'BILIK TUTORIAL 1', 'lecture_hall_place' =>'BLOK KULIAH'],
        ];

        foreach ($hall_seed as $hall_seed)
        {
            Hall::firstOrCreate($hall_seed);
        }      
    }
}
