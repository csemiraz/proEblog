<header>
    <div class="container">

      <!-- Sidebar toggler -->
      <a class="nav-link nav-icon ml-ni nav-toggler mr-3 d-flex d-lg-none" href="#" data-toggle="modal" data-target="#menuModal"><i data-feather="menu"></i></a>

      <!-- Logo -->
      <a class="nav-link nav-logo" href="{{ route('/') }}"><img src="" alt=""> <strong>W3Blog</strong></a>

      <!-- Main navigation -->
      <ul class="nav nav-main ml-auto d-none d-lg-flex"> <!-- hidden on md -->
        <li class="nav-item"><a class="nav-link active" href="{{ route('/') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link " href="javascript:void(0)">About</a></li>
        <li class="nav-item"><a class="nav-link " href="javascript:void(0)">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link " href="javascript:void(0)">Contact</a></li>
       
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle forwardable" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">
            Account <i data-feather="chevron-down"></i>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="">Login / Register</a>
            <a class="dropdown-item" href="">Profile Page</a>
            <a class="dropdown-item" href="">Settings</a>
          </div>
        </li>
      </ul>
      <!-- /Main navigation -->

      <!-- Search form -->
      <form action="{{ route('search') }}" method="get" class="form-inline form-search ml-auto mr-0 mr-sm-1 d-none d-sm-flex">
       
        <div class="input-group input-group-search">
          <div class="input-group-prepend">
            <button class="btn btn-light d-flex d-sm-none search-toggle" type="button"><i data-feather="chevron-left"></i></button>
          </div>
          <input name="query" type="text" class="form-control border-0 bg-light input-search" placeholder="Search...">
          <div class="input-group-append">
            <button class="btn btn-light" type="submit"><i data-feather="search"></i></button>
          </div>
        </div>
      </form>
      <!-- /Search form -->

      <ul class="nav ml-auto ml-sm-0">
        <!-- Search form toggler -->
        <li class="nav-item d-block d-sm-none ml-2 ml-lg-0"><a class="nav-link nav-icon search-toggle" href="#"><i data-feather="search"></i></a></li>
        
      </ul>

    </div><!-- /.container -->
  </header>