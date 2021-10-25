@extends('inscriptions.layout')

@section('content')

@if(Session::has('success'))
<p>
    {{Session::get('success')}}
</p>
@endif

<form action="{{route('inscriptions.index')}}" method="POST">
    @csrf
<div>
    <input type="text" name="nom" id="nom" placeholder="nom">
</div>
<div>
    <input type="email" name="email" id="email" placeholder="***@gmail.com">
</div>
<div>
    <input type="password" name="pass" id="pass" placeholder="*****">
</div>
<div>
    <input type="submit" value="stocker">
</div>
</form>
@endsection