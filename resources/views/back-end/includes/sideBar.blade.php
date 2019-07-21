<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('/') }}">
      <div class="sidebar-brand-icon">
        <i class="fas fa-home"></i>
      </div>
      <div class="sidebar-brand-text mx-3">HOME</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if(Auth::user()->role_id==1)
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      <a>
    </li>

    @elseif(Auth::user()->role_id==2)
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('author.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      <a>
    </li>
    @else
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('user.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      <a>
    </li>
    @endif


    <!-- Admin Panel start -->
    <!-- Divider -->
    @if(Auth::user()->role_id==1)
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Admin
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-database"></i>
        <span>Category</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('add-category') }}">Add Category</a>
          <a class="collapse-item" href="{{ route('manage-category') }}">Manage Category</a>
        </div>
      </div>
    </li>

     <li class="nav-item">
      <a class="nav-link" href="{{ route('manage-tag') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Manage Tag</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('manage-post') }}">
        <i class="fas fa-fw fa-database"></i>
        <span>Manage Post</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('pending-post') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Manage Pending Post</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('manage-subscriber') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Manage Subscriber</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-sliders-h"></i>
        <span>Settings</span>
      </a>
      <div id="collapseSettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('admin.profile') }}">Profile</a>
          <a class="collapse-item" href="javascript:void(0)"> Logout</a>
        </div>
      </div>
    </li>
  
    @endif

      <!-- Admin Panel End -->


    <!-- Author Panel Start -->
    @if(Auth::user()->role_id==2)
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Author
    </div>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('author.manage-post') }}">
        <i class="fas fa-fw fa-database"></i>
        <span>Manage Post</span></a>
    </li>

        <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-sliders-h"></i>
        <span>Settings</span>
      </a>
      <div id="collapseSettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('author.profile') }}">Profile</a>
          <a class="collapse-item" href="javascript:void(0)"> Logout</a>
        </div>
      </div>
    </li>

    @endif

      <!-- Author Panel End -->


    <!-- User Panel Start -->
    @if(Auth::user()->role_id==3)
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      User
    </div>
   

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-sliders-h"></i>
        <span>Settings</span>
      </a>
      <div id="collapseSettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('user.profile') }}">Profile</a>
          <a class="collapse-item" href="javascript:void(0)"> Logout</a>
        </div>
      </div>
    </li>

    @endif

      <!-- User Panel End -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>