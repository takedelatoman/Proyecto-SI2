<?php

namespace Database\Seeders;

use App\Models\PuntoRuta;
use Illuminate\Database\Seeder;

class PuntoRutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $punto = new PuntoRuta();
        $punto->latitud  = 351353.55;
        $punto->altitud  = 351353.55;
        $punto->id_linea = 1;
        $punto->save();    
        /*  AQUI SE PONE EL ID DE LA LINE AR EL IDDD_ NO  RO */        
    }
}
