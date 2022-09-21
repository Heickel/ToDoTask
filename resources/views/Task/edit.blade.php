@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Task Data
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
      <form method="post" action="{{ route('tasks.update', $task->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Task title:</label>
              <input type="text" class="form-control" name="title" value="{{ $task->title }}"/>
          </div>
          <div class="form-group">
              <label for="cases">User :</label>
              <select name="user_id" class="form-control" value="{{ $task->user }}">
                  <option disabled selected value> -- select a user -- </option>
                  @foreach ($user as $user)
                  <option value="{{ $user->id}}">{{ $user->name}}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="cases">Project :</label>
              <select name="project_id" class="form-control" value="{{ $task->project }}">
                  <option disabled selected value> -- select a project -- </option>
                  @foreach ($project as $project)
                  <option value="{{ $project->id}}">{{ $project->title}}</option>
                  @endforeach
              </select>
          </div>

          <div class="form-group">
              <label for="cases">Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $task->description }}"/>
          </div>

          <div class="form-group">
              <label for="cases">Status :</label>
              <select name="status" class="form-control" value="{{ $task->status }}"/>
                <option value="todo">To Do</option>
                <option value="doing">Doing</option>
                <option value="done">Done</option>
            </select>
          </div>

          <div class="form-group">
              <label for="cases">Deadline :</label>
              <input type="date" class="form-control" name="deadline" value="{{ $task->deadline }}"/>
          </div>

          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection
