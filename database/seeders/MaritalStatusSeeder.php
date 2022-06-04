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
                'status' => 'BELUM KAWIN',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'status' => 'KAWIN TERCATAT',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'status' => 'CERAI HIDUP',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'status' => 'CERAI MATI',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];
        DB::table('marital_statuses')->insert($maritalStatus);
    }
}
