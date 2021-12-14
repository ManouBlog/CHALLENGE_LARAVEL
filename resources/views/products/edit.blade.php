@extends('products.layout')

@section('header')
<div class="titre">
        <h1>Update.</h1>
        <div><a href="{{ route('products.index') }}">Retour</a></div>
    </div>
@endsection

@section('content')

@if($errors->any())
<div>
    <p>vueillez entre les données</p>
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif

<div class="contenu">
    
  <form action="{{ route('products.update',$product->id) }}" method="POST">
   <!-- important le csrf_field() pour faire rentre tes informations -->
      @csrf
      @method('PUT')
   <div>
       <input type="text" name="libelle" id="libelle" value="{{$product->libelle}}">
   </div>
   <div>
       <input type="text" name="quantite_minimal" id="quantite_minimal"value="{{$product->quantite_minimal}}">
   </div>
   <div>
       <input type="text" name="quantite_stock" id="quantite_stock" value="{{$product->quantite_stock}}">
   </div>
   <div>
       <input type="submit" value="envoyer">
   </div>

  </form>
</div>

@endsection