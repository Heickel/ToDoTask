@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Project Data
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

      <form method="post" action="{{ route('projects.update',$project->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Project title:</label>
              <input type="text" class="form-control" name="title" value="{{ $project->title }}"/>
          </div>

          <div class="form-group">
              <label for="cases">Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $project->description }}"/>
          </div>


          <button type="submit" class="btn btn-primary">Update Data</button>

      </form>
  </div>
</div>
@endsection
