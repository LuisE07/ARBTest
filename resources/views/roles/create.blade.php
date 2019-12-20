@extends('layout')

@section('title','Create Role')


@section('content')
   <h1>Create new Role</h1>

    <form method="POST" acction="{{ route('roles.store') }}"> 
   @csrf
    <label>
      Display Name
      <input type="text" name="name"><br>
    <label>  
    <label>
      Description
      <input type="text" name="description">  <br>
    <label>
<button>Save</button>
  </form> 
  
@endsection