<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Funcion para mostrar el formulario para iniciar sesion
    public function showLoginForm(){
        return view('auth.login');
    }
    //Funcion para validar el ingreso del usuario al sistema, si se tiene algun error, se le notificara
    public function login(Request $request){
        $this->validateLogin($request);        
        if (Auth::attempt(['usuario' => $request->usuario,'password' => $request->password,'condicion'=>1])){
            return redirect()->route('principal');
        }
        return back()
        ->withErrors(['usuario' => trans('auth.failed')])
        ->withInput(request(['usuario']));
    }
    //Funcion que valida que se haya ingresado texto en ambos inputs
    protected function validateLogin(Request $request){
        $this->validate($request,[
            'usuario' => 'required|string',
            'password' => 'required|string'
        ]);
    }
    //Funcion para cerrar sesion
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
