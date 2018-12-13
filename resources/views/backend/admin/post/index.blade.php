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
            <table class="table table-responsive-sm table-hover table-outline mb-0" id="myTable">
                <thead class="thead-light">
                <tr>

                    <th>S.No.</th>
                    <th>Title</th>
                    <th >Content</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($posts)>0)
                @foreach($posts as $index=>$post)
                <tr>
                    <td>{{++$index}}.</td>
                    <td >
                        {{$post->title}}
                    </td>
                    <td >
                        {{$post->content}}
                    </td>

                    @if($post->image->count() > 0)
                    @foreach($post->image as $image)
                    <td>
                       <img src="{{asset($image->file_data)}}" style="width: 80px; height: 80px;"/>
                    </td>
                    @endforeach
                    @else
                    <td>---</td>
                    @endif

<td>
    {{$post->slug}}
</td>
                    <td style="width: 150px">
                        <a href="{{route('post.edit',$post->id)}}" class='btn btn-primary btn-sm'><i
                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
<!--                        <a href="{{route('post.destroy',$post->id)}}" class="btn btn-danger btn-sm">-->
<!---->
<!--                            <i class="fa fa-trash-o" aria-hidden="true"></i>-->
<!--                        </a>-->
                    </td>


                </tr>
                @endforeach
                @else
                <tr><td colspan="6">No Posts Found</td></tr>
                @endif

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>


@endsection

