@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                        <a href="/posts" class="btn btn-default">Go Back</a>
                        <h3>{{$post->title}}</h3>
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        <br><br>
                        <div>
                            {!!$post->body!!}
                        </div>
                        <hr>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <hr>
                        @if(!Auth::guest())
                            @if(Auth::user()->id == $post->user_id)
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            @endif
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection