@extends('admin.master')
@section('content')
<html>
<head>
    <title>SSM</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('backend/categories') }}">View All Categories</a></li>
            <li><a href="{{ URL::to('backend/categories/create') }}">Create a Category</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">

        <p>
            <strong>Tilte:</strong> {{ $category->title }}<br>
            <strong>Description:</strong> {{ $category->description }}
        </p>
    </div>

</div>
</body>
</html>

@endsection