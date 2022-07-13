<?php

namespace Database\Seeders;

use App\Models\Linea;
use Illuminate\Database\Seeder;

class LineaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  //PRIMERO ES USUARIO y LINEA y CON ESO SE PUEDE HACER MICRO
    { ////peroooooooooooo falta micro osea los seeder para los micros

        $linea=new Linea() ;
        $linea->numero='Linea 1';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 1';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();
        
        $linea=new Linea() ;
        $linea->numero='Linea 2';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 2';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 5';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 5';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 8';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 8';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 9';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 9';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 10';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 10';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 11';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 11';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 16';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 16';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 17';
        $linea->direccion='Linea Ida';
        $linea->foto='https://eldia.com.bo/noticia.php?id=257679&id_cat=1.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 17';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://eldia.com.bo/noticia.php?id=257679&id_cat=1.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 18';
        $linea->direccion='Linea Ida';
        $linea->foto='https://actualidad.tuamc.tv/wp-content/uploads/2022/02/elon-musk.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 18';
        $linea->direccion='Linea Vuelta';
        $linea->foto='http://3.bp.blogspot.com/-jY-m80Pj88E/VMUx7qoGL4I/AAAAAAABy0k/ESVeHjxhvSQ/s1600/Allison%2Brenueva%2Bel%2Btransporte%2Bcon%2Blos%2B%E2%80%98Chuturub%C3%AD%E2%80%992.jpg';
        $linea->save();
         }
}
