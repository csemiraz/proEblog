@extends('back-end.master')
@section('title')
Dashboard : Author
@endsection

@section('mainContent')
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Total Posts -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Post</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $posts->count() }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-newspaper fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Posts -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pending Post</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_pending_post }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-newspaper fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tatal View -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total View</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_view }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-eye fa-2x text-gray-300"></i>
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
          Popular Posts
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
              @foreach($popular_posts as $key=>$popular_post)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $popular_post->title }}</td>
                <td>{{ $popular_post->comments->count() }}</td>
                <td>{{ $popular_post->favourite_to_users->count() }}</td>
                <td>{{ $popular_post->view_count }}</td>
                <td>{{ $popular_post->created_at->toFormattedDateString() }}</td>
                <td>
                  <a href="{{ route('single-post', ['id'=>$popular_post->id, 'slug'=>$popular_post->slug]) }}" class="badge badge-success" title="Post-View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" onclick="deleteData({{ $popular_post->id }})" class="badge badge-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
                <form id="delete-data-{{ $popular_post->id }}" action="{{ route('author.delete-popular-post', ['id'=>$popular_post->id]) }}" method="post" style="display: none;">
                  @csrf
                </form>
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
