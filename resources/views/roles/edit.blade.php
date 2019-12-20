@extends('layout')

@section('title','Create Role')


@section('content')
   <h1>Update Role</h1>

    <form method="POST" acction="{{ route('roles.store') }}"> 
   @csrf
    <label>
      Display Name
      <input type="text" name="name" value="{{ $project->name }}"><br>
    <label>  
    <label>
      Description
      <input type="text" name="description"  value="{{ $project->name }}">  <br>
    <label>
<button>Save</button>
  </form> 
  
@endsection