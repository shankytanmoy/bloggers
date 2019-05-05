@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Posts</div>

                <div class="card-body">
                    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('title', 'Title')}}
                            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('body', 'Body')}}
                            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                        </div>
                        <div class="form-group">
                            {{Form::file('cover_image')}}
                        </div>
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection