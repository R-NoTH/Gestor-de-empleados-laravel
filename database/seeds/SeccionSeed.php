<?php

use App\Seccion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeccionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seccions')->insert([
            'name' => 'T-shirt',
                   
        ]);
        DB::table('seccions')->insert([
            'name' => 'Corte',
                   
        ]); 
        DB::table('seccions')->insert([
            'name' => 'Camisa',
                   
        ]);
        DB::table('seccions')->insert([
            'name' => 'Pantalon',
                   
        ]);
        DB::table('seccions')->insert([
            'name' => 'Empaque',
                   
        ]);
        DB::table('seccions')->insert([
            'name' => 'Gorras',
                   
        ]);
        DB::table('seccions')->insert([
            'name' => 'Modulo-1',
                   
        ]);
        DB::table('seccions')->insert([
            'name' => 'Almacen',
                   
        ]);
        DB::table('seccions')->insert([
            'name' => 'Mantenimiento',
                   
        ]);
        DB::table('seccions')->insert([
            'name' => 'Administrativa',
                   
        ]);
    }
}
