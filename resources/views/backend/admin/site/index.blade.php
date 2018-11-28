@extends('backend/layout/layout')
@section('content')
<div class="col-sm-6">
    <div class="card">
        <div class="card-header">
            <strong>Site</strong>
            <small>Information</small>
        </div>
        <form action="{{route('site.update',$post->id)}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input name="_method" type="hidden" value="PUT">

            <div class="card-body">
                <div class="form-group">
                    <label>ADDRESS</label>
                    <input class="form-control" value="{{$post->address}}" name="address" type="text"
                           placeholder="Enter your Address">
                </div>
                <div class="form-group">
                    <label>EMAIL</label>
                    <input class="form-control" value="{{$post->email}}" name="email" type="email"
                           placeholder="Please enter your E mail">
                </div>

                <div class="row">
                    <div class="form-group col-sm-8">
                        <label>PHONE</label>
                        <input class="form-control" value="{{$post->phone}}" type="text" name="phone"
                               placeholder="Enter your Phone Number">
                    </div>

                </div>
                <!-- /.row-->
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>FACEBOOK LINK</label>
                        <input class="form-control" value="{{$post->facebook_link}}" name="facebook_link" type="text"
                               placeholder="Enter your Facebook Link">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>TWITTER LINK</label>
                        <input class="form-control" value="{{$post->twitter_link}}" name="twitter_link" type="text"
                               placeholder="Enter your Twitter Link">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Logo Image</label><br>
                        <div>
                        <img src="{{asset($post->logo)}}" style="width: 150px; height: 150px">
                        </div><br>
                       Change logo image<input type="file" name="image">
                    </div>
                </div>
                <button class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
</div>

@endsection

