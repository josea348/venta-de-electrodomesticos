<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required | max:30',
            'cedula'=>'required | max:20',
            'direccion'=>'required | max:30',
            'telefono'=>'required | max:20',
            'email' =>'required|unique:users|email|max:60',
            'password'=>'required|min:5'
        ]);

        User::create([
            'name'=>$request->name,
            'cedula'=>$request->cedula,
            'direccion'=>$request->direccion,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('login');
    }
}
