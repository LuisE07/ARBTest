@extends('layout') 

@section('title','Roles |' . $role->title)


@section('content')
<h1>{{ $role->title }}</h1>
@auth
<a href="{{ route('role.edit', $role) }}">Edit</a>

<form method="POST" action="{{ route('role.destroy',$role) }}">

@csrf @method('DELETE')
<button>Delete</button>

</form>
@endauth
<p>{{ $project->description }}</p>
<p>{{ $project->created_at->diffForHumans() }}</p>
@endsection