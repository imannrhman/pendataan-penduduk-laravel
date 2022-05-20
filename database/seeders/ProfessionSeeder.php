<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professions = [
            [
                'name' => 'Karyawan Swasta',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Buruh',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Pelajar',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];
        DB::table('professions')->insert($professions);
    }
}
