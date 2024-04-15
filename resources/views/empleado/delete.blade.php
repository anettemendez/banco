@extends('layouts.principal')

@section('hijos')
<h1>Eliminar Empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{ $empleado->id }}" method="POST">
    @csrf
    @method('DELETE')
    <p>¿Estás seguro de que quieres eliminar a {{ $empleado->nombre }}?</p>
    <button type="submit">Eliminar</button>
</form>
</div>
</div>
</div>
@endsection
