@extends('frontend/layout/layout')
@section('content')

    <div class="container">
        <div class="row">
            <section class="patient-dash">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-10 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                                <div class="list-group">
                                    <a href="#" class="list-group-item active user-profile-img text-center">
                                        @if (file_exists($user->image))
                                            <img src="{{asset($user->image)}}">
                                        @else
                                            <img src="{{url('img/authors/author.jpg')}}">
                                        @endif
                                        <h3>{{$user->name}}</h3>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <i class="fa fa-user"></i> Edit Profile
                                    </a>
                                    <!--                                <a href="#" class="list-group-item text-center">-->
                                    <!--                                    <i class="fa fa-user"></i> Profile-->
                                    <!--                                </a>-->

                                    <a href="#" class="list-group-item text-center">
                                        <i class="fa fa-alert"></i> Prescription
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                        <i class="fa fa-alert"></i> Change Password
                                    </a>

                                </div>
                                <a href="{{route('pharmacist.logout')}}" class="list-group-item text-center">
                                    <i class="fa fa-log"></i> Log Out

                                </a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">

                                <!-- dashboard section -->
                                <div class="bhoechie-tab-content active">
                                    @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{
                                    Session::get('message') }}</p>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="dash-box">
                                                <h4>Profile</h4>
                                                Name: {{$user->name}}<br><br>
                                                Email: {{$user->email}}<br><br>
                                                NPC Number: {{$user->nmc_number}}<br><br>
                                                Qualification: {{$user->qualification}}<br><br>
                                                Shop name: {{$user->shop_name}}<br><br>
                                                Shop Address: {{$user->shop_address}}<br><br>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="dash-box">
                                                <h4>License Image</h4>
                                                @if($user->license_front)

                                                    <img src="{{asset($user->license_front)}}"
                                                         style="width: 280px; height: 250px">
                                                @else
                                                    <img src="{{url('img/image-not-found.png')}}"
                                                         style="width: 280px; height: 250px">
                                                @endif


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="dash-box">
                                                <h4>Citizenship Image</h4>
                                                @if($user->citizenship_front)

                                                    <img src="{{asset($user->citizenship_front)}}"
                                                         style="width: 280px; height: 250px">
                                                @else
                                                    <img src="{{url('img/image-not-found.png')}}"
                                                         style="width: 280px; height: 250px">
                                                @endif



                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            {{--<div class="dash-box">--}}
                                                {{--<h4>Total attendence</h4>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                                <!-- edit profile section -->
                                <div class="bhoechie-tab-content user-profile">

                                    <h3>Edit Your Information</h3>


                                    <form action="{{route('pharmacist.update_profile',$user->id)}}" method="POST"
                                          enctype="multipart/form-data">
                                        {!! csrf_field() !!}

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Your Name</label>
                                                <input type="text" class="form-control" value="{{$user->name}}"
                                                       name="name">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Contact Email</label>
                                                <input type="email" class="form-control" value="{{$user->email}}"
                                                       name="email" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" value="{{$user->phone}}"
                                                       name="phone">
                                            </div>
                                            <div class="col-md-6">
                                                <label>NPC number</label>
                                                <input type="number" class="form-control" value="{{$user->nmc_number}}"
                                                       name="nmc_number" required>
                                                <!--                                        <select id="country2" name ="country" class="form-control"></select>-->
                                            </div>
                                            <div class="col-md-6">
                                                <label>Qualification</label>
                                                <input type="text" class="form-control" value="{{$user->qualification}}"
                                                       name="qualification">
                                            </div>
                                            <div class="col-md-6">
                                                <label>University / Board</label>
                                                <input type="text" class="form-control" value="{{$user->education}}"
                                                       name="education">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Shop name</label>
                                                <input type="text" class="form-control" value="{{$user->shop_name}}"
                                                       name="shop_name">
                                            </div>

                                            <div class="col-md-6">
                                                <label>Shop address</label>
                                                <input type="text" class="form-control" value="{{$user->shop_address}}"
                                                       name="shop_address">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Profile image</label><br>
                                                <img src="{{asset($user->image)}}" style="width: 100px; height: 100px">
                                                Change profile image <br>
                                                <input type="file" name="image">
                                            </div>

                                        </div>
                                        <div class="col-md-3 nopadding">
                                            <button type="submit" class="btn btn-danger update-profile-btn">Update
                                                Profile
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- hotel search -->
                                <div class="bhoechie-tab-content">
                                    <center>
                                        <h3> Your Prescriptions</h3>
                                        @foreach($prescriptions as $prescription)
                                            @if($prescription->image->count() > 0)
                                                @foreach($prescription->image as $img)
                                                    <td>
                                                        <img src="{{asset($img->file_data)}}" style="width: 100px;height: 100px">
                                                    </td>
                                                @endforeach

                                            @else

                                            @endif
                                        @endforeach

                                        {{--@foreach($prescriptions as $prescription)--}}
                                            {{--@if($prescription->image->count() > 0)--}}
                                                {{--@foreach($prescription->image as $img)--}}
                                                    {{--<td>--}}
                                                        {{--<img src="{{asset($img->file_data)}}"--}}
                                                             {{--style="width: 100px;height: 100px">--}}
                                                    {{--</td>--}}
                                                {{--@endforeach--}}
                                            {{--@endif--}}
                                        {{--@endforeach--}}


                                    </center>
                                </div>

                                <div class="bhoechie-tab-content user-profile">

                                    <h3>Change Password</h3>

                                    <form action="{{route('user.changePassword',$user->user_id)}}" method="POST">
                                        {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" value="{{$user->email}}"
                                                       name="email" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Current Password</label>
                                                <input type="text" class="form-control" value=""
                                                       name="currentPassword">
                                            </div>
                                            <div class="col-md-6">
                                                <label>New Password</label>
                                                <input type="text" class="form-control" value=""
                                                       name="newPassword">
                                            </div>


                                        </div>
                                        <div class="col-md-3 nopadding">
                                            <button type="submit" class="btn btn-danger update-profile-btn">Update
                                                Password
                                            </button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <br>
    <br>
@endsection