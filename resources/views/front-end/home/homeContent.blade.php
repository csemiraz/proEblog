@extends('front-end.master')
@section('title')
HOME
@endsection

@section('mainContent')

 <!-- Home slider -->
    @include('front-end.includes.homeSlider')
 <!-- /Home slider -->

<!-- Main Content -->
<div class="container my-3">
    <div class="row">

      <div class="col">

        <!-- Blog Toolbar -->
        <div class="card">
          <div class="card-body d-flex justify-content-end align-items-center py-2">
            <span class="mr-auto bold">Latest Blog</span>
            <div class="dropdown dropdown-hover">
              <button class="btn btn-light btn-sm border rounded-pill dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Newest <i data-feather="chevron-down"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right shadow-sm">
                <button class="dropdown-item" type="button">Newest</button>
                <button class="dropdown-item" type="button">Oldest</button>
                <button class="dropdown-item" type="button">Popular</button>
              </div>
            </div>
            <a href="blog-grid.html" class="btn btn-icon rounded-pill btn-sm btn-primary ml-3" data-toggle="tooltip" title="Show Grid"><i data-feather="grid"></i></a>
            <a href="blog-list.html" class="btn btn-icon rounded-pill btn-sm btn-outline-primary ml-1" data-toggle="tooltip" title="Show List"><i data-feather="list"></i></a>
          </div>
        </div>
        <!-- /Blog Toolbar -->

        <!-- Blog Grid -->
        <div class="card-deck card-deck-2-columns mt-3">
          <div class="card card-blog">
            <a href="blog-single.html" class="zoom-hover"><img src="{{ asset('assets/front-end/') }}/img/blog/1.jpg" alt="Blog"></a>
            <div class="card-body">
              <a href="blog-single.html" class="title h4">5 Coolest Winter Outfits You Can Steal</a>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam consequuntur eligendi a aut fugit nam.</span>
            </div>
            <div class="card-footer flex-center">
              <div class="small text-muted counter">
                <i data-feather="heart"></i> 55
                <i data-feather="message-square" class="ml-3"></i> 15
              </div>
              <a href="blog-single.html" class="bold">READ MORE</a>
            </div>
          </div>
          <div class="card card-blog">
            <a href="blog-single.html" class="zoom-hover"><img src="{{ asset('assets/front-end/') }}/img/blog/2.jpg" alt="Blog"></a>
            <div class="card-body">
              <a href="blog-single.html" class="title h4">How to Pick the Right Men's Shirt</a>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam consequuntur eligendi a aut fugit nam.</span>
            </div>
            <div class="card-footer flex-center">
              <div class="small text-muted counter">
                <i data-feather="heart"></i> 55
                <i data-feather="message-square" class="ml-3"></i> 15
              </div>
              <a href="blog-single.html" class="bold">READ MORE</a>
            </div>
          </div>
          <div class="card card-blog">
            <a href="blog-single.html" class="zoom-hover"><img src="{{ asset('assets/front-end/') }}/img/blog/3.jpg" alt="Blog"></a>
            <div class="card-body">
              <a href="blog-single.html" class="title h4">5 Simple Outfits for Men</a>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam consequuntur eligendi a aut fugit nam.</span>
            </div>
            <div class="card-footer flex-center">
              <div class="small text-muted counter">
                <i data-feather="heart"></i> 55
                <i data-feather="message-square" class="ml-3"></i> 15
              </div>
              <a href="blog-single.html" class="bold">READ MORE</a>
            </div>
          </div>
          <div class="card card-blog">
            <a href="blog-single.html" class="zoom-hover"><img src="{{ asset('assets/front-end/') }}/img/blog/4.jpg" alt="Blog"></a>
            <div class="card-body">
              <a href="blog-single.html" class="title h4">Business Casual Outfit Ideas</a>
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam consequuntur eligendi a aut fugit nam.</span>
            </div>
            <div class="card-footer flex-center">
              <div class="small text-muted counter">
                <i data-feather="heart"></i> 55
                <i data-feather="message-square" class="ml-3"></i> 15
              </div>
              <a href="blog-single.html" class="bold">READ MORE</a>
            </div>
          </div>
        </div>
        <!-- /Blog Grid -->

        <!-- Pagination -->
        <div class="card card-pagination">
          <div class="card-body">
            <a href="javascript:void(0)" class="btn btn-link btn-icon"><i data-feather="chevron-left"></i></a>
            <div class="d-inline-flex">
              <a href="javascript:void(0)" class="btn btn-icon rounded-pill btn-light">1</a>
              <a href="javascript:void(0)" class="btn btn-icon rounded-pill btn-primary">2</a>
              <a href="javascript:void(0)" class="btn btn-icon rounded-pill btn-light">3</a>
              <button type="button" class="btn btn-icon rounded-pill bg-white">...</button>
              <a href="javascript:void(0)" class="btn btn-icon rounded-pill btn-light">10</a>
            </div>
            <a href="javascript:void(0)" class="btn btn-link btn-icon"><i data-feather="chevron-right"></i></a>
          </div>
        </div>
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
            <h5 class="bold mb-0">POPULAR <span class="text-primary">TAGS</span></h5>
          </div>
          <div class="card-body">
            <div class="btn-group-scatter">
              <a href="javascript:void(0)" class="btn btn-light rounded-pill">Design</a>
              <a href="javascript:void(0)" class="btn btn-light rounded-pill">Fashion</a>
              <a href="javascript:void(0)" class="btn btn-light rounded-pill">Beauty</a>
              <a href="javascript:void(0)" class="btn btn-light rounded-pill">Travel</a>
              <a href="javascript:void(0)" class="btn btn-light rounded-pill">Sport</a>
              <a href="javascript:void(0)" class="btn btn-light rounded-pill active">Active tag</a>
              <a href="javascript:void(0)" class="btn btn-light rounded-pill">Cooking</a>
              <a href="javascript:void(0)" class="btn btn-light rounded-pill">Technology</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /Blog Sidebar -->

    </div>
  </div>
  <!-- /Main Content -->
@endsection