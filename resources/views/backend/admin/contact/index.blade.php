@extends('backend/layout/layout')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">


            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
            @endif
            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>

                    <th>S.No.</th>
                    <th>Name</th>
                    <th >Mobile number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th >Message</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($posts)>0)
                @foreach($posts as $index=>$post)
                <tr>
                    <td>{{++$index}}.</td>
                    <td >
                        {{$post->name}}
                    </td>
                    <td >
                        {{$post->mobile}}
                    </td>

                    <td >
                        {{$post->address}}
                    </td>


                    <td >
                        {{$post->email}}
                    </td>
                                        <td>
                        {{$post->message}}
                    </td>


                    <td style="width: 150px">
                        <a href="{{route('contact.destroy',$post->id)}}" class="btn btn-danger btn-sm"><i
                                class="fa fa-trash-o" aria-hidden="true"></i></a>
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

