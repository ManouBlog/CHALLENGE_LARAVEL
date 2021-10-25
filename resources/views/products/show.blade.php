@extends('products.layout')


@section('content')

    <a href="{{route('products.index')}}">Back</a>
    <p>name:{{$product->name}}</p>
    <p>prenom:{{$product->prenom}}</p>
    <p>email:{{$product->email}}</p>
    

@endsection