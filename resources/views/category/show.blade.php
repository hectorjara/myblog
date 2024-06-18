@extends('layouts.layout')

@section('content')
<section class="w-full md:w-2/3 flex flex-col items-start px-3">
    <h1 class="text-blue-700 text-sm font-bold uppercase pb-4">Vista detalle de la Categoria {{$category->nombre}}</h1>
    <div class="p-2 flex min-w-0 gap-x-4">
        <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">{{$category->nombre}}</p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">
            @if ($category->habilitated ==1)"Categoria habilitada"
            @else  "Categoria NO habilitada"
            @endif</p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">Creada en: {{$category->created_at}}</p>
        </div>
    </div>
    <a href="{{ url('/category/edit/' . $category->id) }}" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
        Editar
    </a>
</section>
@endsection
