<?php

namespace Database\Seeders;
use App\Models\Datos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use\Illuminate\Support\Facades\File;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Datos::create([
            'codigo' => 'DXMCO',
            'descripcion' => 'Descripción del producto',
            'cantidad' => '5',
            'precio' => '9.99',
        ]);
    }
}
