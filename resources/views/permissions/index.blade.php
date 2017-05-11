@extends('admin.master')
        @section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Permission Management</h2>
            </div>
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('backend.permissions.create') }}"> Create New Permission</a>

            </div>
        </div>
    </div>


    <!-- will be used to show any messages -->
    @if (Session::has('messages'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Name</td>
            <td>Display Name</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($permissions as $key => $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->display_name }}</td>
                <td>{{ $value->description }}</td>
                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    <a class="btn btn-info" href="{{ route('backend.permissions.show',$value->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('backend.permissions.edit',$value->id) }}">Edit</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['backend.permissions.destroy', $value->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
@endsection