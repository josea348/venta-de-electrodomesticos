@extends('layouts.app')

@section('titulo')
    Registrarse
@endsection

@section('contenido')

<section class="flex md:gap-10 md:justify-center">
    <div class="md:w-6/12 p-5 flex items-center">
        <img class="rounded-xl " src="{{ asset('img/registrar.jpg') }}" alt="Imagen de registro">
    </div>
    <div class="flex flex-row items-center justify-center lg:justify-start pl-6 pr-6">
        <form action="{{route('register.store')}}" method="post" class="border  border-yellow-200 rounded-lg shadow-xl p-4">
            @csrf
            <div class="relative mb-6">
                <label for="" class="text-black-300">Nombre</label>
                <input type="text" name="name" id=""class="w-full p-2 border border-blue-300 rounded-lg"  placeholder="Nombre">
                @error('name')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="relative mb-6">
                <label for="" class=" text-black-300">Cedula</label>
                <input type="text" name="cedula" id=""class="w-full p-2 border border-blue-300 rounded-lg"  placeholder="Cedula">
                @error('cedula')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="relative mb-6">
                <label for="" class=" text-black-300">Dirección</label>
                <input type="text" name="direccion" id=""class="w-full p-2 border border-blue-300 rounded-lg"  placeholder="Difección">
                @error('direccion')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="relative mb-6">
                <label for="" class=" text-black-300">Teléfono</label>
                <input type="text" name="telefono" id=""class="w-full p-2 border border-blue-300 rounded-lg"  placeholder="Teléfono">
                @error('telefono')
                <p class="bg-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="submit" value="Registrarse" class="flex cursor-pointer bg-green-400 p-3 mb-5 mt-5 ml-[auto] mr-[auto] rounded-lg">
            </div>
        </form>
    </div>
</section>

@endsection