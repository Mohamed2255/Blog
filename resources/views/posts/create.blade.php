@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input name="title" type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea name="description" class=" form-control"></textarea>
    </div>
    <div class="form-group">
      <label>User</label>
  <select name="user_id" class=" form-control" >
    @foreach ($users as $user)       
  <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
  </select>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>

@endsection