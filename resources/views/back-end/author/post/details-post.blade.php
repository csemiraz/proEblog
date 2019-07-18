@extends('back-end.master')

@section('title', 'Post : Details')

@section('mainContent')

    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <a href="{{ route('author.manage-post') }}" class="btn btn-success">Back</a>
            </div>
            <div class="col-md-6 text-right">
                
            @if($post->approval_status == false)
                <button type="button" class="btn btn-warning float-right" disabled>
                    <i class="fas fa-check"></i>
                    <span>Pending</span>
                </button>
            @else
                <button type="button" class="btn btn-success float-right" disabled>
                    <i class="fas fa-check"></i>
                    <span>Approved</span>
                </button>
            @endif
               
            </div>
        </div>
    </div>
<hr><br>
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $post->title }}</h3>
                    <p>Posted On <strong class="text-info">{{ $post->created_at->toFormattedDateString() }}</strong> By <a class="text-success" href="">{{ $post->user->name }}</a> | 
                         <span>Category : <b class="text-info">{{ $post->category->name }}</b></span>
                     </p>
                </div>
                <div class="card-body">
                   {!! $post->description !!}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center text-primary">
                            Tags
                        </div>
                        <div class="card-body">
                            @foreach($post->tags as $tag)
                            <span class="badge badge-primary">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            Featured Image
                        </div>
                        <div class="card-body">
                            <img class="img-fluid" src="{{ asset('assets/images/post/'.$post->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection