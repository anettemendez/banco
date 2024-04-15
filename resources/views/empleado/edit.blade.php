@extends('layouts.principal')

@section('hijos')
<h1>Editar Empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{ $empleado->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codigoEmpleado" class="form-control" value="{{ $empleado->codigoEmpleado }}">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ $empleado->nombre }}">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" class="form-control" value="{{ $empleado->apellido }}">
    </div>

    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" class="form-control" value="{{ $empleado->nivel }}">
    </div>

    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" class="form-control" value="{{ $empleado->telefono }}">
    </div>

    <button type="submit">Guardar</button>
</form>
</div>
</div>
</div>
@endsection
