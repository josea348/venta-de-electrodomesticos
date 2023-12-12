@extends('layouts.app')

@section('titulo')
    Editar cliente
@endsection

@section('contenido')
<div class="md:flex md:justify-center">
    <div class="md:w-96 bg-white p-6 rounded-lg shadow-xl">
        <form method="post" action="{{ url('clientes/'.$cliente->cedula) }}">
            @csrf
            @method('PUT')

            @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
            @endif

            <div class="mb-4">
                <label for="cedula" class="block text-gray-600 text-sm font-bold mb-2">Cédula</label>
                <input type="number" name="cedula" id="cedula" class="border border-blue-300 peer min-h-[auto] w-full rounded bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200" placeholder="Ingrese su cédula" value="{{ $cliente->cedula }}">
                @error('cedula')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-600 text-sm font-bold mb-2">Nombre</label>
                <input type="text" name="name" id="name" class="border border-blue-300 peer min-h-[auto] w-full rounded bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200" placeholder="Ingrese su nombre" value="{{ $cliente->nombre }}">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-gray-600 text-sm font-bold mb-2">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="border border-blue-300 peer min-h-[auto] w-full rounded bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200" placeholder="Ingrese su dirección" value="{{ $cliente->direccion }}">
                @error('direccion')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-gray-600 text-sm font-bold mb-2">Teléfono</label>
                <input type="number" name="telefono" id="telefono" class="border border-blue-300 peer min-h-[auto] w-full rounded bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200" placeholder="Ingrese su teléfono" value="{{ $cliente->telefono }}">
                @error('telefono')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full">
                Actualizar cliente
            </button>
        </form>
    </div>
</div>
@endsection
