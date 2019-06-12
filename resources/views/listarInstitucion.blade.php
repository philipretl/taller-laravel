@extends('plantilla.plantilla')

@section('subtittle')
  <h1>Listar Instituciones</h1>
@endsection

@section('contenido')
  <h4>Aqui ira la lista de instituciones</h4>
  @foreach ($instituciones as $i)
    <h4>{{$i->nombre}}</h4>
    <h4>codigo: {{$i->codigo}}</h4>
  @endforeach
@endsection
