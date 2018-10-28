@extends('backend/layout/layout')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <a href="{{url('/users/create')}}" class="btn btn-success"><i class="fa fa-plus fa-md"
                                                                          aria-hidden="true"></i> New</a>

            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>
                    <th class="text-center">
                        <i class="icon-people"></i>
                    </th>
                    <th>Name</th>
                    <th class="text-center">Email</th>
                    <th>Roles</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="text-center">
                        <div class="avatar">
                            <img class="img-avatar" src="img/avatars/1.jpg" alt="a">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </td>
                    <td>
                        <div>{{$user->name}}</div>
                        <div class="small text-muted">
                            Registered: {{$user->created_at->format('Y/m/d')}}
                        </div>
                    </td>
                    <td class="text-center">
                        {{$user->email}}
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                @foreach($user->roles as $role)
                                <strong>{{$role->name}}</strong>
                                @endforeach
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{url('admin/users/edit')}}/{{$user->id}}" class='btn btn-primary btn-sm'><i
                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href="{{url('admin/users/delete')}}/{{$user->id}}" class="btn btn-danger btn-sm"><i
                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>


@endsection

