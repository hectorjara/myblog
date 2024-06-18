@extends('layouts.layout')

@section('content')
  <!-- Posts Section -->
  <section class="w-full md:w-2/3 flex flex-col items-center px-3">

    @foreach ($posts as $post)
      <article class="flex flex-col shadow my-4">
          <!-- Article Image -->
          <a href="#" class="hover:opacity-75">
              <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
          </a>
          <div class="bg-white flex flex-col justify-start p-6">
              <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->nombre}}</a>
              <a href="{{ url('/post/show/' . $post->id) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
              <a href="#" class="pb-6">{{ Str::limit($post->content, 20, '...') }} </a>
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