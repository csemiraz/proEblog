<div class="topbar">
    <div class="container d-flex">

      <!-- social media -->
      <nav class="nav">
        <a class="nav-link pr-2 pl-0" href="javascript:void(0)"><i data-feather="facebook"></i></a>
        <a class="nav-link px-2" href="javascript:void(0)"><i data-feather="twitter"></i></a>
        <a class="nav-link px-2" href="javascript:void(0)"><i data-feather="instagram"></i></a>
      </nav>

      <!-- User Authincation -->
      @guest
      <nav class="nav nav-lang ml-auto">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
        <a class="nav-link pipe">|</a>
        <a class="nav-link" href="{{ route('register') }}">Register</a>
      </nav>
      @else

      <nav class="nav nav-lang ml-auto">
        @if(Auth::user()->role_id==1)
        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a class="nav-link pipe">|</a>
        <a href="{{ route('logout') }}" class="nav-link"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
        @elseif(Auth::user()->role_id==2)
        <a class="nav-link" href="{{ route('author.dashboard') }}">Dashboard</a>
        <a class="nav-link pipe">|</a>
        <a href="{{ route('logout') }}" class="nav-link"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
        @else
        <a class="nav-link" href="{{ route('user.dashboard') }}">Dashboard</a>
        <a class="nav-link pipe">|</a>
        <a href="{{ route('logout') }}" class="nav-link"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
        @endif
      </nav>
      
      <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
        @csrf
      </form>

      @endif

      <!-- User dropdown -->
      @if(Auth::user())
      <ul class="nav">
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle pr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i data-feather="user"></i> {{ Auth::user()->name }} <i data-feather="chevron-down"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="media p-1 align-items-center mb-2">
              <img src="{{ asset('assets/front-end/') }}/img/user/user.svg" alt="user" class="img-thumbnail rounded-circle mr-2 size50x50">
              <div class="media-body">
                <strong>John Thor</strong>
                <div class="small counter">1113 points</div>
              </div>
            </div>
           
            <a href="javascript:void(0)" class="dropdown-item has-icon"><i data-feather="settings"></i>Account Setting</a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit(); "
            ><i data-feather="log-out"></i>Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      </ul>
      @endif
      <!-- /User dropdown -->

    </div><!-- /.container -->
  </div>