@extends('admin.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Category</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('backend/categories') }}">View All Categories</a></li>
            <li><a href="{{ URL::to('backend/categories/create') }}">Create a Categories</a>
        </ul>
    </nav>


    <!-- if there are creation errors, they will show here -->
    {!!  Form::model($category, array('route' => array('backend.categories.update', $category->id), 'method' => 'PUT'))!!}

    <div class="form-group">
        {!! Form::label('title', 'Name')  !!}
        {!! Form::text('title', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <strong>Description:</strong>
        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
    </div>
    {!! Form::submit('Update the Category!', array('class' => 'btn btn-primary'))!!}


    {!! Form::close() !!}

</div>
</body>
</html>

@endsection