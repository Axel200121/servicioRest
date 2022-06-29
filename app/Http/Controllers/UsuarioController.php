<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
 

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = Usuario::all();
        return $usuarios;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //? creamos una instacia del modelo de usuarios
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->nickname = $request->nickname;
        $usuario->password = $request->password;

        $usuario->save();

    }

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function update(Request $request)
    {
        $usuario = Usuario::findOrFail($request->id);
        $usuario->nombre = $request->nombre;
        $usuario->nickname = $request->nickname;
        $usuario->password = $request->password;

        $usuario->save();

        return $usuario;
      
    }
    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $usuario = Usuario::destroy($request->id);
        return $usuario;
    }
}
