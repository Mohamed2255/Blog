@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('posts.update',$post->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input  value="{{$post->title}}" name="title" type="text" class="form-control"  >
    </div>
    <div class="form-group">
      <label>Description</label>
    <textarea  name="description" class=" form-control">{{$post->description}}</textarea>
    </div>
    <div class="form-group">
    <label>User</label>
    <select name="user_id" class=" form-control" >
      @foreach ($users as $user)       
    <option value="{{$user->id}}" @if($post->user_id==$user->id)selected @endif>{{$user->name}}</option>
      @endforeach
    </select>
      </div>
    <button type="Submit" class="btn btn-primary">Update Post</button>
  </form>

@endsection