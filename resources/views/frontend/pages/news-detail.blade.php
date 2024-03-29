@extends('frontend/layout/layout')
@section('content')
<div role="main" class="main">

<section class="page-header parallax page-header-text-light overlay overlay-color-primary overlay-show overlay-op-9 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{url('img/medical/carousel/banner2.jpg')}}">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-8 text-left">
               <!--  <span class="tob-sub-title text-color-primary d-block">OUR BLOG</span> -->
                <h1 class="font-weight-bold">News Description</h1>
<!--                 <p class="lead">Post content</p> -->
            </div>

        </div>
    </div>
</section>
<div class="container">
<div class="row">
<aside class="sidebar col-md-4 col-lg-3 order-2">
    <div class="accordion accordion-default accordion-toggle accordion-style-1 mb-5" role="tablist">
<!---->
<!--        <div class="card">-->
<!--            <div id="toggleSidebarSearch" class="accordion-body accordion-body-show-border-top collapse show" role="tabpanel" aria-labelledby="sidebarSearchForm">-->
<!--                <div class="card-body pt-4">-->
<!--                    <form id="sidebarSearchForm" class="sidebar-search" action="page-search-results.html" method="get">-->
<!--                        <div class="input-group">-->
<!--                            <input type="text" class="form-control line-height-1 bg-light-5" name="s" id="s" placeholder="Search..." required="">-->
<!--													<span class="input-group-btn">-->
<!--														<button class="btn btn-light" type="submit"><i class="fas fa-search text-color-primary"></i></button>-->
<!--													</span>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="card">
            <div class="card-header accordion-header" role="tab" id="popularPosts">
                <h3 class="text-3 mb-0">
                    <a href="#" data-toggle="collapse" data-target="#togglePopularPosts" aria-expanded="false" aria-controls="togglePopularPosts">POPULAR</a>
                </h3>
            </div>
            <div id="togglePopularPosts" class="accordion-body collapse show" aria-labelledby="popularPosts">
                <div class="card-body">



                    @foreach($news_lists as $list)
                    <a href="{{url('/news-and-articles',$post->slug)}}">
                        <article class="row align-items-center mb-3">
                            <div class="col-4 pr-0">
                                @foreach($list->image as $image)
                                <a href="{{url('/news-and-articles',$list->slug)}}">
                                    <img src="{{asset($image->file_data)}}" class="img-fluid hover-effect-2" alt=""/>
                                </a>
                                @endforeach
                            </div>
                            <div class="col-8">
                                <span class="text-color-primary">{{$list->updated_at->format('d/m/Y')}}</span>
                                <h4 class="text-2 mb-0">
                                    <a href="{{url('/news-and-articles',$list->slug)}}" class="text-1">
                                        {!! html_entity_decode(str_limit($list->content,20)) !!}
                                    </a>
                                </h4>
                            </div>
                        </article>
                    </a>
                    @endforeach





                </div>
            </div>
        </div>


    </div>

<!--    <div class="card bg-primary border-0 rounded">-->
<!--        <div class="card-body p-4 my-3">-->
<!--            <div class="icon-box icon-box-style-1 align-items-center mb-0">-->
<!--                <div class="icon-box-icon pr-2">-->
<!--                    <img width="60" src="img/icons/envelope.svg" alt="" data-icon data-plugin-options="{'color': '#FFF'}" />-->
<!--                </div>-->
<!--                <div class="icon-box-info">-->
<!--                    <div class="icon-box-info-title">-->
<!--                        <span class="icon-box-sub-title text-color-light">SUBSCRIBE TO OUR</span>-->
<!--                        <h4 class="text-color-light font-weight-bold line-height-1 mb-0">NEWSLETTER</h4>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <p class="text-color-light opacity-6 mb-3">Enter your email address to subscribe to my newsletter</p>-->
<!--            <form class="newsletter-form newsletter-form-error-pos-2 form-errors-light" action="php/newsletter-subscribe.php" method="post">-->
<!--                <div class="newsletter-form-success alert alert-success d-none">-->
<!--                    <strong>Success!</strong> You've been added to our email list.-->
<!--                </div>-->
<!--                <div class="newsletter-form-error alert alert-danger d-none">-->
<!--                    <strong>Error!</strong> There was an error to add your email.-->
<!--                </div>-->
<!---->
<!--                <div class="form-row">-->
<!--                    <div class="form-group col mb-0">-->
<!--                        <input type="email" class="newsletter-email form-control rounded-0 border-0 line-height-1" placeholder="Email address" aria-label="Email address" required>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-row">-->
<!--                    <div class="form-group col mb-0">-->
<!--                        <input type="submit" value="SUBSCRIBE" class="btn btn-quaternary btn-v-3 font-weight-semibold justify-content-center w-100 rounded-0">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
</aside>
<div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
<article class="blog-post mb-4">
    <div class="d-flex mb-3">
        <span class="post-date text-color-primary pr-3">{{$post->updated_at->format('d/m/Y')}}</span>
