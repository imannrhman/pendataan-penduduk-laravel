<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = [
            [
                'name' => 'Tidak Sekolah',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'SD',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'SMP',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'SMA/SMK Sederejat',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Sarjana',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Magister',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Doctor',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ]
        ];
        DB::table('education')->insert($education);
    }
}
