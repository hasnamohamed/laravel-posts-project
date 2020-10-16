<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //app is the namespace of the model Post
use App\User; //app is the namespace of the model User

class PostController extends Controller
{
    public function Index(){

        $postsFromDB= Post::all();
        return view('posts.Index',['posts' => $postsFromDB]);// i give the view thw same name of the Method
    }
    public function show(Post $post){//it's better to name it as url parameter in Route i can make varisable because post was dYnamic in Route
    //   $singlePost=Post::findOrFail($post);//search with primary key or id
    return view('posts.show',['post' =>$post]);// i give the view thw same name of the Method
    //post is associative array key and it's value is the variable
    //so i write the view and open associative array and gives it key any key name and the value
// in view when i acess the data from ($post ->) the key of the associative array
// OrFail means the if i give $post null value it gives me a page say not found
}
public function create(){
    $users = User::all();
    return view('posts.create', ['users' => $users]);
}
public function store(Request $request){

    // $data=request()->all();
    // $title=request()->title; //seconed title is the name of the button in create view
    //request is asking to get the value of the thing that name -> after the arrow
    //i asking for the value of the button call title and desc
    // $description=request()->description;//second description is the same of title above
    $title = $request->title;
    $description = $request->description;
    $userid =$request-> user_id; //user id is the name of the input
    $post=post::create([
          'title' => $title,
          'description' => $description,
          'user_id' => $userid
     ]);// create new post and return object it takes parameters first is the KEY and it have the column name that i want to fill it in DB
        //seconed is the value and it's the value of the column that i want to fill it

    // $post =new post;
    // $post->title =$title;
    // $post->description=$description;
    // $post->save();


        return redirect(route('posts.index'));
     //return redirect()->route('posts.index');


}
public function edit(Post $post){
    $users = User::all();

   // $singlePost=Post::findOrFail($post);//search with primary key or id
    return view('posts.edit',['post' =>$post,'users'=>$users]);
    }
    public function update($post, Request $request){
        $singlePost=Post::findOrFail($post);//search with primary key or id
        $singlePost->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>$request->user_id
        ]);
        return redirect(route('posts.index'));

    }
    public function destroy($post){
        // Post::where('id',$post)->delete();
        $singlePost=Post::findOrFail($post);//search with primary key or id
        $singlePost->delete();
        return redirect(route('posts.index'));
    }

}

