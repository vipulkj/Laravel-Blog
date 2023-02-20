@extends('front/layout/layout')

@section('title','All Posts')

@section('container')

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>Recent Posts</h4>
            <h2>Our Recent Blog Entries</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Banner Ends Here -->



<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">

      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            @if(count($posts) == 0 )
            <!-- <div class="jumbotron"> -->
              <h1 class="display-4 text-danger">Sorry, No Data Found!</h1>
            <!-- </div> -->
            @else
            @foreach($posts as $post)
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="{{ asset('images/post-images/'.$post->image)}}" alt="">
                </div>
                <div class="down-content">
                  <span>{{ $post->category->category_name}}</span>
                  <a href="{{ route('slug.post',['slug' => $post->slug ])}}">
                    <h4>{{$post->title}}</h4>
                  </a>
                  <ul class="post-info">
                    <!-- <li><a href="#">Admin</a></li> -->
                    <li><a href="#">{{ $post->created_at->format('d M Y')}}</a></li>
                    <li><a href="#">{{$post->comments}} Comments</a></li>
                    <li><a href="#">{{$post->likes}} Likes</a></li>
                    <li><a href="#">{{$post->views}} Views</a></li>
                  </ul>
                  <p>{{ Str::limit( $post->description,50) }}</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">Best Templates</a>,</li>
                          <li><a href="#">TemplateMo</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-lg-12">
              <ul class="page-numbers">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
            @endif
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item search">
                <form id="search_form" name="gs" method="GET" action="#">
                  <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                </form>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Recent Posts</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a href="post-details.html">
                        <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                        <span>May 31, 2020</span>
                      </a></li>
                    <li><a href="post-details.html">
                        <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                        <span>May 28, 2020</span>
                      </a></li>
                    <li><a href="post-details.html">
                        <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                        <span>May 14, 2020</span>
                      </a></li>
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
                  <h2>Tag Clouds</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">HTML5</a></li>
                    <li><a href="#">Inspiration</a></li>
                    <li><a href="#">Motivation</a></li>
                    <li><a href="#">PSD</a></li>
                    <li><a href="#">Responsive</a></li>
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