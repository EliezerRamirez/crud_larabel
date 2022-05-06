<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')'name' - datos app</title>
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
  </head>
  <body class="bg-gray-100 py-12 px-6 text-gray-800">
   <nav>
    <a href="/datos"class="border border-blue-500
    rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">
    Ver datos
    </a>
    <a href="/datos/create"class="border border-blue-500
    rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">
    Agregar
    </a>
   </nav>
    <main>
        @yield('content')
    </main>

   </body>

</html>