@extends('layouts.layout')

@section('content')
<section class="w-full md:w-full flex flex-col  px-3">
  <h1 class="block text-lg text-gray-500 font-bold mb-1 pr-4">Modificar Categoria</h1>
  <form action="{{ url('category/' . $category->id) }}" method="POST" class="p-2 w-full max-w-sm">
      @csrf
      @method('PUT')
      <div class="p-2 flex-col">
        <div >
          <label class="block text-gray-500 font-bold mb-1 pr-4">
            Nombre
          </label>
          <input type="text" name="nombre" value="{{$category->nombre}}" class="bg-gray-200 border-2 border-gray-200 rounded w-2/3 py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
        </div>

        <div class="mt-4">
          <label class="block text-gray-500 font-bold mb-1 pr-4">
            Habilitar
          </label>
          <input class="mr-2 leading-tight" type="checkbox" name="habilitated" value=1 {{$category->habilitated ? 'checked':''}}>
        </div>

      </div>
      <button type="submit" class="m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
          Modificar
      </button>
    </form>
</section>
@endsection
