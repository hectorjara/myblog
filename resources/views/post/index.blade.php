@extends('layouts.layout')

@section('content')
  <!-- Posts Section -->
  <section class="w-full md:w-2/3 flex flex-col items-center px-3">
    @auth
    <a href="{{ url('/post/create') }}" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
      Agregar Nuevo Post
    </a>
    @endauth

    @foreach ($posts as $post)
      <article class="flex flex-col shadow my-4">
          <!-- Article Image -->
          <div class="bg-white flex flex-col justify-start p-6">
              <a href="#" class="text-gray-500 text-sm font-bold uppercase pb-4">{{$post->category->nombre}}</a>
              <a href="{{ url('/post/show/' . $post->id) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
              <a href="#" class="pb-6">{{ Str::limit($post->content, 100, '...') }} </a>
              <a href="{{ url('/post/show/' . $post->id) }}" class="uppercase text-gray-800 hover:text-black">Continuar Leyendo <i class="fas fa-arrow-right"></i></a>
          </div>
      </article>
    @endforeach

    <!-- Pagination -->
    <div class="flex items-center py-8">
      {{$posts->links()}}
    </div>

</section>
  
  
@endsection
