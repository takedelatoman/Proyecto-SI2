<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use Illuminate\Http\Request;

class LineaController extends Controller
{
    public function index()
    {
        $lineas = Linea::all();
        return view('lineas.index', compact('lineas'));
    }

    public function create()
    {
        return view('lineas.create');
    }

    public function store(Request $request)
    {
        $linea = new Linea();
        $linea->numero    = $request->numero;
        $linea->direccion = $request->direccion;
        $linea->foto      = $request->foto;
        $linea->save();

        return redirect()->route('lineas.index');
    }

    public function edit($id)
    {
        $linea = Linea::find($id);
        return view('lineas.edit', compact('linea'));   
    }

    public function update(Request $request, $id)
    {

        $linea = Linea::find($id);
        $linea->numero    = $request->numero;
        $linea->direccion = $request->direccion;
        $linea->foto      = $request->foto;
        $linea->save();
        
        return redirect()->route('lineas.index');
    }

    public function destroy($id)
    {
        Linea::destroy($id);
        return redirect()->back();
    }

}
