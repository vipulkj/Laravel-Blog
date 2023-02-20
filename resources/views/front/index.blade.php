@extends('front/layout/layout')

@section('title','STAND BLOG')

@section('container')


<?php 



?>
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      @foreach ($popularPosts as $post)
      <div class="item">
        <img src="{{ asset('images/post-images/'.$post->image)}}" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>{{$post->category->category_name}}</span>
            </div>
            <a href="post-details.html">
              <h4> {{ $post->title}}</h4>
            </a>
            <ul class="post-info">
              <!-- <li><a href="#">Admin</a></li> -->
              <li><a href="#">{{ $post->created_at->format('d M Y')}}</a></li>
              <li><a href="#">{{ $post->comments}} Comments</a></li>

            </ul>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- Banner Ends Here -->


<section class="blog-posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">

            @foreach($posts as $post)

            <div class="col-lg-12">
              <div class="blog-post">

                <div class="blog-thumb">
                  <img src="{{ asset('images/post-images/'.$post->image)}}" alt="">
                </div>
                <div class="down-content">
                  <span>{{$post->category->category_name}}</span>
                  <a href="{{ route('slug.post',['slug' => $post->slug])}}">
                    <h4>{{ $post->title}}</h4>
                  </a>
                  <ul class="post-info">
                    <!-- <li><a href="#">Admin</a></li> -->
                    <li><a href="#">{{ $post->created_at->format('d M Y')}}</a></li>
                    <li><a href="#">{{ $post->comments}} Comments</a></li>
                    <li><a href="#">{{ $post->likes}} Likes</a></li>
                    <li><a href="#">{{ $post->views}} Views</a></li>
                  </ul>
                  <p>{{ Str::limit( $post->description,100) }}</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <?php
                        $tags = explode(' ',$post->tags);
                        ?>

                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          @foreach($tags as $tag)
                          <li><a href="#">{{$tag}}</a></li>
                          @endforeach
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#"> Twitter</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="row" class="">{{$posts->appends(Request::all())->links()}}</div>

          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item search">
                <form id="search_form" name="gs" method="GET" action="{{ route('search')}}" class="d-flex ">
                  @csrf
                  <input type="text" name="search" class="searchText" placeholder="Search Post" autocomplete="on">
                  <button class="btn btn-primary">Search</button>
                </form>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item   recent-posts">
                <div class="sidebar-heading">
                  <h2>Popular Posts</h2>
                </div>
                <div class="content">
                  <ul>
                    @foreach($popularPosts as $post)
                    <li><a href="{{ route('slug.post',['slug' => $post->slug ])}}">
                        <h5>{{ $post->title}}</h5>
                        <span>{{ $post->created_at->format('d M Y')}}</span>
                      </a></li>
                      @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item categories">
                <div class="sidebar-heading">
                  <h2>Categories</h2>
                </div>
                <div class="content">
                  <ul>
                  @foreach($categories as $category)
                    <li><a href="{{ route('category.posts',['slug' => $category->slug])}}">- {{ $category->category_name}}</a></li>
                    @endforeach

                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item tags">
                <div class="sidebar-heading">
                  <h2>Post Tag</h2>
                </div>
                <div class="content">
                  <?php  
                  
                  $tags = explode(' ', $alltags);

                  ?>
                  <ul>
                    @foreach($tags as $tag)
                    <li><a href="{{ route('tags.posts',['tag' => $tag])}}">{{$tag}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection