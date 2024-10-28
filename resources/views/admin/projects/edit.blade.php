@extends('layouts.app')

@section('main-content')

<form action="{{route('admin.posts.update'), $project->id}}" method="POST">
    @csrf
    @method('PUT')

    
</form>

@endsection