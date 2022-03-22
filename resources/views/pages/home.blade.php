@extends('app')

@section('title', 'Hello City')

@section('content')
        <img src="/images/kny.jpg" alt="kimetsu non yaiba">
    
        <h1> Hello from Bénin !</h1>
        <p> It's currently {{ date('H:i') }} </p>
      
@endsection
