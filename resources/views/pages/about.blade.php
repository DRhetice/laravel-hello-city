@extends('app')

@section('title', 'About Us | '. config('app.name'))

@section('content')
    <body >
    <img src="/images/coco.jpg" alt="Guy2buzbar">
        <p> Built with by &hearts; Rhetice learning !</p>
        <p><a href="{{ route('home')}}">Revenir a la page d'accueil</a></p> 
  

@endsection