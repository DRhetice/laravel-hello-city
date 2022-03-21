@extends('app')

@section('title', 'Hello City')

@section('content')
    
        <h1> Hello from Bénin !</h1>
        <p> It's currently {{ date('H:i') }} </p>
      
@endsection
