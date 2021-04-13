@extends('layout.plantilla')
@section('contenido')
  <div class="container">
    <h1>Registro Nuevo</h1>


    <form method="post" action="{{route('categoria.store')}}">
      @csrf

  <div class="mb-3">
    <label for="">Descripcion :</label>
    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion">
      @error('descripcion')
        <span class="invalid-feedback" role="alert">
        <strong> {{$message}}</strong>

        </span>
      @enderror
  </div>

  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Guardar</button>
  <a href="{{route('cancelar')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a>
</form>


  </div>
@endsection
