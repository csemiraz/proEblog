@extends('front-end.master')

@section('title', 'Error: 404')

@section('mainContent')
	 <!-- Main Content -->
    <div class="container my-4 text-center">

      <img src="{{ asset('assets/images/default/404.jpg') }}" alt="404" width="250" class="img-fluid rounded-circle mb-3 img-thumbnail border-info">
      <h1><span class="text-danger">Oops!</span> Error 404 page not found</h1>
      <p>The page you were looking for doesn't exist.</p>
      <a href="javascript:history.back()" class="btn btn-danger rounded-pill"><i data-feather="arrow-left"></i> Go back</a>

    </div>
    <!-- /Main Content -->
@endsection