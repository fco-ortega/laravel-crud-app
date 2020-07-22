@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="col-sm-12">
    <h1 class="display-3">Usuarios</h1>   
    <div>
    <a style="margin: 19px;" href="{{ route('usuarios.create')}}" class="btn btn-primary">Nuevo Usuario</a>
    </div>  
  <table class="table table-striped">
    <thead>
        <tr>
          <td>RUT</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Email</td>
          <td>Fecha de Nacimiento</td>
          <td>Password</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->rut}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->apellido}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->fecha_nac}}</td>
            <td>{{$usuario->password}}</td>
            <td>
                <a href="{{ route('usuarios.edit',$usuario->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('usuarios.destroy', $usuario->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
