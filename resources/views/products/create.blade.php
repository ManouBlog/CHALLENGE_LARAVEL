@extends('products.layout')

@section('header')
<div class="titre">
        <h1>Enregistrer votre information.</h1>
        <div><a href="{{ route('products.index') }}">Retour</a></div>
    </div>
@endsection

@section('content')


<div class="contenu">
    
  <form action="{{ route('products.index') }}" method="POST">
   <!-- important le csrf_field() pour faire rentre tes informations -->
      @csrf
   <div>
       <input type="text" name="libelle" id="libelle" placeholder="libelle">
   </div>
   <div>
       <input type="text" name="quantite_minimal" id="quantite_minimal"placeholder="quantite_minimal">
   </div>
   <div>
       <input type="text" name="quantite_stock" id="quantite_stock" placeholder="quantite_stock">
   </div>
   <div>
       <input type="submit" value="envoyer">
   </div>

  </form>
</div>

@endsection