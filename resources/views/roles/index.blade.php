@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Role Management</h2>
            </div>
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('backend.roles.create') }}"> Create New Role</a>

            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Permissions</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->display_name }}</td>
                <td>{{ $role->description }}</td>
                <td>@if(!empty($role->permissions))
                        @foreach($role->permissions as $v)
                            <label class="label label-success">{{ $v->display_name }}</label>
                        @endforeach
                    @endif</td>
                <td>
                    <a class="btn btn-info" href="{{ route('backend.roles.show',$role->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('backend.roles.edit',$role->id) }}">Edit</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['backend.roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $roles->render() !!}
@endsection
