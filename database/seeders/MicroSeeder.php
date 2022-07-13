<?php

namespace Database\Seeders;

use App\Models\Micro;
use Illuminate\Database\Seeder;

class MicroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //hay 10 lineas y como son ida y vuelta serian 20 micros para 20 micreros
       $micro = new Micro() ;
        $micro->placa='5503ABC';
        $micro->modelo='Volsvagen 2006';
        $micro->cant_asiento='20';
        $micro->num_interno='3485';
        $micro->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=1; 
        $micro->id_user=3;
        $micro->save(); 
    }
}
