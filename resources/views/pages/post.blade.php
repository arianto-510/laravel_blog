@extends('layouts.app')
@section('content')
    <div class="input-group mb-3">
        <form action="/">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="search.." aria-label="Recipient's username"
                    aria-describedby="button-addon2" name="search">
                <button class="btn btn-primary" type="submit" id="button-addon2">Button</button>
            </div>

        </form>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/random/1024x240/?programming" height="120px" class="card-img-top">
            <div class="card-body p-3   ">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p class="card-text text-truncate">{!! $posts[0]->body !!}</p>
                <p class="card-text"><small class="text-body-secondary">{{ $posts[0]->created_at }}</small></p>
            </div>
        </div>
    @endif
    @foreach ($posts as $post)
        <div class="blog-box row">
            <div class="col-md-4">
                <div class="post-media">
                    <a href="#" title="">
                        <img src="{{ $post->category->name == 'Programming' ? 'https://source.unsplash.com/random/800x600/?programming' : ($post->category->name == 'Networking' ? 'https://source.unsplash.com/random/800x600/?networks' : 'https://source.unsplash.com/random/800x600/?nature') }}
                        "
                            alt="" class="img-fluid">
                        <div class="hovereffect"></div>
                    </a>
                </div><!-- end media -->
            </div><!-- end col -->

            <div class="blog-meta big-meta col-md-8">
                <h4><a href="/post/{{ $post->slug }}" title="">{{ $post->title }}</a></h4>
                <p class="text-truncate">{!! $post->body !!}</p>
                <small class="firstsmall"><a class="bg-orange" href="/category/{{ $post->category->slug }}"
                        title="">{{ $post->category->name }}</a></small>
                <small><a href="#" title="">{{ $post->created_at }}</a></small>
                <small><a href="/author/{{ $post->user->username }}" title="">by {{ $post->user->name }}</a></small>
            </div>
        </div>
        <hr class="invis">
    @endforeach
@endsection
