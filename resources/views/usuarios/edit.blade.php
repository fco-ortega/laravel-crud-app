@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editar Usuario</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('usuarios.update', $usuario->id) }}" enctype="multipart/form-data">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="rut">Rut:</label>
                <input type="text" class="form-control" name="rut" value={{ $usuario->rut }} />
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value={{ $usuario->nombre }} />
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" name="apellido" value={{ $usuario->apellido }} />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $usuario->email }} />
            </div>
            <div class="form-group">
                <label for="fecha_nac">Fecha de Nacimiento:</label>
                <input type="text" class="form-control" name="fecha_nac" value={{ $usuario->fecha_nac }} />
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" id="password" value={{ $usuario->password }} />
              <input type="checkbox" onclick="showPass()"> Mostrar Password
            </div>
            <div class="form-group">
              <label for="imagen">Subir foto de perfil:</label>
              <input type="file" class="form-control" name="imagen" value={{ $usuario->imagen }} />
          </div> 
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
<script>
function showPass() {
  var pass = document.getElementById("password");
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
}
</script>
@endsection