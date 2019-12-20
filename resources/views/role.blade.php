@extends('layout')

@section('content')
<h2>Roles</h2>
<div class="container">  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="role in roles">
        <td>@{{role.name}}</a></td>
        <td>@{{role.description}}</td>
        <td>@{{role.created_at}}</td>
      </tr>
    </tbody>
  </table>
</div>


<button><a href ="{{ route('roles.create') }}">Create Role</a></button>
@endsection