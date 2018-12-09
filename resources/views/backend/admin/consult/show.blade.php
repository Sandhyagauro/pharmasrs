@extends('backend/layout/layout')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">Detail
                <small>informations</small>
            </div>
            <div class="card-body">
                <div class="row bd-example2">
                    <div class="col-2">
                        <div class="list-group" id="list-example">
                            <a class="list-group-item list-group-item-action " href="{{$post->id}}#list-item-1">Name</a>
                            <a class="list-group-item list-group-item-action" href="{{$post->id}}#list-item-2">Email</a>
                            <a class="list-group-item list-group-item-action" href="{{$post->id}}#list-item-3">Category</a>
                            <a class="list-group-item list-group-item-action" href="{{$post->id}}#list-item-4">Patient Type</a>
                            <a class="list-group-item list-group-item-action" href="{{$post->id}}#list-item-5">Patient Query</a>
                            <a class="list-group-item list-group-item-action" href="{{$post->id}}#list-item-6">Prescriptions</a>
                           <br> <a class=" btn btn-block btn-primary active " href="{{url('admin/consult')}}">Back</a>

                        </div>
                    </div>
                    <div class="col-8">
                        <div id="spy-example2" data-spy="scroll" data-target="#list-example" data-offset="0" style="height: 600px; overflow: auto">
                            <h4 id="list-item-1">Name</h4>
                            <p>
                                - {{$post->name}}
                            </p>
                            <h4 id="list-item-2">Email</h4>
                            <p>
                               - {{$post->email}}
                            </p>
                            <h4 id="list-item-3">Category Department</h4>
                            <p>
                               - {{$post->title}}
                            </p>
                            <h4 id="list-item-4">Patient type</h4>
                            <p>
                               - {{$post->patient}}
                            </p>
                            <h4 id="list-item-5">Patient Query</h4>
                            <p>
                              - {{$post->patient_query}}
                            </p>
                            <h4 id="list-item-6">Prescriptions</h4>
                            @if($post->image->count() > 0)
                            @foreach($post->image as $img)
                            <p>

                                <img src="{{asset($img->file_data)}}" style="height: 650px; width: 650px"  >

                            </p><br>
                            @endforeach
                            @else
                            Sorry!! No prescription found
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

