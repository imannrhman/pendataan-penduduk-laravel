<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $familyStatuses = [
            [
                'name' => 'KEPALA KELUARGA',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'SUAMI',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'ISTRI',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'ANAK',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'MENANTU',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'CUCU',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'ORANG TUA',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'MERTUA',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'FAMILI LAIN',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'PEMBANTU',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];
        DB::table('family_statuses')->insert($familyStatuses);
    }
}
