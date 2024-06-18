@extends('layouts.layout')

@section('content')
<section class="w-full md:w-full flex flex-col  px-3">
<h1 class="block text-lg text-gray-500 font-bold mb-1 pr-4">Modificar Post</h1>
<form action="{{ url('post/' . $post->id) }}" method="POST" class="p-2 ">
    @csrf
    @method('PUT')
    <div class="p-2 flex-col">
      <div >
        <label class="block text-gray-500 font-bold mb-1 pr-4">
          Titulo
        </label>
        <input placeholder="{{$post->title}}" value="{{$post->title}}" type="text" name="title" class="bg-gray-200 border-2 border-gray-200 rounded w-2/3 py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
      </div>
 
      <div class="mt-4">
        <label class="block text-gray-500 font-bold mb-1 pr-4">
          Habilitar
        </label>
        <input class="mr-2 leading-tight" type="checkbox" name="habilitated" value="1" {{ old('habilitated') ? 'checked="checked"' : '' }}>
      </div>

      <div class="mt-4">
        <label class="block text-gray-500 font-bold mb-1 pr-4">
          Categoria
        </label>
        <select class="p-2 bg-gray-200 border-2 border-gray-200 rounded w-500 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500" name="category" >
          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->nombre }}</option>
          @endforeach      
        </select>
      </div>

      <div class="mt-4">
        <label class="block text-gray-500 font-bold mb-1 pr-4">
          Autor
        </label>
        <input placeholder="{{$post->poster}}" value="{{$post->poster}}" type="text" name="poster" class="bg-gray-200 border-2 border-gray-200 rounded w-500 py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
      </div>

      <div class="mt-4">
        <label class="block text-gray-500 font-bold mb-1 pr-4">
          Contenido
        </label>
        <textarea placeholder="{{$post->content}}" name="content" class="bg-gray-200 border-2 border-gray-200 rounded  w-2/3  h-screen py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">{{$post->content}}</textarea>
      </div>

      <button type="submit" class="m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Modificar
      </button>
  </form>
</section>
@endsection
