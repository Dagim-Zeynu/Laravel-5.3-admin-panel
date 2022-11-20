@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
    <div class="panel panel-default">
        <div class="panel-heading">
            create a new catagory
        </div>
        <div class="panel-body">
            <form action="{{ route('catagory.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="title" class="form-control">
                </div>
               <div class="form-group text-center">
                <button class="btn btn-success" type="submit">store catagory</button>
               </div>
            </form>
        </div>

    </div>

@stop