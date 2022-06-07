<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions = [
            [
                'name' => 'ISLAM',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'PROTESTAN',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'KATOLIK',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'HINDU',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'BUDDHA',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'KONGUCHU',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ]
        ];
        DB::table('religions')->insert($religions);
    }
}
