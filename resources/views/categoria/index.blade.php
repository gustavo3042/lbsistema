@extends('layout.plantilla')
@section('contenido')
<div class="container">
<h1>Listado Categorias</h1>
<a href="{{ route('categoria.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>Nuevo Registro</a>
<form class="d-flex float-right">
       <input name="buscarpor" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{$buscarpor}}">
       <button class="btn btn-success" type="submit">Search</button>
</form>


@if(session('datos'))
<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
{{session('datos')}}

<button type="button" class="close" data-dismiss="alert" aria-label="Close" name="button"></button>
</div>
@endif


<table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">Codigo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>

    @foreach($categoria as $itemcategoria)

    <tr>

      <td>{{$itemcategoria->id}}</td>
      <td>{{$itemcategoria->descripcion}}</td>
      <td>
<a href="{{route('categoria.edit',$itemcategoria->id)}}" class="btn btn-info  btn-sm"><i class="fas fa-edit"></i>Editar</a>
<a href="{{route('categoria.confirmar',$itemcategoria->id)}}" class="btn btn-danger  btn-sm"><i class="fas fa-edit"></i>Eliminar</a>

      </td>
    </tr>


    @endforeach
  </tbody>
</table>



</div>

@endsection
