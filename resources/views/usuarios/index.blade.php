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
        @foreach ( $usuarios as $categoria)
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
  
@section('btn')
 <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nuevo Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form id="categoria-form" action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ej: Dr Juan Lopez" id="nombre">
                </div>

                <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Ej: DrJuanLope@ejemplo" id="nombre">
                </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label col-lg-6">Contraseña: </label>
                  <input type="text" class="form-control" name="password" id="password">
                </div>  

                <div class="col-md-6 mb-3">
                  <label class="form-label col-lg-6">Confirmar Contraseña:</label>
                  <input type="text" class="form-control" name="" id="">
                </div>  

                <div class="col-md-6 mb-3">
                  <label class="form-label col-lg-6">Seleccionar Ciudad:</label>
                  <select name="ciudad_id" class="form-control" required>
                    <option value="">Selecciona una ciudad:</option>
                    @foreach ($ciudades as $ciudad)
                        <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                    @endforeach
                </select>
                </div>  

                <div class="col-md-6 mb-3">
                  <label class="form-label col-lg-6">Celular:</label>
                  <input type="text" class="form-control" name="movile" id="movile">
                </div>  
                

                <div class="col-md-6 mb-3">
                  <label class="form-label col-lg-6">Foto de perfil</label>
                  <input type="file" class="form-control" name="" accept="image/*">
                </div>  
              
            </div>

            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </button>
            <button type="submit" class="btn btn-primary ms-auto" id="btn-modal" form="categoria-form">
              Enviar
            </button>
          </div>
        </div>
      </div>
    </div>
@endsection

