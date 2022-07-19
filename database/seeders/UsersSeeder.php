<?php

namespace Database\Seeders;

use App\Models\Linea;
use App\Models\Micro;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User() ;
        $user->name='admin';
        $user->email='admin@gmail.com';
        $user->foto='https://www.superprof.co/imagenes/anuncios/profesor-home-clases-frances-portugues-para-todas-las-personas-mexicanas-deseen-aprender-esos-bonitos-prodigiosos-idiomas.jpg';
        $user->password=bcrypt('1234');
        $user->ci=3287909;
        $user->fecha_nac='2020-02-22';
        $user->cod_admin=1;
        $user->cod_chofer=0;
        $user->save();

        //Choferes
        //Chofer Linea 1
        $user=new User() ;
        $user->name='Miguel Arequipa Smith';
        $user->email='miguel@gmail.com';
        $user->foto='https://brigadaaltavoz.com/wp-content/uploads/2019/10/71282714_2919252824769951_7677046474420518912_n-1.jpg';
        $user->password=('1234');
        $user->ci=8948057;
        $user->fecha_nac='1999-03-20';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //Chofer Linea 2
        $user=new User() ;
        $user->name='Takeshi Kanashiro';
        $user->email='take@gmail.com';
        $user->foto='https://www.supeimage.pngrprof.co/imagenes/anuncios/profesor-home-clases-frances-portugues-para-todas-las-personas-mexicanas-deseen-aprender-esos-bonitos-prodigiosos-idiomas.jpg';
        $user->password=('1234');
        $user->ci=11524688;
        $user->fecha_nac='1991-01-17';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //Chofer Linea 5
        $user=new User() ;
        $user->name='Oscar Duran';
        $user->email='oscar@gmail.com';
        $user->foto='https://www.somosiberoamerica.org/wp-content/uploads/2019/12/4039ba77f1b97fddf467329e81c2058c-225x225.jpg';
        $user->password=('1234'); 
        $user->ci=823723;
        $user->fecha_nac='1979-07-28';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //Chofer Linea 8 NUEVO
        $user=new User() ;
        $user->name='Josefa Daniela Mendoza ';
        $user->email='dani@gmail.com';
        $user->foto='https://lapatria.bo/wp-content/uploads/2020/11/puyma-katari-1-scaled.jpg';
        $user->password=('1234'); 
        $user->ci=67895544;
        $user->fecha_nac='1979-07-28';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //Chofer Linea 9
        $user=new User() ;
        $user->name='Richard Stifler Dent';
        $user->email='richi@gmail.com';
        $user->foto='https://diarionuevosur.com/wp-content/uploads/2020/05/chofer.jpg';
        $user->password=('1234'); 
        $user->ci=77334486;
        $user->fecha_nac='1979-07-28';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //Chofer Linea 10
        $user=new User() ;
        $user->name='Manuel Lopez Videla';
        $user->email='manuel@gmail.com';
        $user->foto='https://ichef.bbci.co.uk/news/640/amz/worldservice/live/assets/images/2010/03/02/100302230013_sp_bolivia_choferes_lider_2.jpg';
        $user->password=('1234'); 
        $user->ci=67845288;
        $user->fecha_nac='1979-07-28';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //Chofer Linea 11
        $user=new User() ;
        $user->name='Renato Arteaga';
        $user->email='renato@gmail.com';
        $user->foto='https://anteriorportal.erbol.com.bo/sites/default/files/img_noticias/20-jun-deco-6.jpg';
        $user->password=('1234'); 
        $user->ci=68978577;
        $user->fecha_nac='1979-07-28';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //Chofer Linea 16
        $user=new User() ;
        $user->name='Juan Manuel Mercado';
        $user->email='juan@gmail.com';
        $user->foto='https://www.ccb.com.bo/images/IMG-20220525124156.jpg';
        $user->password=('1234'); 
        $user->ci=64551133;
        $user->fecha_nac='1979-07-28';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //Chofer Linea 17
        $user=new User() ;
        $user->name='Ricardo Benavidez';
        $user->email='ricardo@gmail.com';
        $user->foto='https://www.somosiberoamerica.org/wp-content/uploads/2019/12/4039ba77f1b97fddf467329e81c2058c-225x225.jpg';
        $user->password=('1234'); 
        $user->ci=77663259;
        $user->fecha_nac='1979-07-28';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //Chofer Linea 18
        $user=new User() ;
        $user->name='Andres Andronico Eguez';
        $user->email='andres@gmail.com';
        $user->foto='https://anteriorportal.erbol.com.bo/sites/default/files/img_noticias/chofe_chicoteado.jpg';
        $user->password=('1234'); 
        $user->ci=78645235;
        $user->fecha_nac='1979-07-28';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();
        //1 2 5 8 9 10 11 16 17 18 TOTAL DE LINEAS


      //------------------------------------------------------------------------------------------
      
        /* $micro=new Micro() ;
        $micro->placa='5503ABC';
        $micro->modelo='2006';
        $micro->cant_asiento='20';
        $micro->num_interno='Linea 18 Vuelta';
        $micro->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $micro->fecha_asignacion='Linea 18 Vuelta';
        $micro->fecha_baja='descripcion';
        $micro->disponible='Linea 18 Vuelta';
        $micro->direccion='descripcion';
        $micro->id_linea='Linea 18 Vuelta';
        $micro->id_user='descripcion';
        $micro->save(); */

        

    }
}
