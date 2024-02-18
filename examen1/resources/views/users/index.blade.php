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
      @foreach($user->type_id as $data)
      <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->colour}}</td>
</tr>
  @endforeach
    </tr>
    @endforeach
  </tbody>
</table>

@endsection