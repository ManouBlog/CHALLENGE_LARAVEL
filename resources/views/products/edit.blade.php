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
       <input type="text" name="name" id="name" value="{{$product->name}}">
   </div>
   <div>
       <input type="text" name="prenom" id="prenom"value="{{$product->prenom}}">
   </div>
   <div>
       <input type="text" name="email" id="email" value="{{$product->email}}">
   </div>
   <div>
       <input type="submit" value="envoyer">
   </div>

  </form>
</div>

@endsection