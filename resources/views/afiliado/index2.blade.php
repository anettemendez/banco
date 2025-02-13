@extends('layaouts.principal')

@section('hijos')

Nombre de empleado {{$empleado->codempleado}} {{$empleado->nombre}} {{$empleado->apellido}}


<h1>Modulo Afiliado</h1>
<a href="afiliado/create" class="btn btn-primary">Crear Nuevo Afiliado</a>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Codafiliado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Edad</th>
        </tr>
    </thead>

    <tbody>
        @foreach($afiliados as $afiliado)
        <tr>
        <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->codafiliado}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th>{{$afiliado->ciudad}}</th>
            <th>{{$afiliado->telefono}}</th>
            <th>{{$afiliado->edad}}</th>
            <th>
                <a href="/retiro/{{$afiliado->id}}/{{$empleado->id}}" class="btn btn-info">Retiro</a>
                <a href="/deposito" class="btn btn-info">Deposito</a>
            </th>
        </th>
        @endforeach
    <tbody>
</table>
@endsection
