@extends('layout.plantilla')

@section('contenido')
    <h1>bienvenido :{{auth()->user()->name}}</h1>
@endsection
