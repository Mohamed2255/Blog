@extends('layouts.app')
@section('content')
    <div class="card">
        <h5 class="card-header">
            Post Info
        </h5>
        <div class="card-body">
        <h5 class="card-id"><b>ID:-</b> {{$post->id}}</h5>
        <h5 class="card-title"><b>Title:-</b> {{$post->title}}</h5>
        <h5 class="card-title"><b>Description:-</b> {{$post->description}}</h5>
        </div>
      </div>
@endsection