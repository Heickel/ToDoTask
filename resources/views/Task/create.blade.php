<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Task Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tasks.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="cases">User :</label>
                <select name="user_id" class="form-control">
                    <option disabled selected value> -- select a user -- </option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id}}">{{ $user->name}}</option>
                    @endforeach
                </select>
          </div>
          <div class="form-group">
            <label for="cases">Project :</label>
            <select name="project_id" class="form-control">
                <option disabled selected value> -- select a project -- </option>
                @foreach ($projects as $project)
                <option value="{{ $project->id}}">{{ $project->title}}</option>
                @endforeach
            </select>
      </div>
        </div>
        <div class="form-group">
            <label for="cases">Description :</label>
            <input type="text" class="form-control mr-3" name="description"/>
        </div>
        <div class="form-group">
            <label for="cases">Status :</label>
            <select name="status" class="form-control">
                <option value="todo">To Do</option>
                <option value="doing">Doing</option>
                <option value="done">Done</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cases">Deadline :</label>
            <input type="date" class="form-control" name="deadline"/>
        </div>
          <button type="submit" class="btn btn-primary m-3">Add Task</button>
      </form>
  </div>
</div>
@endsection
