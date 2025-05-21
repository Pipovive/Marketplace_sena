@extends('layout')

@section('title')
    <h1 class ="title container-xl" >Usuarios</h1>

@endsection

@section('content')
  
    <table class="ui celled table">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Celular</th>
          <th scope="col">Email</th>
          <th scope="col">rol</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $data as $categoria)
        <tr>
          <td>{{ $categoria->nombre }}</td>
          <td>{{ $categoria->movile }}</td>
          <td>{{ $categoria->email }}</td>
          <td>{{ $categoria->rol }}</td>
  
          <td></td>
        </tr>
      </tbody>
       @endforeach
    </table>
@endsection
  
