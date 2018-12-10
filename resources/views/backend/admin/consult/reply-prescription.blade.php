@extends('backend/layout/layout')
@section('content')
<div class="col-sm-12 col-xl-6">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Reply
            <small>Prescription</small>
        </div>
        <div class="card-body">
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
            <div id="accordion" role="tablist">
                <form action="{{route('reply.prescription')}}" method="POST" >
                    {!! csrf_field() !!}

                    <input value="{{$post->id}}" type="hidden" name="counseling_info_id">
                    <input value="{{$post->user_id}}" type="hidden" name="reply_to">
                    <div class="card">
                        <div class="card-header" id="headingOne" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                   aria-controls="collapseOne">The medicine you are taking</a>
                            </h5>
                        </div>
                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <textarea name="medicine_name" rows="5" class=" form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                                   aria-controls="collapseTwo">
                                    What this medicine does to your body ?</a>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo"
                             data-parent="#accordion">
                            <div class="card-body">
                                <textarea name="medicine_cause" rows="5" class=" form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                                   aria-controls="collapseThree">How you should take this medication?</a>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree"
                             data-parent="#accordion">
                            <div class="card-body">
                                <textarea name="medicine_routine" rows="5" class=" form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false"
                                   aria-controls="collapseFour">Precautions to be taken</a>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingFour"
                             data-parent="#accordion">
                            <div class="card-body">
                                <textarea name="precaution" rows="5" class=" form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false"
                                   aria-controls="collapseFive">Food you should take/avoid</a>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseFive" role="tabpanel" aria-labelledby="headingFive"
                             data-parent="#accordion">
                            <div class="card-body">
                                <textarea name="diet" rows="5" class=" form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false"
                                   aria-controls="collapseSix">What if you miss the dose</a>
                            </h5>
                        </div>
                        <div class="collapse" id="collapseSix" role="tabpanel" aria-labelledby="headingSix"
                             data-parent="#accordion">
                            <div class="card-body">
                                <textarea name="if_dose_missed" rows="5" class=" form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" value="{{$post->category_department_id}}" name="category_department_id" >
                    </div>
                    <div class="form-group">
                        Keyword
                        <input class="form-control" name="keyword" required="">
                    </div>
                    <button class="btn btn-block btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection