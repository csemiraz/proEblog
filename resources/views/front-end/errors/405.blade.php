@extends('front-end.master')

@section('title', 'Error: 405')

@section('mainContent')
	 <!-- Main Content -->
    <div class="container my-4 text-center">

      <img src="{{ asset('assets/images/default/405.jpg') }}" alt="404" width="250" class="img-fluid rounded-circle mb-3 img-thumbnail border-info">
      <h1><span class="text-danger">Oops!</span> Error 405 method not allowed</h1>
      <p>The request you were looking for not allowed.</p>
      <a href="javascript:history.back()" class="btn btn-danger rounded-pill"><i data-feather="arrow-left"></i> Go back</a>

    </div>
    <!-- /Main Content -->
@endsection