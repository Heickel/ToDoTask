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
          <td>User</td>
          <td>Project</td>
          <td>Description</td>
          <td>Status</td>
          <td>Deadline</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->title}}</td>
            <td>{{$task->user->name}}</td>
            <td>{{$task->project->title}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->status}}</td>
            <td>{{$task->deadline}}</td>
            <td><a href="{{ route('tasks.edit', $task->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <form action="{{ route('tasks.create')}}" method="get">
    @csrf
    <button class="btn btn-primary" type="submit">Add Task</button>
  </form>
<div>
@endsection
