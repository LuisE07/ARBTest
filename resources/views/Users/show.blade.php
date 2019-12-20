@extends('layout') 

@section('title','Users |' . $role->title)


@section('content')
<h1>{{ $role->title }}</h1>
@auth
<a href="{{ route('user.edit', $role) }}">Edit</a>

<form method="POST" action="{{ route('user.destroy',$role) }}">

@csrf @method('DELETE')
<button>Delete</button>

</form>
@endauth
<p>{{ $project->description }}</p>
<p>{{ $project->created_at->diffForHumans() }}</p>
@endsection