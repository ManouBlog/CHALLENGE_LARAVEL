@extends('products.layout')

@section('content')

<h1 class="h5">tableau</h1>
<a href="{{ route('products.create')}}">ADD</a>

@if($message = Session::get('success'))
<p>{{$message}}</p>
@endif

<table>
    <tr>
        <th>ID</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th colspan="3">action</th>
    </tr>
    <?php
    $num=1;
    ?>
    
    @foreach($users as $User)
    <tr>
        <td><?= $num++ ; ?></td>
        <td>{{$User->name}}</td>
        <td>{{$User->prenom}}</td>
        <td>{{$User->email}}</td>
        <td>
            <form action="{{ route('products.destroy', $User->id )}}" method="POST">
            <a href="{{ route('products.show', $User->id) }}">show</a>
            <a href="{{ route('products.edit', $User->id )}}">edit</a>
            @csrf
            @method('DELETE')
            <button type='submit'>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>



@endsection