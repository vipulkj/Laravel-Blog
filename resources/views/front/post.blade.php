@extends('front/layout/layout')

@section('title','hello')

@section('container')


<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>Post Details</h4>
            <h2>Single blog post</h2>
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

            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="{{ asset('images/post-images/'.$post->image)}}" alt="">
                </div>
                <div class="down-content">
                  <span>{{$post->category->category_name}}</span>
                  <h4>{{$post->title}}</h4>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">{{ $post->created_at->format('d M Y')}}</a></li>
                    <li><a href="#">{{$post->comments}} Comments</a></li>
                    <li><i class="fa fa-heart" id="like" style="cursor:pointer;" data-id="{{$post->id}}"></i> <a href="#" id="post-like">{{$post->likes}} Likes</a></li>
                    <li><a href="#">{{$post->views}} Views</a></li>
                  </ul>
                  <p>{{$post->description}}</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">Best Templates</a>,</li>
                          <li><a href="#">TemplateMo</a></li>
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
            <div class="col-lg-12">
              <div class="sidebar-item comments">
                <div class="sidebar-heading">
                  <h2>{{count($comments)}} Comments</h2>
                </div>
                <div class="content">
                  <ul>

                    @foreach($comments as $comment)
                    <li>
                      <div class="author-thumb">
                        <img src="assets/images/comment-author-01.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>{{$comment->name}}<span>{{ $comment->created_at->format('d M Y')}}</span></h4>
                        <p>{{$comment->comment}}</p>
                      </div>
                    </li>
                    @foreach($replys as $reply)
                    @if($comment->id == $reply->comment_id)
                    <li class="replied">
                      <div class="author-thumb">
                        <img src="assets/images/comment-author-02.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>Admin<span>{{ $reply->created_at->format('d M Y')}}</span></h4>
                        <p>{{$reply->reply}}</p>
                      </div>
                    </li>
                    @endif
                    @endforeach
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item submit-comment">
                <div class="sidebar-heading">
                  <h2>Your comment</h2>
                </div>
                <div class="content">
                  <form id="comment" action="{{ route('storecomments')}}" method="post">
                    @csrf
                    <div class="row">
                      <input name="post_id" type="hidden" id="post_id" value="{{ $post->id }}">

                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Your name">
                        </fieldset>
                        @error('name')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input type="emal" name="email" id="email" placeholder="Your email">
                        </fieldset>
                        @error('email')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <fieldset>
                          <input name="subject" type="text" id="subject" placeholder="Subject">
                        </fieldset>
                        @error('subject')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="comment" rows="6" id="message" placeholder="Type your comment"></textarea>
                        </fieldset>
                        @error('comment')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button">Submit</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
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
                    @foreach( $relatedPosts as $post)
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

