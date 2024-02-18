@extends('layouts.layout')
@section('contenido')
<h1>Bienvenidos a mi web</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo usuario</th>
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
</tr>
    @endforeach
  </tbody>
</table>

@endsection