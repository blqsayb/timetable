<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject_seed = [
            ['id'=>'1','subject_code'=>'CSC123', 'subject_name' =>'mathematic', 'lecturer_name'=>'Sir Albin'],
            ['id'=>'2','subject_code'=>'CSC456', 'subject_name' =>'IOT', 'lecturer_name'=>'Sir Anwar'],
            ['id'=>'3','subject_code'=>'CSC789', 'subject_name' =>'security', 'lecturer_name'=>'Dr Aimuni'],
            ['id'=>'4','subject_code'=>'CSC424', 'subject_name' =>'back-end', 'lecturer_name'=>'Sir Asrol'],
            ['id'=>'5','subject_code'=>'CSC777', 'subject_name' =>'discrete', 'lecturer_name'=>'Dr Najwa'],
        ];

        foreach ($subject_seed as $subject_seed)
        {
            Subject::firstOrCreate($subject_seed);
        }      
    }
}
