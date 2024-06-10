@extends('layouts.layout')

@section('content')
<h1 class="p-2">Añadir Post</h1>

<form action="{{ url('post') }}" method="POST" class="p-2 ">
    @csrf
    <div class="p-2 flex-col>
      <div >
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
          Titulo
        </label>
      </div>
      <div >
        <input type="text" name="title" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
      </div>
 
      <div >
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4">
          Habilitar
        </label>
      </div>
      <div >
        <input class="mr-2 leading-tight" type="checkbox" name="habilitated" value="1" {{ old('habilitated') ? 'checked="checked"' : '' }}>
      </div>

      <div >
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4">
          Categoria
        </label>
      </div>
      <div >
        <select name="category" >

          @foreach($categories as $category)
    
          <option value="{{ $category->id }}">{{ $category->nombre }}</option>
    
          @endforeach      </div>

    </div>

    <div >
      <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4">
        Autor
      </label>
    </div>
    <div >
      <input type="text" name="poster" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
    </div>


    <div >
      <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4">
        Contenido
      </label>
    </div>
    <div >
      <input type="text" name="content" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
    </div>


    <button type="submit" class="m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
        Crear
    </button>
  </form>
@endsection
