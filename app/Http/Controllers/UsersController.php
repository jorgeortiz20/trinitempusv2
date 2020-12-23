<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Models;
class UsersController extends Controller
{
    public function registrarUsuario(Request $request){
        $user =new \App\Models\User();
        $user->nickname=$request->nickname;
        $user->nombreUsuario=$request->nombreUsuario;
        $user->apellidoUsuario=$request->apellidoUsuario;
        $user->email=$request->email;
        $user->fechaNacimiento=$request->fechaNacimiento;
        $user->ciudadResidencia=$request->ciudadResidencia;
        $user->telefonoContacto=$request->telefonoContacto;
        $user->password= bcrypt($request->password);
        $user->isAdmin=false;
        $user->saldoTiempo=0;

        $user->save();
        return view('principal')->with('notice','usuario registrado. Logeate');
    }
}
