<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-top-nav></x-top-nav>
    <x-text-header></x-text-header>
    <x-category-nav></x-category-nav>
    <div class="container mx-auto flex flex-wrap py-6">
        @yield('content')
    </div>
    <x-footer></x-footer>
</body>
</html>


  