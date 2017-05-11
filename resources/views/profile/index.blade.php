@extends('site.master')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
         xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/uploads/avatars/{{@$user->avatar}}" style="width:150px; height: 150px;float: left;border-radius: 50%;margin-right: 25px">
                <h2>{{$user->name}}'s profile</h2>
                <p>Update profile photo</p>
                <form action="/profile" method="post" enctype="multipart/form-data">
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>

            </div>
        </div>
    </div>
    <div class="container" style="position: inherit; font-family: 'Arial Black'; float: inherit">

    <h3>Name:</h3><h4 >{{$user->name}}</h4></br>
    <h3>User Name:</h3><h4>{{$user->username}}</h4></br>
    <h3>Email:</h3><h4>{{$user->email}}</h4></br>
    <h3>Bio</h3><h4>{{$user->bio}}</h4></br>
    <h3>Company Name</h3><h4>{{$user->CompanyName}}</h4></br>
    <h3>Role: </h3> <h4></br>
        @if(!empty($user->roles))
            @foreach($user->roles as $v)
                <label class="label label-success">{{ $v->display_name }}</label>
            @endforeach
        @endif
    </h4>

    </div>





@endsection
