@extends('backend/layout/layout')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">

            <a href="{{route('package.create')}}" class="btn btn-success"><i class="fa fa-plus fa-md"
                                                                                 aria-hidden="true"></i> New</a>

            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
            @endif
            <table class="table table-responsive-sm table-hover table-outline mb-0" id="myTable">
                <thead class="thead-light">
                <tr>

                    <th>S.No.</th>
                    <th>Amount</th>
                    <th >Duration</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($posts)>0)
                @foreach($posts as $index=>$post)
                <tr>
                    <td>{{++$index}}.</td>
                    <td >
                        Rs.{{$post->amount}}
                    </td>
                    <td >
                        {{$post->duration}}
                    </td>

                    <td style="width: 150px">
                        <a href="{{route('package.edit',$post->id)}}" class='btn btn-primary btn-sm'><i
                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href="{{route('package.destroy',$post->id)}}" class="btn btn-danger btn-sm">

                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
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

