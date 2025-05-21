@extends('layout')

@section('title')
    <h1 class ="title container-xl" > Ciudades</h1>

@endsection

@section('content')
  
    <table class="ui celled table">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Estado</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
@foreach ( $data as $categoria)
        <tr>
          <td>{{ $categoria->nombre }}</td>
          <td>{{ $categoria->estado }}</td>
          <td></td>
        </tr>
      </tbody>
       @endforeach
    </table>
@endsection
  
