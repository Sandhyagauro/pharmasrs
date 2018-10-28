@extends('backend/layout/layout')
@section('content')

<div class="col-md-12">
<div class="card">
<div class="card-body">
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
@endif
<div class="box-header">
    <h3>Edit User {{$user->first_name}} {{$user->last_name}}</h3>

</div>
<div class="box-body">
    <form action="{{url('users/update')}}" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="user_id" value="{{$user->id}}">

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password" required>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
</div>
    <div class="box-body">

    <div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3>{{$user->name}} Roles</h3>
            </div>
            <div class="box-body">
                <form action="{{route('admin.users.addRole',$user->id)}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="user_id" value="{{$user->id}}">

                    <div class="form-group">
                        <select name="role_name" id="" class="form-control">
                            @foreach($roles as $role)
                            <option value="{{$role}}">{{$role}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class='btn btn-primary'>Add role</button>
                    </div>
                </form>
                <table class='table'>
                    <thead>
                    <th>Role</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($userRoles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
<!--                        <td><a href="{{route('admin.users.revokeRole',[$user->id,$role->id])}}"-->
<!--                               class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>-->
<!--                        </td>-->
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>
</div></div></div></div>
@endsection