<!--        <span class="post-likes d-flex align-items-center border border-top-0 border-bottom-0 px-3"><i class="lnr lnr-heart text-3 mr-1" aria-label="5 users like this post"></i> 5</span>-->
<!--        <a href="#comments" data-hash data-hash-offset="100">-->
<!--            <span class="post-comments d-flex align-items-center px-3"><i class="lnr lnr-bubble text-3 mr-1" aria-label="3 users comment this post"></i> 3</span>-->
<!--        </a>-->
    </div>
    <p class="mb-4">

        @foreach($post->image as $image)
        <img src="{{asset($image->file_data)}}" class="img-fluid float-left max-width-320 pr-3" alt="" />
        @endforeach
        {!! html_entity_decode($post->content) !!}
    </p>

    <footer class="blog-post-footer border border-left-0 border-right-0 py-4 mt-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-sm-auto mb-3 mb-sm-0 mb-md-3 mb-lg-0">
<!--                <ul class="list-inline mb-0">-->
<!--                    <li class="list-inline-item"><a href="#" class="badge badge-light badge-sm badge-pill px-3 py-2">DESIGN</a></li>-->
<!--                    <li class="list-inline-item"><a href="#" class="badge badge-light badge-sm badge-pill px-3 py-2">DEV</a></li>-->
<!--                    <li class="list-inline-item"><a href="#" class="badge badge-light badge-sm badge-pill px-3 py-2">CODE</a></li>-->
<!--                </ul>-->
            </div>
