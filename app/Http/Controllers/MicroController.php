<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use App\Models\Micro;
use App\Models\User;
use Illuminate\Http\Request;

class MicroController extends Controller
{
    public function index()
    {
        $micros = Micro::all();
        $lineas = Linea::all();
        $users  = User::all();

        return view('micros.index', compact('micros','lineas','users'));
    }

    public function create()
    {
        $lineas = Linea::all();
        $users  = User::all();
        return view('micros.create',compact('users','lineas'));
    }

    public function store(Request $request)
    {
        $micro = new Micro();
        $micro->placa            = $request->placa;
        $micro->modelo           = $request->modelo;
        $micro->cant_asiento     = $request->cant_asiento;
        $micro->num_interno      = $request->num_interno;
        $micro->fecha_asignacion = $request->fecha_asignacion;
        $micro->fecha_baja       = $request->fecha_baja;
        $micro->disponible       = $request->disponible;
        $micro->id_linea         = $request->id_linea;
        $micro->id_user          = $request->id_user;
        $micro->foto             = $request->foto;
        $micro->save();

        return redirect()->route('micros.index');
    }

    public function edit($id)
    {
        $micro = Micro::find($id);
        $linea = Linea::where('id', $micro->id_linea)->first();
        $user = User::where('id', $micro->id_user)->first();
        return view('micros.edit', compact('micro','user','linea'));   
    }

    public function update(Request $request, $id)
    {

        $micro = Micro::find($id);
        $micro->placa            = $request->placa;
        $micro->modelo           = $request->modelo;
        $micro->cant_asiento     = $request->cant_asiento;
        $micro->num_interno      = $request->num_interno;
        $micro->fecha_asignacion = $request->fecha_asignacion;
        $micro->fecha_baja       = $request->fecha_baja;
        $micro->disponible       = $request->disponible;
        $micro->id_linea         = $request->id_linea;
        $micro->id_user          = $request->id_user;
        $micro->foto             = $request->foto;
        $micro->save();
        
        return redirect()->route('micros.index');
    }

    public function destroy($id)
    {
        Micro::destroy($id);
        return redirect()->back();
    }
}
