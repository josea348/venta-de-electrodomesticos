@extends('layouts.app')

@section('titulo')
    Login
@endsection

@section('contenido')

<section class="flex md:gap-10 md:justify-center">
    <div class="md:w-6/12 p-5 flex items-center">
        <img class="rounded-xl " src="{{ asset('img/login.jpg') }}" alt="Imagen de login">
    </div>
    <div class="flex flex-row items-center justify-center lg:justify-start pl-6 pr-6">
        <form action="" class="border border-yellow-200 rounded-lg shadow-xl p-4">
            <div class="relative mb-6">
                <label for="">Nombre</label>
                <input type="text" name="" id=""class="w-full p-2 border border-blue-300 rounded-lg"  placeholder="Nombre">
            </div>
            <div class="relative mb-6">
                <label for="">Cedula</label>
                <input type="text" name="" id=""class="w-full p-2 border border-blue-300 rounded-lg"  placeholder="Cedula">
            </div>
            <div>
                <input type="submit" value="Iniciar Sesión" class="flex cursor-pointer bg-green-400 p-3 mb-5 mt-5 ml-[auto] mr-[auto] rounded-lg">
            </div>
        </form>
    </div>
</section>

@endsection