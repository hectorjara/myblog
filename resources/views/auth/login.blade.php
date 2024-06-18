@extends('layouts.layout')

@section('content')
<section class="w-full md:w-full flex flex-col  px-3">
<h1 class="block text-lg text-gray-500 font-bold mb-1 pr-4">Login</h1>
<form action="{{ url('login') }}" method="POST" class="p-2 ">
    @csrf
    <div class="p-2 flex-col">

        <!-- Email -->
        <div >
            <label class="block text-gray-500 font-bold mb-1 pr-4">
                Email
            </label>
            <input required type="email" :value="old('email')" name="email" class="bg-gray-200 border-2 border-gray-200 rounded w-500 py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
        </div>
        @error('email')
            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
        @enderror

        <!-- Password -->
        <div >
            <label class="block text-gray-500 font-bold mb-1 pr-4">
                Password
            </label>
            <input required type="password" name="password" class="bg-gray-200 border-2 border-gray-200 rounded w-500 py-2 px-4 text-gray-700 focus:outline-none focus:bg-white focus:border-purple-500">
        </div>
        @error('password')
            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
        @enderror

    </div>
    <button type="submit" class="m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Log In
    </button>
</form>
</section>
@endsection