<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $group_seed = [
            ['id'=>'1','name'=>'CS251A', 'part' =>'1'],
            ['id'=>'2','name'=>'CS251B', 'part' =>'1'],
            ['id'=>'3','name'=>'CS251A', 'part' =>'2'],
            ['id'=>'4','name'=>'CS251B', 'part' =>'2'],
            ['id'=>'5','name'=>'CS251A', 'part' =>'3'],
        ];

        foreach ($group_seed as $group_seed)
        {
            Group::firstOrCreate($group_seed);
        }      
    }
}
