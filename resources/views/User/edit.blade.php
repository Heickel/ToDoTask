@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit User Data
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
      <form method="post" action="{{ route('users.update', $user->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Name: </label>
              <input type="text" class="form-control" name="name" value="{{ $user->name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Email: </label>
              <input type="email" class="form-control" name="email" value="{{ $user->email }}"/>
          </div>
          <div class="form-group">
            <label for="cases">Password :</label>
            <input type="password" class="form-control" name="password" value="{{ $user->password }}"/>
        </div>
          <button type="submit" class="btn btn-primary m-3">Update Data</button>
      </form>
  </div>
</div>
@endsection
