@extends('layouts.layout')

@section('content')
<h1 class="p-2">Vista del Post {{$post->title}}</h1>
<div class="p-2 flex min-w-0 gap-x-4">
    <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900">{{$post->content}}</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">Creada por: {{$post->poster}}</p>
    </div>
  </div>

<a href="{{ url('/post/edit/' . $post->id) }}">
    <button class="m-2 bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Editar
    </button>
</a>
@endsection
