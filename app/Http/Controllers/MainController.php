<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function login(Request $request) {
        $boton=$request->post("login",null);
        if($boton) {
            $usuario=$request->validate(['email'=>'required','password'=>'required']);

            if (Auth::attempt($usuario)) {
                
                $request->session()->regenerate();
                return redirect()->intended('ok');
            }
        }
        
        return view("login");
    }
    public function ok(Request $request) {
        return view("ok");
    }
}
