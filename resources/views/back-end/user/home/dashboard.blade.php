@extends('back-end.master')
@section('title')
Dashboard : User
@endsection

@section('mainContent')
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Total Comments -->
    <div class="col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Comments</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_comments}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Favourite Posts -->
    <div class="col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Favourite Post</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_favourite_posts }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-newspaper fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    


  </div>
  <br><hr><br>


    <!-- Popular Posts -->
    <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center">
          Favourite Posts
        </div>
        <div class="card-body table-responsive-xl">
          <table class="table table-striped table-hover table-bordered" id="">
            <thead>
              <tr>
                <td>SL</td>
                <td>Title</td>
                <td>Comments</td>
                <td>Favourite_TO_Users</td>
                <td>Views</td>
                <td>Created_Date</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              @foreach($favourite_posts as $key=>$favourite_post)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $favourite_post->title }}</td>
                <td>{{ $favourite_post->comments->count() }}</td>
                <td>{{ $favourite_post->favourite_to_users->count() }}</td>
                <td>{{ $favourite_post->view_count }}</td>
                <td>{{ $favourite_post->created_at->toFormattedDateString() }}</td>
                <td>
                	<a href="{{ route('single-post', ['id'=>$favourite_post->id, 'slug'=>$favourite_post->slug]) }}" class="badge badge-success" title="Post-View">
                		<i class="fas fa-eye"></i>
                	</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <br>

  <br>

@endsection
