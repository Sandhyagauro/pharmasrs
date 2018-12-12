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
                        <form action="{{route('seo.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input name="_method" type="hidden" value="PUT">

                            <div class="row">
                                <div class="box box-warning">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Edit seo</h3>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    Title
                                                    <input type="text" value="{{$post->title}}" name="title"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    Description
                                                    <textarea rows="5" name="description" class="form-control">{{$post->description}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    Keyword
                                                    <input type="text" value="{{$post->keyword}}" name="keyword"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    Url
                                                    <input type="text" value="{{$post->url}}" name="url"
                                                           class="form-control">
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