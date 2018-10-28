@extends('backend/layout/layout')
@section('content')

<div class="col-md-6">
    <div class="card">
        <div class="card-body">
		<div class="box-header">
			<h3>Create new Role</h3>
		</div>
		<div class="box-body">
			<form action="{{route('admin.roles.store')}}" method = "post">
				{!! csrf_field() !!}
				<div class="form-group">
				<label for=""></label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name">
				</div>
				<div class="box-footer">
					<button class = 'btn btn-primary' type = "submit">Create</button>
				</div>
			</form>
		</div>
</div>
        </div>
    </div>
</div>
@endsection