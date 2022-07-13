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
        $linea->foto='https://hemeroteca.correodelsur.com/2013/11/27/ca_3_1_quique.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 1';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://hemeroteca.correodelsur.com/2013/11/27/ca_3_1_quique.jpg';
        $linea->save();
        
        $linea=new Linea() ;
        $linea->numero='Linea 2';
        $linea->direccion='Linea Ida';
        $linea->foto='https://correodelsur.com/img/contents/images_840/2021/01/30/48d12101-7e5b-4439-be82-d7044d21a4ce.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 2';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://correodelsur.com/img/contents/images_840/2021/01/30/48d12101-7e5b-4439-be82-d7044d21a4ce.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 5';
        $linea->direccion='Linea Ida';
        $linea->foto='http://www.talcamicros.cl/wp-content/uploads/2019/12/Linea_5_Microbuses_Abate_Molina-300x164.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 5';
        $linea->direccion='Linea Vuelta';
        $linea->foto='http://www.talcamicros.cl/wp-content/uploads/2019/12/Linea_5_Microbuses_Abate_Molina-300x164.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 8';
        $linea->direccion='Linea Ida';
        $linea->foto='https://www.atb.com.bo/fotos/1023853864.JPG';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 8';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://www.atb.com.bo/fotos/1023853864.JPG';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 9';
        $linea->direccion='Linea Ida';
        $linea->foto='https://1.bp.blogspot.com/-PJDglPuO684/XpXgXUFV1MI/AAAAAAAANM8/x57Vlu0eKigsMwzlx_2FzHkX03LCn3B_QCLcBGAsYHQ/s1600/bienal%2B%25281%2529.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 9';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://1.bp.blogspot.com/-PJDglPuO684/XpXgXUFV1MI/AAAAAAAANM8/x57Vlu0eKigsMwzlx_2FzHkX03LCn3B_QCLcBGAsYHQ/s1600/bienal%2B%25281%2529.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 10';
        $linea->direccion='Linea Ida';
        $linea->foto='http://cd1.eju.tv/wp-content/uploads/2018/02/5a89a36519509.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 10';
        $linea->direccion='Linea Vuelta';
        $linea->foto='http://cd1.eju.tv/wp-content/uploads/2018/02/5a89a36519509.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 11';
        $linea->direccion='Linea Ida';
        $linea->foto='https://eju.tv/wp-content/uploads/2020/07/img_5f10e9a46c1cf.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 11';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://eju.tv/wp-content/uploads/2020/07/img_5f10e9a46c1cf.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 16';
        $linea->direccion='Linea Ida';
        $linea->foto='https://lapublica.org.bo/images/nota_transporte_scz_3.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 16';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://lapublica.org.bo/images/nota_transporte_scz_3.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 17';
        $linea->direccion='Linea Ida';
        $linea->foto='https://eldia.com.bo/images/Noticias/18-8-15/paraGIS.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 17';
        $linea->direccion='Linea Vuelta';
        $linea->foto='https://eldia.com.bo/images/Noticias/18-8-15/paraGIS.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 18';
        $linea->direccion='Linea Ida';
        $linea->foto='http://3.bp.blogspot.com/-jY-m80Pj88E/VMUx7qoGL4I/AAAAAAABy0k/ESVeHjxhvSQ/s1600/Allison%2Brenueva%2Bel%2Btransporte%2Bcon%2Blos%2B%E2%80%98Chuturub%C3%AD%E2%80%992.jpg';
        $linea->save();

        $linea=new Linea() ;
        $linea->numero='Linea 18';
        $linea->direccion='Linea Vuelta';
        $linea->foto='http://3.bp.blogspot.com/-jY-m80Pj88E/VMUx7qoGL4I/AAAAAAABy0k/ESVeHjxhvSQ/s1600/Allison%2Brenueva%2Bel%2Btransporte%2Bcon%2Blos%2B%E2%80%98Chuturub%C3%AD%E2%80%992.jpg';
        $linea->save();
         }
}

