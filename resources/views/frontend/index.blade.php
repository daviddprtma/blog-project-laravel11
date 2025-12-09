@extends('frontend.master')
@section('main')
@php
  $post = App\Models\Post::paginate(6);
@endphp
<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Blog</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">
          @foreach ($post as $p)
          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <img src="{{asset('post_images/'.$p->image)}}" class="img-fluid">
              </div>

              <p class="post-category">{{$p->category->category_name}}</p>

              <h2 class="title">
                <a href="{{ route('blog_detail',$p->id) }}">{{$p->title}}</a>
              </h2>

              <div class="d-flex align-items-center">
                {{-- <img src="{{asset('frontend/assets/img/blog/blog-author.jpg')}}" alt="" class="img-fluid post-author-img flex-shrink-0"> --}}
                <div class="post-meta">
                  <p class="post-author">{{$p->user->name}}</p>
                  <p class="post-date">
                    <time datetime="{{Carbon\Carbon::parse($p->created_at)->diffForHumans()}}">{{Carbon\Carbon::parse($p->created_at)->diffForHumans()}}</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          @endforeach
        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      {{ $post->links('vendor.pagination.custom') }}

    </section><!-- /Blog Pagination Section -->

  </main>
@endsection