@extends('layout')

@section('content')
<h2>Users</h2>
<div class="container">  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email Address</th>
        <th>Role</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="user in users">
        <td>@{{user.name}}</a></td>
        <td>@{{user.email}}</td>
        <td>>@{{user.role}}</td>
        <td>@{{user.created_at}}</td>
      </tr>
    </tbody>
  </table>
</div>


<button><a href ="{{ route('users.create') }}">Add User</a></button>
@endsection