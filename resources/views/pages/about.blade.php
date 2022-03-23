@extends('layouts/app', ['title' => 'About Us'])



@section('content')
    <body >
    <img src="{{asset('images/benin2.png')}}" alt="flag" class="my-12 rounded-full shadow-md h-32">
        <h2 class="mb-2 text-gray-700">
            Built with <span class="text-pink-500"> &hearts; </span> by Rhetice Darkshade !
        </h2>

        <p class="mt-5">
            <a href="{{ route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">
                Revenir a la page d'accueil
            </a>
        </p>


@endsection
