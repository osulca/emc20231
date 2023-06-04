@extends('layouts.app')

@section('content')
<h1>Registro Direccion</h1>
<form method="post" action="{{Route('guardar direccion')}}">
    @csrf
    <input type="text" name="provincia" placeholder="Ingrese provincia"><br>
    <input type="text" name="departamento" placeholder="Ingrese departamento"><br>
    <input type="text" name="distrito" placeholder="Ingrese distrito"><br>
    <input type="text" name="direccion" placeholder="Ingrese direccion"><br>
    <input type="submit" value="guardar">
</form>
@endsection