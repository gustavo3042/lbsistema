@extends('layout.plantilla')
@section('contenido')
  <div class="container">
    <h1>Desea Eliminar Registro ? Codigo : {{$categoria->id}} - Descripcion : {{$categoria->descripcion}} </h1>


    <form method="post" action="{{route('categoria.destroy',$categoria->id)}}">
      @method('delete')
      @csrf



  <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i>Si</button>
  <a href="{{route('cancelar')}}" class="btn btn-primary"><i class="fas fa-times-circle"></i>No</a>
</form>


  </div>
@endsection
