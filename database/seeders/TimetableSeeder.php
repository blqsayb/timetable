<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Timetable;

class TimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timetable_seed = [
            ['user_id'=>null, 
            'subject_id' =>'1',
            'day_id'=>'1',
            'hall_id'=>'1',
            'group_id'=>'1',
            'time_from'=>'8.00',
            'time_to'=>'10.00',
            ],

            ['user_id'=>null, 
            'subject_id' =>'2',
            'day_id'=>'2',
            'hall_id'=>'2',
            'group_id'=>'2',
            'time_from'=>'10.00',
            'time_to'=>'12.00',
            ],

            ['user_id'=>null, 
            'subject_id' =>'3',
            'day_id'=>'3',
            'hall_id'=>'3',
            'group_id'=>'3',
            'time_from'=>'12.00',
            'time_to'=>'14.00',
            ],

            ['user_id'=>null, 
            'subject_id' =>'4',
            'day_id'=>'4',
            'hall_id'=>'4',
            'group_id'=>'4',
            'time_from'=>'14.00',
            'time_to'=>'16.00',
            ],

            ['user_id'=>null, 
            'subject_id' =>'5',
            'day_id'=>'5',
            'hall_id'=>'5',
            'group_id'=>'5',
            'time_from'=>'16.00',
            'time_to'=>'18.00',
            ],
        ];

        foreach ($timetable_seed as $timetable_seed)
        {
            Timetable::firstOrCreate($timetable_seed);
        }      
    }
}
