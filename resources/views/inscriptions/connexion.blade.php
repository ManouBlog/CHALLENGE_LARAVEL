@extends('inscriptions.layout')

@section('content')

@if(Session::has('success'))
<p>
    {{Session::get('success')}}
</p>
@endif

<form action="{{route::view('/','products.index')}}" method="POST">
    @csrf
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