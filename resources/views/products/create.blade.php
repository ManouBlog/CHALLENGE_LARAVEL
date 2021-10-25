@extends('products.layout')

@section('header')
<div class="titre">
        <h1>Enregistrer votre information.</h1>
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
    
  <form action="{{ route('products.index') }}" method="POST">
   <!-- important le csrf_field() pour faire rentre tes informations -->
      @csrf
   <div>
       <input type="text" name="name" id="name" placeholder="name">
   </div>
   <div>
       <input type="text" name="prenom" id="prenom"placeholder="prenom">
   </div>
   <div>
       <input type="text" name="email" id="email" placeholder="email">
   </div>
   <div>
       <input type="submit" value="envoyer">
   </div>

  </form>
</div>

@endsection