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
@foreach ( $data as $ciudad)
        <tr>
          <td>{{ $ciudad->nombre }}</td>
          <td>{{ $ciudad->estado }}</td>
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
            <h5 class="modal-title">Nuevo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form id="categoria-form" action="{{ route('ciudades.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Bogota" id="nombre">
              </div>

            
            <div class="mb-3">
                <label class="form-label col-lg-6">Selecciona el estado:</label>
                <select class="form-select" id="estado" name="estado">
                  <option value="1" selected>Activo</option>
                  <option value="2">Inactivo</option>
                </select>

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



  
