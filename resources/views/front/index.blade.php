@extends('front/layout/layout')

@section('container')

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      @foreach ($posts as $post)
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
                  <a href="{{ route('single.post',['id' => $post->id])}}">
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
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">Beauty</a>,</li>
                          <li><a href="#">Nature</a></li>
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