@extends('front-end.master')

@section('title')
Post : Single Post
@endsection

@section('mainContent')
	<div class="container my-3">
      <div class="row">

        <div class="col">
          <div class="card">
            <div class="card-body" lang="zxx"> <!-- because 'lorem ipsum' is not english language, so we add lang="zxx" attribute, remove it on production environment -->

              <!-- Blog Info -->
              <ul class="list-inline">
                <li class="list-inline-item"><small><i data-feather="clock"></i> {{ $post->created_at->toFormattedDateString() }}</small></li>
                <li class="list-inline-item"><small><i data-feather="user"></i> <a href="javascript:void(0)" class="text-muted">{{ $post->user->name }}</a></small></li>
                <li class="list-inline-item"><small><i data-feather="tag"></i> <a href="javascript:void(0)" class="text-muted">{{ $post->category->name }}</a></small></li>
              </ul>

              <!-- Blog Content -->
              <h2 class="bold">{{ $post->title }}</h2>
              <img src="{{ asset('assets/images/post/'.$post->image) }}" alt="Blog" class="img-fluid my-3">
              	
              {!! $post->description !!}
       
              <!-- /Blog Content -->

              <!-- Share Button -->
              <div class="d-flex align-items-center">
                <span class="text-muted">Share post: </span>
                <a href="javascript:void(0)" class="btn btn-light btn-icon rounded-circle border ml-2" data-toggle="tooltip" title="Facebook"><i data-feather="facebook"></i></a>
                <a href="javascript:void(0)" class="btn btn-light btn-icon rounded-circle border ml-2" data-toggle="tooltip" title="Twitter"><i data-feather="twitter"></i></a>
                <a href="javascript:void(0)" class="btn btn-light btn-icon rounded-circle border ml-2" data-toggle="tooltip" title="Instagram"><i data-feather="instagram"></i></a>
              </div>
              <!-- /Share Button -->

              <hr>

              <!-- Blog Comments -->
              @guest
              <h3>Comments</h3>
              <div class="media my-4">
                <a href="javascript:void(0)"><img src="" alt="User" width="45" height="45" class="rounded-circle"></a>
                <div class="media-body ml-2 ml-sm-3">
                  	<textarea name="comment" rows="2" placeholder="Leave a comment" class="form-control border autosize"></textarea>
                  	<a href="javascript:void" onclick="toastr.info('Please login or registration first to comment...', 'Info', {
                    closeButton: true,
                    progressBar: true,
                })">
                     <button class="btn btn-sm btn-light border border-top-0 btn-block">Post</button> 
                    </a>
                </div>
              </div>
              @else
              
              <div class="media my-4">
                <a href="javascript:void(0)"><img src="" alt="User" width="45" height="45" class="rounded-circle"></a>
                <div class="media-body ml-2 ml-sm-3">
                  <form action="{{ route('post-comment') }}" method="post">
                    @csrf
                    <textarea name="comment" rows="2" placeholder="Leave a comment" class="form-control border autosize"></textarea>
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <button type="submit" class="btn btn-sm btn-light border border-top-0 btn-block">Post</button>
                  </form>
                </div>
              </div>

              @endguest


              <!-- Display Blog Comments -->
              @foreach($comments as $comment)
              <div class="media">
                <a href="javascript:void(0)"><img src="{{ asset('assets/images/default/'.$comment->user->image) }}" alt="User" width="45" height="45" class="rounded-circle"></a>
                <div class="media-body ml-2 ml-sm-3">
                  <div class="d-flex flex-wrap">
                    <a href="javascript:void(0)" class="mr-2">{{ $comment->user->name }}</a>
                    <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                  </div>
                  <p>{{ $comment->comment }}</p>
                  
                </div>
              </div>
              @endforeach
              <!-- /Blog Comments -->

            </div>
          </div>
        </div>

        <!-- Blog Sidebar -->
        <div class="col-md-4 col-lg-4 mt-3 mt-md-0">
          <div class="card">
            <div class="card-header bg-white border-bottom bold roboto-condensed">
              <h5 class="bold mb-0">POPULAR THIS <span class="text-primary">WEEK</span></h5>
            </div>
            <div class="card-body">

              <div class="row">
                <div class="col-12 col-sm-6 col-md-12">
                  <div class="card card-blog shadow-none">
                    <a href="blog-single.html" class="zoom-hover"><img src="../img/blog/3.jpg" alt="Blog"></a>
                    <div class="card-body p-0 text-center">
                      <a href="blog-single.html" class="title h5 mt-3">5 Simple Outfits for Men</a>
                      <div class="small text-muted">
                        <i data-feather="heart"></i> 55 Likes
                        <i data-feather="message-square" class="ml-3"></i> 15 Comments
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 mt-4 mt-sm-0 mt-md-4">
                  <div class="card card-blog shadow-none">
                    <a href="blog-single.html" class="zoom-hover"><img src="../img/blog/4.jpg" alt="Blog"></a>
                    <div class="card-body p-0 text-center">
                      <a href="blog-single.html" class="title h5 mt-3">Business Casual Outfit Ideas</a>
                      <div class="small text-muted">
                        <i data-feather="heart"></i> 55 Likes
                        <i data-feather="message-square" class="ml-3"></i> 15 Comments
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="card mt-3">
            <div class="card-header bg-white border-bottom bold roboto-condensed">
              <h5 class="bold mb-0">POPULAR <span class="text-primary">CATEGORIES</span></h5>
            </div>
            <div class="card-body">
              <div class="btn-group-scatter">
              	@foreach($categories as $category)
                <a href="{{ route('category-post', ['id'=>$category->id]) }}" class="btn btn-light rounded-pill">{{ $category->name }}</a>
              	@endforeach
              </div>
            </div>
          </div>

        <div class="card mt-3">
            <div class="card-header bg-white border-bottom bold roboto-condensed">
              <h5 class="bold mb-0">POPULAR <span class="text-primary">TAGS</span></h5>
            </div>
            <div class="card-body">
              <div class="btn-group-scatter">
              	@foreach($tags as $tag)
                <a href="javascript:void(0)" class="btn btn-light rounded-pill">{{ $tag->name }}</a>
              	@endforeach
              </div>
            </div>
          </div>

        </div>
        <!-- /Blog Sidebar -->

      </div>
    </div>
    <!-- /Main Content -->
@endsection