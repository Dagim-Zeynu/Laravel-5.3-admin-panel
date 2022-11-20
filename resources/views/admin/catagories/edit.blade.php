@extends('layouts.app')

@section('content')



@include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Update catagory: {{ $catagory->name}}
        </div>
        <div class="panel-body">
            <form action="{{ route('catagory.update', ['id' =>$catagory]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $catagory->name }}" id="title" class="form-control">
                </div>
               <div class="form-group text-center">
                <button class="btn btn-success" type="submit">update catagory</button>
               </div>
            </form>
        </div>

    </div>

@stop