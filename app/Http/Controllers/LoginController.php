<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|name',
            'cedula'=>'required'
        ]);

        if(!auth()->attempt($request->only('name', 'cedula'))){
            return back()->with('mensaje','Error en la autenticación, algo no coincide');
        }

        return redirect()->route('post.index');
    }
}