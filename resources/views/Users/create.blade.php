@extends('layout')

@section('title','Add User')


@section('content')
   <h1>Add new User</h1>

    <form method="POST" acction="{{ route('users.store') }}"> 
   @csrf
    <label>
      Name
      <input type="text" name="name"><br>
    <label>  
    <label>
      Email Address
      <input type="text" name="email">  <br>
    <label>
    <label>
      Role
      <input type="text" name="Role">  <br>
    <label>
        
<button>Save</button>
  </form> 
  
@endsection