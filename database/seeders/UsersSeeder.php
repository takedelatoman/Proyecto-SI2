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
        $user->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $user->password=bcrypt('1234');
        $user->ci=3287909;
        $user->fecha_nac='2020-02-22';
        $user->cod_admin=1;
        $user->cod_chofer=0;
        $user->save();

        $user=new User() ;
        $user->name='Chofer';
        $user->email='Chofer@gmail.com';
        $user->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $user->password=('1234');
        $user->ci=8948057;
        $user->fecha_nac='1999-03-20';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();

        $user=new User() ;
        $user->name='Takeshi Kanashiro';
        $user->email='take@gmail.com';
        $user->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $user->password=('1234');
        $user->ci=8948057;
        $user->fecha_nac='1991-01-17';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();

        $user=new User() ;
        $user->name='Oscar Duran';
        $user->email='oscar@gmail.com';
        $user->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $user->password=('1234'); 
        $user->ci=823723;
        $user->fecha_nac='1979-07-28';
        $user->cod_admin=0;
        $user->cod_chofer=1;
        $user->save();

        //1 2 5 8 9 10 11 16 17 18 TOTAL DE LINEAS

        $linea=new Linea() ;
        $linea->numero='1';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='1';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();
        
        $linea=new Linea() ;
        $linea->numero='2';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='2';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='5';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='5';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='8';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='8';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='9';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='9';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='10';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='10';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='11';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='11';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='16';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='16';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='17';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='17';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='18';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='18';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

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
