<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|email',
            'cedula'=>'required',
            'direccion'=>'required|email',
            'telefono'=>'required'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('mensaje','Error en la autenticación, algo no coincide');
        }

        return redirect()->route('post.index');
    }
}