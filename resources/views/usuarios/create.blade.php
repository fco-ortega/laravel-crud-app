@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Crear o Editar Usuario</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('usuarios.store') }}">
          @csrf
          <div class="form-group">    
              <label for="rut">Rut:</label>
              <input type="text" class="form-control" name="rut"/>
          </div>

          <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>

          <div class="form-group">
              <label for="apellido">Apellido:</label>
              <input type="text" class="form-control" name="apellido"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="fecha_nac">Fecha de nacimiento:</label>
              <input type="text" class="form-control" name="fecha_nac"/>
          </div>
          <div class="form-group">
              <label for="password">Job Title:</label>
              <input type="text" class="form-control" name="password"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Guardar</button>
      </form>
  </div>
</div>
</div>
@endsection
