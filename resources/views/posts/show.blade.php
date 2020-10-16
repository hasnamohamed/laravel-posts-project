@extends('layouts.app')
@section('mysection')
        <div class="card">
            <div class="card-header">
              Post Info
            </div>
            <div class="card-body">
                <h5 class="card-title"><b>ID:-</b> {{$post->id}}</h5>
                <h5 class="card-title"><b>Title:-</b> {{$post->title}}</h5>
                <!--post is the key of associative array in show method and it's value is $singlePost
                so singlepost is object has many things i need just the title so i write arrow title
                if Post is null i tell him give me null->id and it donsn't makesense so it will give error
                -->
                <h5 class="card-title"><b>Description:-</b> {{$post->description}}</h5>

            </div>
          </div>
          @endsection
