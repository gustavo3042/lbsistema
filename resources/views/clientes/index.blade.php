@extends('layout.plantilla')

@section('contenido')


<div class="container">
<h1>Clientes</h1>


<table class="table">
  <thead class="thead-dark">
    <tr>

            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Comuna</th>
            <th scope="col">opciones</th>
    </tr>
  </thead>
  <tbody>

@foreach ($clientes as $itemcliente)




    <tr>

      <td>{{$itemcliente->Nombre}}</td>
      <td>{{$itemcliente->Apellido}}</td>
      <td>{{$itemcliente->Telefono}}</td>
        <td>{{$itemcliente->comuna}}</td>
    </tr>

    @endforeach

  </tbody>
</table>



</div>
@endsection
