@extends('products.layout')


@section('content')

    <a href="{{route('products.index')}}">Back</a>
    <p>name:{{$product->libelle}}</p>
    <p>prenom:{{$product->quantite_minimal}}</p>
    <p>email:{{$product->quantite_stock}}</p>
    

@endsection