<!--            <div class="col-12 col-sm-auto">-->
<!--                <div class="d-flex align-items-center">-->
<!--                    <span class="text-2">SHARE THIS POST</span>-->
<!--                    <ul class="social-icons social-icons-light social-icons-1 ml-3">-->
<!--                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>-->
<!--                        <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </footer>
</article>
<!--<div class="row">-->
<!--    <div class="col">-->
<!--        <span class="top-sub-title">ABOUT THE AUTHOR</span>-->
<!--        <div class="icon-box icon-box-style-1 align-items-center mt-3">-->
<!--            <div class="icon-box-icon">-->
<!--                <img src="img/authors/author-1.jpg" class="img-fluid rounded-circle mr-2" alt="" />-->
<!--            </div>-->
<!--            <div class="icon-box-info">-->
<!--                <div class="icon-box-info-title">-->
<!--                    <h4 class="font-weight-bold line-height-1 mb-1">John Doe</h4>-->
<!--                    <p class="text-1 mb-0">Vestibulum accumsan finibus eros sit amet egestas. Vestibulum at quam faucibus, sollicitudin in. </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<hr class="mt-4 mb-5">-->
<!--<div class="row">-->
<!--    <div class="col-12">-->
<!--        <h2 class="font-weight-bold text-3 mb-4">RELATED POSTS</h2>-->
<!--    </div>-->
<!--    <div class="col-lg-4 mb-4 mb-lg-0">-->
<!--        <a href="{{url('/blog-detail')}}">-->
<!--            <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': 'img/blog/posts/post-1-square.jpg'}">-->
<!--                <div class="card-body p-4">-->
<!--                    <h3 class="font-weight-bold text-4 mb-1">Amazing Space</h3>-->
<!--                    <p>-->
<!--                        <i class="far fa-clock mt-1 text-color-primary"></i>-->
<!--                        <time class="font-tertiary text-1" datetime="2018-01-16">Jan 17, 2018</time>-->
<!--                    </p>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                    <p class="text-color-dark font-weight-semibold mb-0">-->
<!--                        <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />-->
<!--                        by Bob Doe-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </a>-->
<!--    </div>-->
<!--    <div class="col-lg-4 mb-4 mb-lg-0">-->
<!--        <a href="{{url('/blog-detail')}}">-->
<!--            <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': 'img/blog/posts/post-2-square.jpg'}">-->
<!--                <div class="card-body p-4">-->
<!--                    <h3 class="font-weight-bold text-4 mb-1">Getting Ready</h3>-->
<!--                    <p>-->
<!--                        <i class="far fa-clock mt-1 text-color-primary"></i>-->
<!--                        <time class="font-tertiary text-1" datetime="2018-01-15">Jan 16, 2018</time>-->
<!--                    </p>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                    <p class="text-color-dark font-weight-semibold mb-0">-->
<!--                        <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />-->
<!--                        by John Doe-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </a>-->
<!--    </div>-->
<!--    <div class="col-lg-4 mb-4 mb-lg-0">-->
<!--        <a href="{{url('/blog-detail')}}">-->
<!--            <div class="card card-style-5 bg-light-5 rounded border-0 p-3" data-plugin-image-background data-plugin-options="{'imageUrl': 'img/blog/posts/post-3-square.jpg'}">-->
<!--                <div class="card-body p-4">-->
<!--                    <h3 class="font-weight-bold text-4 mb-1">Cool Hobbies</h3>-->
<!--                    <p>-->
<!--                        <i class="far fa-clock mt-1 text-color-primary"></i>-->
<!--                        <time class="font-tertiary text-1" datetime="2018-01-14">Jan 15, 2018</time>-->
<!--                    </p>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                    <p class="text-color-dark font-weight-semibold mb-0">-->
<!--                        <img src="{{url('img/avatars/3.jpg')}}" class="img-thumbnail-small rounded-circle d-inline-block mr-2" width="25" height="25" alt="" />-->
<!--                        by Jessica Doe-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </a>-->
<!--    </div>-->
<!--</div>-->
<!--<hr class="my-5">-->
<!---->
<!--<div id="comments" class="row mb-5">-->
<!--    <div class="col">-->
<!--        <h2 class="font-weight-bold text-3">COMMENTS (3)</h2>-->
<!--        <ul class="comments">-->
<!--            <li>-->
<!--                <div class="comment">-->
<!--                    <div class="d-none d-sm-block">-->
<!--                        <img class="avatar rounded-circle" alt="" src="{{url('img/avatars/3.jpg')}}">-->
<!--                    </div>-->
<!--                    <div class="comment-block">-->
<!--													<span class="comment-by">-->
<!--														<strong class="comment-author text-color-dark text-4">Robert Doe</strong>-->
<!--														<span class="comment-date text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>-->
<!--														<span class="comment-reply"><a href="#" class="opacity-8">REPLY</a></span>-->
<!--													</span>-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <ul class="comments reply">-->
<!--                    <li>-->
<!--                        <div class="comment">-->
<!--                            <div class="d-none d-sm-block">-->
<!--                                <img class="avatar rounded-circle" alt="" src="{{url('img/avatars/3.jpg')}}">-->
<!--                            </div>-->
<!--                            <div class="comment-block">-->
<!--															<span class="comment-by">-->
<!--																<strong class="comment-author text-color-dark text-4">Jessica Doe</strong>-->
<!--																<span class="comment-date text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>-->
<!--																<span class="comment-reply"><a href="#" class="opacity-8">REPLY</a></span>-->
<!--															</span>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="comment">-->
<!--                            <div class="d-none d-sm-block">-->
<!--                                <img class="avatar rounded-circle" alt="" src="{{url('img/avatars/3.jpg')}}">-->
<!--                            </div>-->
<!--                            <div class="comment-block">-->
<!--															<span class="comment-by">-->
<!--																<strong class="comment-author text-color-dark text-4">John Doe</strong>-->
<!--																<span class="comment-date text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>-->
<!--																<span class="comment-reply"><a href="#" class="opacity-8">REPLY</a></span>-->
<!--															</span>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="comment">-->
<!--                    <div class="d-none d-sm-block">-->
<!--                        <img class="avatar rounded-circle" alt="" src="{{url('img/avatars/3.jpg')}}">-->
<!--                    </div>-->
<!--                    <div class="comment-block">-->
<!--													<span class="comment-by">-->
<!--														<strong class="comment-author text-color-dark text-4">John Doe</strong>-->
<!--														<span class="comment-date text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>-->
<!--														<span class="comment-reply"><a href="#" class="opacity-8">REPLY</a></span>-->
<!--													</span>-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--<div id="#leavecomment" class="row">-->
<!--    <div class="col">-->
<!--        <h2 class="font-weight-bold text-3 mb-3">LEAVE A COMMENT</h2>-->
<!--        <form class="form-style-2" action="#" method="post">-->
<!--            <div class="form-row">-->
<!--                <div class="form-group col">-->
<!--                    <textarea class="form-control bg-light-5 border-0 rounded-0" placeholder="Comment" rows="6" name="comment" required></textarea>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-row">-->
<!--                <div class="form-group col-md-4">-->
<!--                    <input type="text" value="" class="form-control border-0 rounded-0" name="name" placeholder="Name" required>-->
<!--                </div>-->
<!--                <div class="form-group col-md-4">-->
<!--                    <input type="email" value="" class="form-control border-0 rounded-0" name="email" placeholder="E-mail" required>-->
<!--                </div>-->
<!--                <div class="form-group col-md-4">-->
<!--                    <input type="text" value="" class="form-control border-0 rounded-0" name="website" placeholder="Website">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-row mt-2">-->
<!--                <div class="col">-->
<!--                    <input type="submit" value="POST COMMENT" class="btn btn-primary btn-rounded btn-h-2 btn-v-2 font-weight-bold text-0">-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->

</div>
</div>
</div>

</div><br><br>
@endsection