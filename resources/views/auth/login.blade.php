@extends('layouts.app')

@section('titulo')
    Login
@endsection

@section('contenido')

<section class="flex md:gap-10 md:justify-center m-4">
  <div class="md:w-6/12 p-5 flex items-center">
    <img class="rounded-xl " src="{{ asset('img/registrar.jpg') }}" alt="Imagen de registro">
  </div>
  <div class="flex flex-row items-center justify-center lg:justify-start pl-6 pr-6">
    <form action="" class="border border-yellow-200 rounded-lg shadow-xl p-4">
      <div class="relative mb-6">
        <label for="" class="pointer-events-none relative left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Nombre</label>
        <input type="text" name="" id="" class="border border-blue-300 peer min-h-[auto] w-full rounded bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200"  placeholder="Nombre">
        @error('name')
        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
        @enderror
      </div>
      <div class="relative mb-6">
        <label for="" class="pointer-events-none relative left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Cedula</label>
        <input type="text" name="" id=""class="border border-blue-300 peer min-h-[auto] w-full rounded bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200"  placeholder="Cedula">
      </div>
      <div>
        <input type="submit" value="Iniciar Sesión" class="flex cursor-pointer bg-green-400 p-3 mb-3 mt-3 ml-[auto] mr-[auto] rounded-lg">
      </div>
    </form>
  </div>
</section>

@endsection