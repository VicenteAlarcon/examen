@extends('layouts.layout')
@section('contenido')
<form>
<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>
  @foreach($users as $user)
  @if($user->type->name !== 'Empleado')
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="type_id">
    <option selected="">Open this select menu</option>
    <option value="1">Administrador</option>
    <option value="2">Gestor</option>
    <option value="3">Empleado</option>
  </select>
  @endif
  @endforeach
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

@endsection
