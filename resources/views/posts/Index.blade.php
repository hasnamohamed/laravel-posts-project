@extends('layouts.app')
@section('mysection')
<a href="{{route('posts.create')}}"><button type="button" class="btn btn-success mb-2">Create Post</button></a>
 <table class="table ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created By</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->user? $post->user->name : "User Not Found"}}</td>
      <td>{{$post->created_at->format('y-m-d')}}</td>
      <td>
      <a href="{{route('posts.show', ['post' => $post->id] )}}" class="btn btn-info">View</a>
        {{-- <a href="/posts/{{$post['id']}}" class="btn btn-info">View</a> --}}
      <a href="{{route('posts.edit', ['post' => $post->id] )}}" class="btn btn-primary">Edit</a>
      <form style="display:inline;" method="POST" action="{{route('posts.destroy',['post'=>$post->id])}}">
       @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>
    </td>
      </tr>
      @endforeach
  </tbody>
</table>
@endsection
