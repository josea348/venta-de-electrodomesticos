<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        
        $request->request->add(['cedula' => Str::slug($request->cedula)]);
        $request->request->add(['direccion' => Str::slug($request->direccion)]);
        $request->request->add(['telefono' => Str::slug($request->telefono)]);
        
        $this->validate($request, [
            'name'=>'required | max:30',
            'cedula'=>'required | max:20',
            'direccion'=>'required | max:30',
            'telefono'=>'required | max:20'
        ]);

        User::create([
            'name' => $request->name,
            'cedula' => $request->cedula,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono
        ]);
        //FORMA 1 DE AUTENTICAR
        /* auth()->attempt([
            'name' => $request->name,
            'cedula' => $request->cedula,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono
        ]); */

        //FORMA 2 DE AUTENTICAR
        auth()->attempt($request->only('name', 'cedula', 'direccion', 'telefono'));

        return redirect()->route('post.index');
    }
}