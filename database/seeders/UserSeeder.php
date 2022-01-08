<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'x',
                'surname'=>'y',
                'payment'=>70000
            ],
            [
                'name'=>'z',
                'surname'=>'y',
                'payment'=>90000
            ],
            [
                'name'=>'f',
                'surname'=>'h',
                'payment'=>80000
            ],
        ]);
    }
}
