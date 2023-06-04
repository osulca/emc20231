@extends('layouts.app')

@section('content')
<h1>Registro Compra</h1>
<form method="post" action="{{Route('guardar compra')}}">
    @csrf
    <input type="text" name="producto" placeholder="Ingrese producto"><br>
    <input type="text" name="peso" placeholder="Ingrese peso aproximado"><br>
    <input type="text" name="precio" placeholder="Ingrese precio"><br>
    <input type="submit" value="guardar">
</form>
@endsection