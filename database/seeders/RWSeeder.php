<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rw = [
            "no_rw" => 13,
            'created_at' => new \DateTime,
            'updated_at' => null,
        ];

        DB::table('rw')->insert($rw);
    }
}
