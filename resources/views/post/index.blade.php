@extends('layouts.layout')

@section('content')
<h1 class="p-2">Listado de Post</h1>

<a href="{{ url('/post/create') }}">
    <button class="m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
        Crear Nuevo Post
    </button>
</a>

<ul role="list" class="p-2 divide-y divide-gray-100">
    @foreach ($posts as $post)
    <li class="flex justify-between gap-x-6 py-3">
      <div class="flex min-w-0 gap-x-4">
        <div class="min-w-0 flex-auto">
            <a href="{{ url('/post/show/' . $post->id) }}">
            <p class="text-sm font-semibold leading-6 text-gray-900">{{$post->title}}</p>
          </a>
          <p class="mt-1 truncate text-xs leading-5 text-gray-500">
            @if ($post->habilitated ==1)"Post habilitado"
            @else  "Post NO habilitado"
            @endif</p>

          <p class="text-sm font-semibold leading-6 text-gray-900">Categoria: {{$post->category->nombre}}</p>
          <p class="text-sm font-semibold leading-6 text-gray-900">Contenido: {{$post->content}}</p>
          <p class="text-sm font-semibold leading-6 text-gray-900">Autor: {{$post->poster}}</p>

        </div>
      </div>
    </li>
    @endforeach
  </ul>
  
  
@endsection
