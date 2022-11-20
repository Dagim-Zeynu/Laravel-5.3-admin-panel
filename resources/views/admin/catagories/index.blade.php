@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
<div class="panel panel-default">
    <div class="panel-body">
    <table class="table table-hover">
    <thead>
        <th>
            Catagory name
        </th>
        <th>
            Editing
        </th>
        <th>
            Deleting
        </th>
    </thead>
    <tbody>
        @foreach ($catagories as $catagory)
        <tr>
            <td>
                {{ $catagory->name }}
            </td>
            <td>
                <a href="{{ route('catagory.edit', ['id'=>$catagory->id]) }}" class="btn btn-xsbtn-info">
                    Edit
                </a>
            </td>
            <td>
                <a href="{{ route('catagory.delete', ['id'=>$catagory->id]) }}" class="btn btn-xsbtn-info">
                    Delete
                </a>
            </td>

        </tr>
        @endforeach

    </tbody>

</table>

    </div>
</div>
@stop