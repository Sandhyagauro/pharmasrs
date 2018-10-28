@extends('backend.layout.layout')
@section('content')
    {!! HTML::script('ckeditor/ckeditor.js') !!}
    {!! HTML::style('dropzone/css/basic.css') !!}
    {!! HTML::style('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}


    {!! HTML::script('jasny-bootstrap/js/jasny-bootstrap.min.js') !!}

    <section class="content-header">
        <h1> Banner Images
            <small> | Add Banner Images</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang(). '/admin/banner') !!}"><i class="fa fa-desktop"></i> Slider Images</a></li>
            <li class="active">Add Banner Images</li>
        </ol>
    </section>
    <br>
    <br>
    <div class="container">
        <!-- Dropzone -->


        <br>
    {!! Form::open( array( 'route' => array( getLang() . '.admin.banner.update', $banner->id), 'method' => 'PATCH', 'files'=>true)) !!}
    <!-- Title -->
        <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}"
             data-provides="fileinput" style="display: block;">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                <img data-src="" {!! (($banner->file_name) ? "src='".url($banner->path)."'" : null) !!} alt="...">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail"
                 style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span
                                class="fileinput-exists">Change</span>
                        {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
                        @if ($errors->first('image')) <span
                                class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#"
                                                                                                            class="btn btn-default fileinput-exists"
                                                                                                            data-dismiss="fileinput">Remove</a>
                </div>
            </div>

            <br>


            <!-- Content -->
            <div class="control-group {!! $errors->has('content') ? 'has-error' : '' !!}">
                <label class="control-label" for="title">Description</label>

                <div class="controls">
                    {!! Form::textarea('description', $banner->description, array('class'=>'form-control', 'id' => 'description', 'placeholder'=>'description', 'value'=>Input::old('description'))) !!}
                    @if ($errors->first('content'))
                        <span class="help-block">{!! $errors->first('content') !!}</span>
                    @endif
                </div>
            </div>
            <br>

            <br>
            <!-- Form actions -->
            {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
            {!! Form::close() !!}

        </div>

        <script type="text/javascript">
            window.onload = function () {
                CKEDITOR.replace('description', {
                    "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
                });
            };
        </script>
@stop
