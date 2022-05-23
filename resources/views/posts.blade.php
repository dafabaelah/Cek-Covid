@extends('layouts.main')
@section('container')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-0" id="about">

    <div class="container">
        <div class="row">
        <div class="col-12 py-3">
            <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <h1 class="text-center">Semua Blog</h1>
            <form action="/posts">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                    <div class="input-group mb-5">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}">
                        <button class="btn btn-sm btn-outline-primary" type="submit">Search</button>
                    </div>
            </form>
        </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<section>
    <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;"></div>
    <!--/.bg-holder-->

    <div class="container">
        @if ($posts->count())
        <div class="row">
        @foreach ($posts as $post)
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow card-span rounded-3">
                    <!-- <img class="card-img-top rounded-top-3" src="assets/img/gallery/covid-19.png" alt="news" /> -->
                    @if($post->image)
                        <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" style="height: 500px; width: 500px;">

                    @else
                        <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                <div class="card-body">
                    <span class="fs--1 text-primary me-3">{{ $post->category->name }}</span>
                    <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                    </svg>
                        <span class="fs--1 text-900">{{ $post->created_at->diffForHumans() }}</span>
                        <span class="fs--1 "> <br/> By. {{ $post->author->name }}</span>
                    <h5 class="font-base fs-lg-0 fs-xl-1 my-3">{{ $post->title }}</h5><a class="stretched-link" href="/posts/{{ $post->slug }}">read full article</a>
                </div>
                </div>
            </div>
        @endforeach 
        </div>
        @else
            <p class="text-center fs-4">No Post found.</p>
        @endif
    </div>
</section>
<!-- <section> close ============================-->
<!-- ============================================-->

@endsection 