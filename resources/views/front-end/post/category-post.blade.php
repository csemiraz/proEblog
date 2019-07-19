@extends('front-end.master')
@section('title')
Category : Post By Category
@endsection

@section('mainContent')

 <!-- Home slider -->
    @include('front-end.includes.homeSlider')
 <!-- /Home slider -->

<!-- Main Content -->
<div class="container my-3">
    <div class="row">

      <div class="col-md-8">

        <!-- Blog Toolbar -->
        <div class="card">
          <div class="card-body d-flex justify-content-end align-items-center py-2">
            <span class="mr-auto bold text-success">Category : {{ $categoryName->name }}</span>
          </div>
        </div>
        <!-- /Blog Toolbar -->

       
          
            <!-- Blog Grid -->
         
        <div class="card-deck card-deck-2-columns mt-3">

          @foreach($categoryPosts as $post)
          <div class="card card-blog">
            <a href="{{ route('single-post', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="zoom-hover"><img src="{{ asset('assets/images/post/'.$post->image) }}" alt="{{ $post->title }}"></a>
            <div class="card-body">
              <a href="{{ route('single-post', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="title h4">{{ $post->title }}</a>

              {!! Str::limit($post->description, 200) !!}

            </div>
            <div class="card-footer flex-center">
              <div class="small text-muted counter">
                @guest
                <a href="javascript:void(0)" onclick="toastr.info('To add favourite list, You have to login first', 'Info', {
                    closeButton: true,
                    progressBar: true,
                })">
                <i data-feather="heart" class="text-secondary"></i> {{ $post->favourite_to_users->count() }}
                </a>
                @else
                <a href="javascript:void(0)" onclick="document.getElementById('favourite-form-{{ $post->id }}').submit(); " 
                  class="text-secondary" >
                  <i data-feather="heart" class="{{ Auth::user()->favourite_posts()->where('post_id', $post->id)->count() != 0 ? 'text-success' : '' }}">
                    
                  </i> {{ $post->favourite_to_users->count() }}
                </a>
                @endguest

                <form id="favourite-form-{{ $post->id }}" action="{{ route('favourite-post', ['id'=>$post->id]) }}" method="post" style="display: none;">
                  @csrf
                </form>
                <i data-feather="message-square" class="ml-3"></i> {{ $post->comments->count() }}
                <i data-feather="eye" class="ml-3"></i> {{ $post->view_count }}
              </div>
              <a href="{{ route('single-post', ['id'=>$post->id, 'slug'=>$post->slug]) }}" class="bold">READ MORE</a>
            </div>
          </div>
       
          @endforeach
        </div>
        <!-- /Blog Grid -->
        

        <!-- Pagination -->
       
          {{ $categoryPosts->links() }}
        
        <!-- /Pagination -->

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
                  <a href="blog-single.html" class="zoom-hover"><img src="{{ asset('assets/front-end/') }}/img/blog/3.jpg" alt="Blog"></a>
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
                  <a href="blog-single.html" class="zoom-hover"><img src="{{ asset('assets/front-end/') }}/img/blog/4.jpg" alt="Blog"></a>
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

