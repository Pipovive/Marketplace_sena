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
        @foreach ( $producto as $categoria)
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

@section('btn')
 <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nuevo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form id="categoria-form" action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ej: Camisas" id="nombre">
              </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label col-lg-6">Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug">
                </div>

                
                <div class="col-md-6 mb-3">
                  <label class="form-label col-lg-6">Imagen</label>
                  <input type="file" class="form-control" name="imagen" accept="image/*">
                </div>  
              
                <div class="col-md-6 mb-3">
                  <label class="form-label col-lg-6">Valor</label>
                  <input type="number" class="form-control" name="valor" id="valor" step="0.01" min="0">
                </div>  

                <div class="col-md-6 mb-3">
                  <label class="form-label col-lg-6">Estado</label>
                  <select name="estado" class="form-control" required>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                  </select>
                </div>  

                <div class="col-md-6 mb-3">
                <label class="col-md-6 mb-3">Estado del producto</label>
                <select name="estado_producto" id="estado_producto" class="form-control">
                  <option value="nuevo">Nuevo</option>
                  <option value="poco uso">Poco uso</option>
                  <option value="usado">Usado</option>
                </select>
                </div>

                <div class="col-md-6 mb-3">
                <label class="col-md-6 mb-3">Seleccionar Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-control">
                  <option value="">Seleccionar... </option>
                  @foreach ( $categorias as $categoria )
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                  @endforeach
                </select>
                </div>

                <div class="col-md-6 mb-3">
                <label class="col-md-6 mb-3">Seleccionar Usuario</label>
                <select name="usuario_id" id="usuario_id" class="form-control">
                  <option value="">Seleccionar... </option>
                  @foreach ( $usuarios as $usuario )
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                  @endforeach
                </select>
                </div>

                <div class="col-md-6 mb-3">
                <label class="col-md-6 mb-3">Seleccionar Ciudad</label>
                  <select name="ciudad_id" id="ciudad_id" class="form-control">
                  <option value="">Seleccionar... </option>
                  @foreach ( $ciudades as $ciudad )
                    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                  @endforeach
                </select>
                </div>

            </div>

            <div class="mb-3">
                  <div>
                    <label class="form-label">Descripcion</label>
                    <textarea class="form-control" rows="3" name="descripcion"></textarea>
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

@section('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
  const nombreInput = document.getElementById('nombre');
  const slugInput = document.getElementById('slug');
  
  nombreInput.addEventListener('input', function() {
    // Convertir a minúsculas
    let slug = nombreInput.value.toLowerCase();
    
    // Reemplazar caracteres especiales y espacios
    slug = slug
      .replace(/[áàäâã]/g, 'a')
      .replace(/[éèëê]/g, 'e')
      .replace(/[íìïî]/g, 'i')
      .replace(/[óòöôõ]/g, 'o')
      .replace(/[úùüû]/g, 'u')
      .replace(/ñ/g, 'n')
      .replace(/[^\w\s-]/g, '') // Eliminar caracteres no alfanuméricos
      .replace(/[\s_-]+/g, '-') // Reemplazar espacios y guiones por un solo guión
      .replace(/^-+|-+$/g, ''); // Eliminar guiones al inicio y final
    
    slugInput.value = slug;
  });
  
  // Opcional: Permitir edición manual del slug pero manteniendo formato válido
  slugInput.addEventListener('input', function() {
    let slug = slugInput.value.toLowerCase();
    slug = slug.replace(/[^\w-]/g, ''); // Solo permitir letras, números y guiones
    slugInput.value = slug;
  });
});
</script>
@endsection

  