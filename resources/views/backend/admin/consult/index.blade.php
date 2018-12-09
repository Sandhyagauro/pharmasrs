@extends('backend/layout/layout')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">

            <!--            <a href="{{route('post.create')}}" class="btn btn-success"><i class="fa fa-plus fa-md"-->
            <!--                                                                                 aria-hidden="true"></i> New</a>-->

            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
            @endif
            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>

                    <th>S.No.</th>
                    <th>User name</th>
                    <th>User email</th>
                    <th>Category Department</th>

                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($posts)>0)
                @foreach($posts as $index=>$post)
                <tr>
                    <td>{{++$index}}.</td>
                    <td>
                       <a href="{{route('consult.show',$post->id)}}"> {{$post->name}}</a>
                    </td>
                    <td>
                        {{$post->email}}
                    </td>
                    <td>
                        {{$post->title}}
                    </td>

<!--                    <td>-->
<!--                        @if($post->image->count() > 0)-->
<!--                        @foreach($post->image as $img)-->
<!--                     <img src="{{asset($img->file_data)}}"   style="height: 80px; width: 80px">-->
<!--                        @endforeach-->
<!--                        @endif-->
<!--                    </td>-->
                    <td>
                        <a href="{{url('admin/consult/reply',$post->user_id)}}" class='btn btn-primary btn-sm'><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>Reply</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6">No Posts Found</td>
                </tr>
                @endif

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>


@endsection

