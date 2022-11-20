@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
    <div class="panel panel-default">
        <div class="panel-heading">
            create a new post
        </div>
        <div class="panel-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" id="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Store post</button>

                </div>
            </form>
        </div>

    </div>

@stop