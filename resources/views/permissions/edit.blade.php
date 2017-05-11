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

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('backend/permissions') }}">View All Permissions</a></li>
            <li><a href="{{ URL::to('backend/permissions/create') }}">Create a Permission</a>
        </ul>
    </nav>


    <!-- if there are creation errors, they will show here -->
    {!!  Form::model($permission, array('route' => array('backend.permissions.update', $permission->id), 'method' => 'PUT'))!!}

    <div class="form-group">
        {!! Form::label('name', 'Name')  !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('display_name', 'Display Name')  !!}
        {!! Form::text('display_name',  null, array('class' => 'form-control'))  !!}
    </div>

    <div class="form-group">
        <strong>Description:</strong>
        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
    </div>
    {!! Form::submit('Update the Permission!', array('class' => 'btn btn-primary'))!!}


    {!! Form::close() !!}

</div>
</body>
</html>

@endsection