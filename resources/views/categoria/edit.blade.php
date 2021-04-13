@extends('layout.plantilla')
@section('contenido')
  <div class="container">
    <h1>Editar Registro Nuevo</h1>


    <form method="post" action="{{route('categoria.update',$categoria->id)}}">

      @method('put')
      @csrf


      <div class="mb-3">
        <label for="">Codigo :</label>
        <input type="text" class="form-control " id="id" name="id" value="{{$categoria->id}}" disabled>
          @error('descripcion')
            <span class="invalid-feedback" role="alert">
            <strong> {{$message}}</strong>

            </span>
          @enderror
      </div>

  <div class="mb-3">
    <label for="">Descripcion :</label>
    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" value="{{$categoria->descripcion}}">
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
