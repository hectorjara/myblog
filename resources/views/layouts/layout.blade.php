<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gray-800">
                <div class="flex space-x-4">
                  <a href="{{ url('/') }}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Inicio</a>
                  <a href="{{ url('category') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Categorias</a>
                  <a href="login" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                </div>

        </div>    
    </nav>

@yield('content')

</body>
</html>


  