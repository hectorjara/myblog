@extends('layouts.layout')

@section('content')
<section class="w-full md:w-2/3 flex flex-col items-start px-3">

<a href="{{ url('/category/create') }}" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
  Crear Nueva Categoria
</a>

<ul role="list" class="p-2 divide-y divide-gray-100">
    @foreach ($categories as $category)
    <li class="flex justify-between gap-x-6 py-3">
      <div class="flex min-w-0 gap-x-4">
        <div class="min-w-0 flex-auto">
            <a href="{{ url('/category/show/' . $category->id) }}">
            <p class="text-sm font-semibold leading-6 text-gray-900">{{$category->nombre}}</p>
          </a>
          <p class="mt-1 truncate text-xs leading-5 text-gray-500">
            @if ($category->habilitated ==1)"Categoria habilitada"
            @else  "Categoria NO habilitada"
            @endif</p>
        </div>
      </div>
    </li>
    @endforeach
  </ul>
  
</section>
@endsection
