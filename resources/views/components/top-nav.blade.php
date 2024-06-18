<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-yellow-500 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-amber-200 uppercase no-underline">
                    <li><a class="hover:text-black text-2xl hover:underline px-4" href="{{ url('post') }}">Inicio</a></li>
                    @auth                    
                    <li><a class="hover:text-black text-2xl hover:underline px-4" href="{{ url('category') }}">Categorias</a></li>
                    @endauth    
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-black pr-6">
                @guest
                <a class="px-2" href="{{ url('login') }}">
                    <p class="">login</p>
                </a>
                <a class="" href="{{ url('register') }}">
                    <p class="px-2">Registro</p>
                </a>
                @endguest

                @auth
                    <form method="POST" action="{{url('logout') }}">
                    @csrf
                    <button type="submit" >Log Out</button>
                    </form>
                @endauth
            </div>
        </div>

    </nav>