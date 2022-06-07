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
                'name' => 'TIDAK/BELUM SEKOLAH',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'BELUM TAMAT SD/SEDERAJAT',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'TAMAT/SD SEDERAJAT',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'SLTP/SEDERAJAT',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'SLTA/SEDERAJAT',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'DIPLOMA I/II',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'AKADEMI/DIPLOMA III/S. MUDA',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'DIPLOMA IV/STRATA I',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'STRATA II',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'STRATA III',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ]
        ];
        DB::table('education')->insert($education);
    }
}
