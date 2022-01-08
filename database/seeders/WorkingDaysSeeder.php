<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingDaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('working_days')->insert([
            [
                'user_id'=>1,
                'date'=>'2022-01-03',
                'hours'=>5
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-04',
                'hours'=>8
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-05',
                'hours'=>8
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-06',
                'hours'=>8
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-07',
                'hours'=>8
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-08',
                'hours'=>8
            ],

            [
                'user_id'=>2,
                'date'=>'2022-01-03',
                'hours'=>12
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-04',
                'hours'=>8
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-05',
                'hours'=>8
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-06',
                'hours'=>8
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-07',
                'hours'=>8
            ],
            [
                'user_id'=>1,
                'date'=>'2022-01-08',
                'hours'=>12
            ],
        ]);
    }
}
