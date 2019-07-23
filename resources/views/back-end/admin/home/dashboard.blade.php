@extends('back-end.master')
@section('title')
Dashboard : Admin
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
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $posts }}</div>
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

    <!-- Tatal Category -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Category</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $all_category }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-database fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Tag -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Tag</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $all_tag }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-database fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- All Author -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Author</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $all_author }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- All User -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total User</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $all_user }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Subscriber -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Subscriber</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $all_subscriber }}</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total View -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total View</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_view }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-eye fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Comment -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Comment</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_comments }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- New Authors today -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">New Authors Today</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $new_authors_today }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- New Users today -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">New Users Today</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $new_users_today }}</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
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
                <td>Author Name</td>
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
                <td>{{ $popular_post->user->name }}</td>
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
                <form id="delete-data-{{ $popular_post->id }}" action="{{ route('delete-popular-post', ['id'=>$popular_post->id]) }}" method="post" style="display: none;">
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

  <!-- Active Authors Table -->
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <div class="card">
        <div class="card-header text-center">
          Active authors list
        </div>
        <div class="card-body table-responsive-xl">
          <table class="table table-striped table-hover table-bordered" id="">
            <thead>
              <tr>
                <td>SL</td>
                <td>Name</td>
                <td>Posts</td>
                <td>Comments</td>
                <td>Favourite_Posts</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              @foreach($active_authors as $key=>$active_author)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $active_author->name }}</td>
                <td>{{ $active_author->posts->count() }}</td>
                <td>{{ $active_author->comments->count() }}</td>
                <td>{{ $active_author->favourite_posts->count() }}</td>
                <td>
                  <a href="#" onclick="deleteData({{ $active_author->id }})" class="badge badge-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
                <form id="delete-data-{{ $active_author->id }}" action="{{ route('delete-active-author', ['id'=>$active_author->id]) }}" method="post" style="display: none;">
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

  <!------ Active users list ------>
   <div class="row">
    <div class="col-md-10 offset-md-1">
      <div class="card">
        <div class="card-header text-center">
          Active users list
        </div>
        <div class="card-body table-responsive-xl">
          <table class="table table-striped table-hover table-bordered" id="">
            <thead>
              <tr>
                <td>SL</td>
                <td>Name</td>
                <td>Comments</td>
                <td>Favourite_Posts</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              @foreach($active_users as $key=>$active_user)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $active_user->name }}</td>
                <td>{{ $active_user->comments->count() }}</td>
                <td>{{ $active_user->favourite_posts->count() }}</td>
                <td>
                  <a href="#" onclick="deleteData({{ $active_user->id }})" class="badge badge-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
                <form id="delete-data-{{ $active_user->id }}" action="{{ route('delete-active-user', ['id'=>$active_user->id]) }}" method="post" style="display: none;">
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

@endsection
