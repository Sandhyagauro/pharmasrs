@extends('frontend/layout/layout')
@section('content')
<div role="main" class="main">

<section class="page-header parallax page-header-text-light overlay overlay-color-primary overlay-show overlay-op-9 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{url('img/medical/carousel/banner2.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-left">
                <h1 class="font-weight-bold">News And Articles</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            @foreach($news as $news)

            <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 pb-2">
                <a href="{{url('/blog-detail')}}">
                    @foreach($news->image as $image)
                    <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': '{{$image->file_data}}'}">
                        <div class="card-body p-4">
                            <h3 class="font-weight-bold text-4 mb-1">{{$news->title}}</h3>
                            <p>
                                <i class="far fa-clock mt-1 text-color-primary"></i>
                                <time class="font-tertiary text-1" datetime="2018-01-16">{{$news->created_at->format('j F Y')}}</time>
                            </p>
                            <p>{!! html_entity_decode(str_limit($news->content,20)) !!}</p>
                            <p class="text-color-dark font-weight-semibold mb-0">
<!--                                <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />-->
                                {{$news->excerpt}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </a>
            </div>
            @endforeach

        </div>
        <hr class="mt-5 mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto mb-3 mb-sm-0">
                <span>Showing 1-9 of 60 results</span>
            </div>
            <div class="col-auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link prev" href="#" aria-label="Previous">
                                <span><i class="fas fa-angle-left" aria-label="Previous"></i></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link next" href="#" aria-label="Next">
                                <span><i class="fas fa-angle-right" aria-label="Next"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

</div>
@endsection