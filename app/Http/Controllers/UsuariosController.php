<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rut'=>'required',
            'apellido'=>'required',
            'email'=>'required',
            
        ]);

        if ($files = $request->file('imagen')) {
            $destinationPath = 'images/'; 
            $profileImage = $files->getClientOriginalName();
            $files->move($destinationPath, $profileImage);
            $insert['imagen'] = "$profileImage";
        }

        $insert['rut'] = $request->get('rut');
        $insert['nombre'] = $request->get('nombre');
        $insert['apellido'] = $request->get('apellido');
        $insert['email'] = $request->get('email');
        $insert['fecha_nac'] = $request->get('fecha_nac');
        $insert['password'] = $request->get('password');

        Usuario::insert($request->except('_token'));

        return redirect('/usuarios')->with('success', 'Usuario guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'rut'=>'required',
            'apellido'=>'required',
            'email'=>'required',
            
        ]);

        if ($files = $request->file('imagen')) {
            $destinationPath = 'images/'; 
            $profileImage = $files->getClientOriginalName();
            $files->move($destinationPath, $profileImage);
            $update['imagen'] = "$profileImage";
        }

        $update['rut'] = $request->get('rut');
        $update['nombre'] = $request->get('nombre');
        $update['apellido'] = $request->get('apellido');
        $update['email'] = $request->get('email');
        $update['fecha_nac'] = $request->get('fecha_nac');
        $update['password'] = $request->get('password');

        Usuario::where('id', $id)->update($update);

        return redirect('/usuarios')->with('success', 'Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect('/usuarios')->with('success', 'Usuario eliminado');
    }
}
