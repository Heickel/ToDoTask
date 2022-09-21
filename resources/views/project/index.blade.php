<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Description</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->title}}</td>
            <td>{{$project->description}}</td>
            <td><a href="{{ route('projects.edit', $project->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('projects.destroy', $project->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td>
                <form action="{{ route('tasks.create', $project->title)}}" method="get">
                    @csrf

                    <button class="btn btn-primary" type="submit">Add Task</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
  </table>


  <div class="row">

    <div class="col-md-8">
        <form action="{{ route('tasks.create')}}" method="get">
            @csrf

            <button class="btn btn-primary" type="submit">Add Task</button>
        </form>
    </div>

    <div class="col-md-3">
        <form action="{{ route('projects.create')}}" method="get">
            @csrf
            <button class="btn btn-primary mr-5" type="submit">Add Project</button>
        </form>
    </div>
  </div>
</div>
@endsection
