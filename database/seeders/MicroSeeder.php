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
       //LINEAS DISPONIBLES
       $micro = new Micro() ;
        $micro->placa='5503ABC';
        $micro->modelo='Volsvagen 2006';
        $micro->cant_asiento='20';
        $micro->num_interno='3485';
        $micro->foto='https://qph.fs.quoracdn.net/main-thumb-236773730-200-iypcqnsrwocpbfnjjhpwctbxlxaifhrf.jpeg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=15; 
        $micro->id_user=2;
        $micro->save(); 

        $micro = new Micro() ;
        $micro->placa='4014ANC';
        $micro->modelo='2015';
        $micro->cant_asiento='20';
        $micro->num_interno='6598';
        $micro->foto='https://www.superprof.co/imagenes/anuncios/profesor-home-clases-frances-portugues-para-todas-las-personas-mexicanas-deseen-aprender-esos-bonitos-prodigiosos-idiomas.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=16; 
        $micro->id_user=3;
        $micro->save(); 

        $micro = new Micro() ;
        $micro->placa='7783ABC';
        $micro->modelo='1999';
        $micro->cant_asiento='20';
        $micro->num_interno='3485';
        $micro->foto='https://www.somosiberoamerica.org/wp-content/uploads/2019/12/4039ba77f1b97fddf467329e81c2058c-225x225.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=17; 
        $micro->id_user=4;
        $micro->save(); 
        //-------------------------------------LINEAS NO DISPONIBLES--------------------------
        $micro = new Micro() ;
        $micro->placa='6551ALO';
        $micro->modelo='1995';
        $micro->cant_asiento='20';
        $micro->num_interno='3485';
        $micro->foto='https://mxcity.mx/wp-content/uploads/2017/04/belleza3.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=0;
        $micro->id_linea=1; 
        $micro->id_user=2;
        $micro->save(); 

        $micro = new Micro() ;
        $micro->placa='9687LOL';
        $micro->modelo='2007';
        $micro->cant_asiento='20';
        $micro->num_interno='3485';
        $micro->foto='https://brigadaaltavoz.com/wp-content/uploads/2019/10/71282714_2919252824769951_7677046474420518912_n-1.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=0;
        $micro->id_linea=2; 
        $micro->id_user=2;
        $micro->save(); 

        $micro = new Micro() ;
        $micro->placa='4298KOK';
        $micro->modelo='2001 ';
        $micro->cant_asiento='20';
        $micro->num_interno='3485';
        $micro->foto='https://www.superprof.mx/imagenes/anuncios/clases-particular-aprende-lenguaje-senas-mexicanas-lsm-mas-anos-experiencia.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=0;
        $micro->id_linea=3; 
        $micro->id_user=4;
        $micro->save(); 
    }
}
