@extends('layouts.app')

@section('content')
<div class="container">

                <div class="card-header">Posts</div>

                
                    <div class="card-body">
                    	@if(count($posts) > 0)
                        @foreach($posts as $post)

                            <div class="well">
                                <div class="gallery">
                                    
                                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                                    
                                    <div class="desc">
                                        <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{$posts->links()}}
                        @else
                            <p>No posts found</p>
                        @endif
                    </div>
            </div>
                
</div>
@endsection