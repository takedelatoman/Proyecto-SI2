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
       //Linea 1 IDA
       $micro = new Micro() ;
        $micro->placa='5503ABC';
        $micro->modelo='Volsvagen 2006';
        $micro->cant_asiento='20';
        $micro->num_interno='3485';
        $micro->foto='https://hemeroteca.correodelsur.com/2013/11/27/ca_3_1_quique.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=1; 
        $micro->id_user=2;
        $micro->save();
        //Linea 1 VUELTA
        $micro = new Micro() ;
        $micro->placa='5503ABC';
        $micro->modelo='Volsvagen 2006';
        $micro->cant_asiento='20';
        $micro->num_interno='3485';
        $micro->foto='https://hemeroteca.correodelsur.com/2013/11/27/ca_3_1_quique.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=2; 
        $micro->id_user=2;
        $micro->save();
        //Linea 2 IDA
        $micro = new Micro() ;
        $micro->placa='4014ANC';
        $micro->modelo='2015';
        $micro->cant_asiento='20';
        $micro->num_interno='6598';
        $micro->foto='https://correodelsur.com/img/contents/images_840/2021/01/30/48d12101-7e5b-4439-be82-d7044d21a4ce.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=3; 
        $micro->id_user=3;
        $micro->save(); 
        //Linea 2 VUELTA
        $micro = new Micro() ;
        $micro->placa='4014ANC';
        $micro->modelo='2015';
        $micro->cant_asiento='20';
        $micro->num_interno='6598';
        $micro->foto='https://correodelsur.com/img/contents/images_840/2021/01/30/48d12101-7e5b-4439-be82-d7044d21a4ce.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=4; 
        $micro->id_user=3;
        $micro->save(); 
        //Linea 5 IDA
        $micro = new Micro() ;
        $micro->placa='7783ABC';
        $micro->modelo='1999';
        $micro->cant_asiento='20';
        $micro->num_interno='7321';
        $micro->foto='http://www.talcamicros.cl/wp-content/uploads/2019/12/Linea_5_Microbuses_Abate_Molina-300x164.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=5; 
        $micro->id_user=4;
        $micro->save();
        //Linea 5 VUELTA
        $micro = new Micro() ;
        $micro->placa='7783ABC';
        $micro->modelo='1999';
        $micro->cant_asiento='20';
        $micro->num_interno='7321';
        $micro->foto='http://www.talcamicros.cl/wp-content/uploads/2019/12/Linea_5_Microbuses_Abate_Molina-300x164.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=6; 
        $micro->id_user=4;
        $micro->save();  
        //Linea 8 IDA
        $micro = new Micro() ;
        $micro->placa='6551ALO';
        $micro->modelo='1995';
        $micro->cant_asiento='20';
        $micro->num_interno='2468';
        $micro->foto='https://www.atb.com.bo/fotos/1023853864.JPG';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=7; 
        $micro->id_user=5;
        $micro->save(); 
        //Linea 8 VUELTA
        $micro = new Micro() ;
        $micro->placa='6551ALO';
        $micro->modelo='1995';
        $micro->cant_asiento='20';
        $micro->num_interno='2468';
        $micro->foto='https://www.atb.com.bo/fotos/1023853864.JPG';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=8; 
        $micro->id_user=5;
        $micro->save(); 
        //Linea 9 IDA
        $micro = new Micro() ;
        $micro->placa='9687LOL';
        $micro->modelo='2007';
        $micro->cant_asiento='20';
        $micro->num_interno='8764';
        $micro->foto='https://1.bp.blogspot.com/-PJDglPuO684/XpXgXUFV1MI/AAAAAAAANM8/x57Vlu0eKigsMwzlx_2FzHkX03LCn3B_QCLcBGAsYHQ/s1600/bienal%2B%25281%2529.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=9; 
        $micro->id_user=6;
        $micro->save();
        //Linea 9 VUELTA
        $micro = new Micro() ;
        $micro->placa='9687LOL';
        $micro->modelo='2007';
        $micro->cant_asiento='20';
        $micro->num_interno='8764';
        $micro->foto='https://1.bp.blogspot.com/-PJDglPuO684/XpXgXUFV1MI/AAAAAAAANM8/x57Vlu0eKigsMwzlx_2FzHkX03LCn3B_QCLcBGAsYHQ/s1600/bienal%2B%25281%2529.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=10; 
        $micro->id_user=6;
        $micro->save();
        //Linea 10 IDA
        $micro = new Micro() ;
        $micro->placa='4298KOK';
        $micro->modelo='2001';
        $micro->cant_asiento='20';
        $micro->num_interno='3344';
        $micro->foto='http://cd1.eju.tv/wp-content/uploads/2018/02/5a89a36519509.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=11; 
        $micro->id_user=7;
        $micro->save(); 
        //Linea 10 VUELTA
        $micro = new Micro() ;
        $micro->placa='4298KOK';
        $micro->modelo='2001';
        $micro->cant_asiento='20';
        $micro->num_interno='3344';
        $micro->foto='http://cd1.eju.tv/wp-content/uploads/2018/02/5a89a36519509.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=12; 
        $micro->id_user=7;
        $micro->save(); 
        //Linea 11 IDA
        $micro = new Micro() ;
        $micro->placa='7798KIE';
        $micro->modelo='2009';
        $micro->cant_asiento='20';
        $micro->num_interno='7898';
        $micro->foto='https://eju.tv/wp-content/uploads/2020/07/img_5f10e9a46c1cf.jpg';
        $micro->fecha_asignacion='2022-01-03';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=13; 
        $micro->id_user=8;
        $micro->save(); 
        //Linea 11 VUELTA
        $micro = new Micro() ;
        $micro->placa='7798KIE';
        $micro->modelo='2009';
        $micro->cant_asiento='20';
        $micro->num_interno='7889';
        $micro->foto='https://eju.tv/wp-content/uploads/2020/07/img_5f10e9a46c1cf.jpg';
        $micro->fecha_asignacion='2022-01-03';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=14; 
        $micro->id_user=8;
        $micro->save();
        //Linea 16 IDA
        $micro = new Micro() ;
        $micro->placa='6687LIT';
        $micro->modelo='2010';
        $micro->cant_asiento='20';
        $micro->num_interno='1177';
        $micro->foto='https://lapublica.org.bo/images/nota_transporte_scz_3.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=15; 
        $micro->id_user=9;
        $micro->save(); 
        //Linea 16 VUELTA
        $micro = new Micro() ;
        $micro->placa='6687LIT';
        $micro->modelo='2010';
        $micro->cant_asiento='20';
        $micro->num_interno='1177';
        $micro->foto='https://lapublica.org.bo/images/nota_transporte_scz_3.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=16; 
        $micro->id_user=9;
        $micro->save(); 
        //Linea 17 IDA
        $micro = new Micro() ;
        $micro->placa='6455LOP';
        $micro->modelo='2011';
        $micro->cant_asiento='20';
        $micro->num_interno='7642';
        $micro->foto='https://eldia.com.bo/images/Noticias/18-8-15/paraGIS.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=17; 
        $micro->id_user=10;
        $micro->save(); 
        //Linea 17 VUELTA
        $micro = new Micro() ;
        $micro->placa='6455LOP';
        $micro->modelo='2011';
        $micro->cant_asiento='20';
        $micro->num_interno='7642';
        $micro->foto='https://eldia.com.bo/images/Noticias/18-8-15/paraGIS.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=18; 
        $micro->id_user=10;
        $micro->save(); 
        //Linea 18 IDA
        $micro = new Micro() ;
        $micro->placa='7733RIC';
        $micro->modelo='1999 ';
        $micro->cant_asiento='20';
        $micro->num_interno='1189';
        $micro->foto='http://3.bp.blogspot.com/-jY-m80Pj88E/VMUx7qoGL4I/AAAAAAABy0k/ESVeHjxhvSQ/s1600/Allison%2Brenueva%2Bel%2Btransporte%2Bcon%2Blos%2B%E2%80%98Chuturub%C3%AD%E2%80%992.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=19; 
        $micro->id_user=11;
        $micro->save(); 
        //Linea 18 VUELTA
        $micro = new Micro() ;
        $micro->placa='7733RIC';
        $micro->modelo='1999';
        $micro->cant_asiento='20';
        $micro->num_interno='1189';
        $micro->foto='http://3.bp.blogspot.com/-jY-m80Pj88E/VMUx7qoGL4I/AAAAAAABy0k/ESVeHjxhvSQ/s1600/Allison%2Brenueva%2Bel%2Btransporte%2Bcon%2Blos%2B%E2%80%98Chuturub%C3%AD%E2%80%992.jpg';
        $micro->fecha_asignacion='2022-01-01';
        $micro->fecha_baja='2022-03-01';
        $micro->disponible=1;
        $micro->id_linea=20; 
        $micro->id_user=11;
        $micro->save(); 
        //-------------------------------------LINEAS NO DISPONIBLES--------------------------
        /*
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
        */
    }
}
