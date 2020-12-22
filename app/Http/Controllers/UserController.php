<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class UserController extends Controller
{
    public function registrarUsuario(Request $request){
        $user =new User();
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
        return view('wellcome')->with('notice','usuario registrado. Logeate');
    }
}
