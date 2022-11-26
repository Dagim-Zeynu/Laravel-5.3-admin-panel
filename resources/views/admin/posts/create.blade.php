@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')
    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new post
        </div>
        <div class="panel-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="catagory">Select a Catagory</label>
                    <select name="catagory_id" id="catagory" class="form-control">
                    @foreach($catagories as $catagory)
                        <option value="{{ $catagory->id }}">{{ $catagory->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tag">Select tag</label>
                    @foreach($tags as $tag)
                    <div class="checkbox">
                        <label for=""><input type="checkbox" name="tags[]" id="tag" value="{{ $tag->id }}">{{ $tag->tag }}</label>
                    </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@stop
@section('styles')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@stop
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>
@stop