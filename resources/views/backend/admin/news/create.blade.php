@extends('backend/layout/layout')
@section('content')

<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">
                    <div class="service-content">

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}

                            <div class="row">
                                <div class="box box-warning">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Add new post</h3>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    Title
                                                    <input type="text" name="title" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    Content
                                                    <textarea  rows="5" name="content" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    Created By
                                                    <input type="text" name="excerpt" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control">

                                                </div>

                                                <div>

                                                    <div class="box-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection