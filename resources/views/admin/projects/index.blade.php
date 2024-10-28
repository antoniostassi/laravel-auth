@extends('layouts.app')

@section('main-content')

<table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Date of Creation</th>
        <th scope="col">Endline</th>
        <th scope="col">Tag</th>
        <th scope="col">Price</th>
        <th scope="col">Completed</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <th scope="row">{{$project->id}}</th>
            <td>{{$project->name}}</td>
            <td>{{$project->description}}</td>
            <td>{{$project->creation_date}}</td>
            <td>{{$project->expiring_date}}</td>
            <td>{{$project->label_tag}}</td>
            <td>{{$project->price}}</td>
            <td>{{$project->completed}}</td>
            <td><a class="btn btn-primary" href="{{route('admin.projects.show', $project->id)}}">Visualizza</a></td>
        </tr>
        @endforeach
      
    </tbody>
  </table>

@endsection

<style>
    tr:hover {
        cursor:pointer;
    }
</style>