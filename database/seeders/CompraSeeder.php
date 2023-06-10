<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("compras")->insert([
            'producto'=>'Libros Varios',
            'peso'=>'30',
            'precio'=>'2548',
            'direccion'=>'Av. Brasil 874',
            'nro_seguimiento'=>'bfr2454asdasd',
            'user_id'=>1
        ]);
    }
}
