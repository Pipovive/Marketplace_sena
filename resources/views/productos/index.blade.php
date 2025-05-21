@extends('layout')

@section('title')
    <h1 class ="title container-xl" >Productos</h1>

@endsection

@section('content')
  
    <table class="ui celled table">
      <thead>
        <tr>
        <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">valor</th>
          <th scope="col">Estado</th>
          <th scope="col">Imagen</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $data as $categoria)
        <tr>
            <td>{{ $categoria->nombre}}</td>
          <td>{{ $categoria->descripcion}}</td>
          <td>{{ $categoria->valor}}</td>
          <td>{{ $categoria->imagen}}</td>
        </tr>
      </tbody>
       @endforeach
    </table>
@endsection
  