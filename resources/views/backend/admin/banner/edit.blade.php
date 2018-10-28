@extends('backend/layout/layout')

@section('content')
<div class="row col-md-offset-1">

    <h2>Edit Banner Post</h2>
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
    {!! Form::open(['action'=> ['Admin\BannerController@update',$banner->id],'method'=>'PUT','files'=>true]) !!}
    {!! csrf_field() !!}


        <div class="box box-warning">
            <div class="box-header with-border">
                {{--<h3 class="box-title">Edit banner post</h3>--}}
                <!-- /.box-header -->

                        <div class="form-group">
                            {!!Form::label('title','Banner Title') !!}
                            {!!Form::text('title',$banner->title,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('content','Banner Content') !!}
                            {!!Form::textarea('content',$banner->content,['class'=>'form-control']) !!}
                        </div>


                        <div style="font-size: 20px;"><b>Use image of size 1840X585 pixels</b></div>

                        <div>
                        <div class="row cancel">
                            <div class="col-md-4">
                                {{--<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">--}}

                                {{--</div>--}}

                                {!! Form::file('image', array('class' => 'image')) !!}
                            </div>
                        </div>
                        <div class="box-footer">
                            {!!Form::submit('Submit',['class'=>'btn btn-primary'])!!}
                        </div>


            </div>
        </div>
    </div>
</div>

@endsection