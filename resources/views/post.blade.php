@extends('layouts.main')
@section('container')
<link href="./../assets/css/theme.css" rel="stylesheet" />
<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-0" id="about">

    <div class="container">
        <div class="row">
        <div class="col-12 py-3">
            <div class="bg-holder bg-size" style="background-image:url(./../assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <h1 class="text-center">Blog</h1>
        </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="cold-md-8">

            <h1 class="mb-5">{{$post->title}}</h1>
            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>
            @if($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>

            @else
                <img src="https://source.unsplash.com/1280x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article class="my-1 fs-5">
                {!! $post->body  !!}
            </article>
            <a href="/posts" class="d-block mt-3">Back to Posts</a>
            <br/>
            <br/>
            </div>
        </div>
    </div>
    <script src="./../vendors/@popperjs/popper.min.js"></script>
    <script src="./../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="./../vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="./../vendors/fontawesome/all.min.js"></script>
    <script src="./../assets/js/theme.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
    
@endsection