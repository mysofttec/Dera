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
            <li><a href="{{ URL::to('backend/permissions') }}">View All Permission</a></li>
            <li><a href="{{ URL::to('backend/permissions/create') }}">Create a Permission</a>
        </ul>
    </nav>
    <div class="jumbotron text-center">

        <p>
            <strong>Name:</strong> {{ $permission->name }}<br>
            <strong>Display Name:</strong> {{ $permission->display_name }}<br>
            <strong>Description:</strong> {{ $permission->description }}
        </p>
    </div>

</div>
</body>
</html>

@endsection