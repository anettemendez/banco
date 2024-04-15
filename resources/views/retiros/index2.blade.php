@extends('layaouts.principal')

@section('hijos')
<h1>Empleado: {{$empleado->nombre}} {{$empleado->apellido}}</h1>
<h1>Modulo de Retiros Afiliado: {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>

<a href="/retiro/create/{{$empleado->codempleado}}/{{$afiliado->codafiliado}}" class="btn btn-primary">Realizar Retiro</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>codempleado</th>
            <th>codafiliado</th>
            <th>fecha</th>
            <th>monto</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            @foreach($retiros as $retiro)
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->codafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
            <th>

            </th>
        </tr>
        @endforeach
    <tbody>
</table>
@endsection