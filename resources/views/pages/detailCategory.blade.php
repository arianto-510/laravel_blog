@extends('layouts.app')

@section('content')
    {{-- <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a> --}}
    {{-- </h4> --}}
    @foreach ($posts as $post)
        <div class="blog-box row">
            <div class="col-md-4">
                <div class="post-media">
                    <a href="#" title="">
                        <img src="{{ url('frontend/upload/tech_blog_10.jpg') }}" alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                    </a>
                </div><!-- end media -->
            </div><!-- end col -->

            <div class="blog-meta big-meta col-md-8">
                <h4><a href="/post/{{ $post->slug }}" title="">{{ $post->title }}</a></h4>
                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim
                    nibh, maximus ac felis nec, maximus tempor odio.</p>
                <small class="firstsmall"><a class="bg-orange" href="/category/{{ $post->category->slug }}"
                        title="">{{ $post->category->name }}</a></small>
                <small><a href="#" title="">{{ $post->created_at }}</a></small>
                <small><a href="#" title="">by {{ $post->author }}</a></small>
            </div>
        </div>
        <hr class="invis">
    @endforeach
@endsection
