<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="{{ url('post') }}">Inicio</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="{{ url('category') }}">Categorias</a></li>
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-white pr-6">
                @guest
                <a class="px-2" href="{{ url('login') }}">
                    <p class="">login</p>
                </a>
                <a class="" href="{{ url('register') }}">
                    <p class="px-2">Registro</p>
                </a>
                @endguest
            </div>
        </div>

    </nav>