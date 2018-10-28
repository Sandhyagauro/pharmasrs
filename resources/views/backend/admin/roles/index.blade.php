@extends('backend/layout/layout')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="box-header">
                <h3>All Roles</h3>
            </div>
            <a href="{{url('admin/roles/create')}}" class="btn btn-success"><i class="fa fa-plus fa-md"  aria-hidden="true"></i> New</a>
            <div class="box-body">
                <table class="table table-striped">
                    <head>
                        <th>Role</th>
                        <th>Actions</th>
                    </head>
                    <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>
                            <a href="{{route('admin.roles.edit',$role->id)}}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

<!--                            <a href="{{url('admin/roles/destroy')}}/{{$role->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>-->

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
