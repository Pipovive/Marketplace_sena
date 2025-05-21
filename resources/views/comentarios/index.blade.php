@extends('layout')

@section('title')
    <h1 class ="title container-xl" >Comentarios</h1>

@endsection

@section('content')
  
    <table class="ui celled table">
      <thead>
        <tr>
          <th scope="col">Descripcion</th>
          <th scope="col">Valoracion</th>
          <th scope="col">Estado</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $data as $categoria)
        <tr>
          <td>{{ $categoria->descripcion}}</td>
          <td>{{ $categoria->valoracion}}</td>
          <td>{{ $categoria->estado}}</td>
        </tr>
      </tbody>
       @endforeach
    </table>
@endsection
  
