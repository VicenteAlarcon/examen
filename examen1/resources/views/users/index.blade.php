@extends('layouts.layout')
@section('contenido')
<h1>Bienvenidos a mi web</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Id tipo</th>
      <th scope="col">Tipo</th>
      <th scope="col">Color tipo</th>
      <th scope="col" colspan="3">Modelo tipo</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->type->id}}</td>
      <td>{{$user->type->name}}</td>
      <td>{{$user->type->colour}}</td>
      <td>{{$user->type->model}}</td>
      @if($user->type->name == 'Administrador')
      <td> <a href="#" class="btn btn-secondary">Borrar Proyectos</a></td>
      <td> <a href="#" class="btn btn-secondary">Borrar Usuarios</a></td>
      @endif
</tr>
    @endforeach
  </tbody>
</table>

@endsection