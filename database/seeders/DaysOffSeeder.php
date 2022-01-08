<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaysOffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days_off')->insert([
            [
                'date'=>'2022-01-01',
            ],
            [
                'date'=>'2022-01-02',
            ],
            [
                'date'=>'2022-01-03',
            ],
            [
                'date'=>'2022-03-14',
            ],
            [
                'date'=>'2022-03-22',
            ],
            [
                'date'=>'2022-04-18',
            ],
        ]);
    }
}
