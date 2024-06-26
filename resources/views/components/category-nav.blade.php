@php
    use App\Models\Category;
    $categories = Category::all();
@endphp
  <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-amber-200" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center  justify-center items-center"
                @click="open = !open"
            >
                Categorias <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                @foreach ($categories as $category)
                <a href="{{ url('/post/category/'. $category->id) }}" class="hover:bg-gray-400 rounded text-yellow-600 py-2 px-4 mx-2">{{$category->nombre}}</a>
                @endforeach
            </div>
        </div>
    </nav>