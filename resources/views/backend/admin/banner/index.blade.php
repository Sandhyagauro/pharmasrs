@extends('backend/layout/layout')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <a href="{{url('admin/banner/create')}}" class="btn btn-success"><i class="fa fa-plus fa-md"
                                                                          aria-hidden="true"></i> New</a>

            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>

                    <th>S.No.</th>
                    <th>Title</th>
                    <th >Content</th>
                    <th>Excerpt</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($banners)>0)
                @foreach($banners as $index=>$banner)
                <tr>
                    <td>{{++$index}}.</td>
                    <td >
                        {{$banner->title}}
                    </td>
                    <td >
                        {{$banner->content}}
                    </td>
                    <td >
                        {{$banner->excerpt}}
                    </td>
                    <td >
                        {{$banner->title}}
                    </td>
                    <td >

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

