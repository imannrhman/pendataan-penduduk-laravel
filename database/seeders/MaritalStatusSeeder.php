<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maritalStatus = [
            [
                'status' => 'Menikah',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'status' => 'Belum',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];
        DB::table('marital_statuses')->insert($maritalStatus);
    }
}
