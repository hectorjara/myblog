@extends('layouts.layout')

@section('content')
<h1>Modificar Post {{$post->title}}</h1>

<form action="{{ url('post/' . $post->id) }}" method="POST" class="p-2 w-full max-w-sm">
    @csrf
    @method('PUT')
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
          Titulo
        </label>
      </div>
      <div class="md:w-2/3">
        <input type="text" name="title" value="{{$post->title}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
      </div>



    </div>
    <button type="submit" class="m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
        Modificar
    </button>
  </form>
@endsection
