@extends('layaouts.principal')

@section('hijos')

<h1>Modulo deposito</h1>
<a href="deposito/create" class="btn btn-primary">Crear Nuevo deposito</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codeposito</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nivel</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <body>
        <tr>
            @foreach($depositos as $deposito)
            <th>{{$deposito->id}}</th>
            <th>{{$deposito->codeposito}}</th>
            <th>{{$deposito->nombre}}</th>
            <th>{{$deposito->apellido}}</th>
            <th>{{$deposito->nivel}}</th>
            <th>{{$deposito->telefono}}</th>
            <th>Acciones</th>
            <th>
                <a href="deposito/edit" class="btn btn-info">Editar</a>
                <a href="/afiliado/{{$deposito->id}}" class="btn btn-success">Afiliados</a>
                <button class="btn btn-warning">Eliminar</button>
            </th>
        </tr>
        @endforeach
    <body>
</table>
@endsection