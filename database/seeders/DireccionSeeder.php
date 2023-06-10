<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("direccions")->insert([
            'provincia'=>'Lima',
            'departamento'=>'Lima',
            'distrito'=>'Breña',
            'direccion'=>'Av. Brasil 874',
            'user_id'=>1
        ]);
    }
}
