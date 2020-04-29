<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $postsfromdb=Post::all();
        return view('posts.index',['posts'=>$postsfromdb]);
    }
    public function show(Post $post){
        return view('posts.show',['post'=>$post]);
    }
    public function create(){
        $users=User::all();
        return view('posts.create',['users'=>$users]);
    }
    public function store(){
        $title=request()->title;
        $description=request()->description;
        $user_id=request()->user_id;
        $post=new Post;
        $post->title=$title;
        $post->description=$description;
        $post->user_id=$user_id;
        $post->save();
        return redirect()->route('posts.index');
    }
    public function edit(Post $post){
        $users=User::all();
        return view('posts.edit',['post'=>$post],['users'=>$users]);

    }
    public function update($post){
        $newtitle=request()->title;
        $newdescription=request()->description;
        $newuser_id=request()->user_id;
        $post=Post::findorfail($post);
        $post->title=$newtitle;
        $post->description=$newdescription;
        $post->user_id=$newuser_id;
        $post->save();
        return redirect()->route('posts.index');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

    }


