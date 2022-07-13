<?php

namespace Database\Seeders;

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
        
    }
}
