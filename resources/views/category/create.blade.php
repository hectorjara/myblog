@extends('layouts.layout')

@section('content')
<h1 class="p-2">Añadir Categoria</h1>

<form action="{{ url('category') }}" method="POST" class="p-2 w-full max-w-sm">
    @csrf
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
          Nombre
        </label>
      </div>
      <div class="md:w-2/3">
        <input type="text" name="nombre" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
      </div>

      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
          Habilitar
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="mr-2 leading-tight" type="checkbox" name="habilitated" value="1" {{ old('habilitated') ? 'checked="checked"' : '' }}>
      </div>

    </div>
    <button type="submit" class="m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
        Crear
    </button>
  </form>
@endsection
