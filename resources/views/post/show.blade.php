@extends('layouts.layout')

@section('content')<!-- Post Section -->
<section class="w-full md:w-2/3 flex flex-col items-center px-3">

    <article class="flex flex-col shadow my-4">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
            <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->nombre}}</a>
            <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
            <p href="#" class="text-sm pb-8">
                Por <a href="#" class="font-semibold hover:text-gray-800">{{$post->poster}}</a>, Published on April 25th, 2020
            </p>
            <p>{{$post->content}}</p>
        </div>
    </article>
    
    <!-- Agregar Previous y Next -->

    <a href="{{ url('/post/edit/' . $post->id) }}" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
        Editar
    </a>

    <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
        <!-- Agregar Avatar del Autor -->
        <div class="flex-1 flex flex-col justify-center md:justify-start">
            <p class="font-semibold text-2xl">{{$post->poster}}</p>
            <!-- Agregar Redes Sociales del Autor -->
        </div>
    </div>

</section>
@endsection
