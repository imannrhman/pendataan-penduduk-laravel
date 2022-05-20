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
                'name' => 'Islam',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Kristen',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Budha',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Hindu',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Kongucu',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ]
        ];
        DB::table('religions')->insert($religions);
    }
}
