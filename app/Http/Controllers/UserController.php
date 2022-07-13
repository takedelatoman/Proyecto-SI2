<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            
        ]);

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->ci = $request->ci;
        $usuario->fecha_nac = $request->fecha_nac;
        $usuario->cod_chofer = $request->cod_chofer;
        $usuario->cod_admin = $request->cod_admin;
        $usuario->password = bcrypt(($request->password));
        $usuario->save();
       

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));   
    }

    public function update(Request $request, $id)
    {
       

        $usuario = User::find($id);
    
        if($usuario->name <> $request->name){
            $usuario->name = $request->name;
        }
        if($request->password <> ''){
            $usuario->password = bcrypt(($request->password));
        }
        $usuario->ci = $request->ci;
        $usuario->fecha_nac = $request->fecha_nac;
        $usuario->cod_chofer = $request->cod_chofer;
        $usuario->cod_admin = $request->cod_admin;
        $usuario->save();
        
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('users');
    }
    //
}
