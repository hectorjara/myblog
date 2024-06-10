@extends('layouts.layout')

@section('content')
<h1>Modificar Categoria {{$category->nombre}}</h1>
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
@endsection
