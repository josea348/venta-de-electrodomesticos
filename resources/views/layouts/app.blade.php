<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Venta de Eletrodomesticos</title>
  @vite('resources/css/app.css')
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
  <header class="flex justify-between align-center border-b p-5 bg-white font-bold shadow">
    <h1 class="align-center text-3xl text-center">Eletrodomesticos 3B</h1>
    <nav class="uppercase text-gray-500">
      <a href="/login" class="uppercase text-gray-600 font-bold text-small bg-blue-300 p-1 pl-2 pr-2 m-2 rounded-lg">login</a>
      <a href="/register" class="uppercase text-gray-600 font-bold text-small bg-blue-300 p-1 pl-2 pr-2 m-2 rounded-lg">crear cuenta</a>
    </nav>
  </header>
  <h1 class="text-3xl font-bold container text-center">
    @yield('titulo')
  </h1>
  <div>
    @yield('contenido')
  </div>
  <footer class="text-center p-5 text-gray-500 font-bold uppercase">
Todos los derechos de ser reservados  {{ date('Y') }}
</footer>
</body>
</html>