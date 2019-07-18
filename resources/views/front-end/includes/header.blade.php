<header>
    <div class="container">

      <!-- Sidebar toggler -->
      <a class="nav-link nav-icon ml-ni nav-toggler mr-3 d-flex d-lg-none" href="#" data-toggle="modal" data-target="#menuModal"><i data-feather="menu"></i></a>

      <!-- Logo -->
      <a class="nav-link nav-logo" href="{{ route('/') }}"><img src="" alt=""> <strong>W3Blog</strong></a>

      <!-- Main navigation -->
      <ul class="nav nav-main ml-auto d-none d-lg-flex"> <!-- hidden on md -->
        <li class="nav-item"><a class="nav-link active" href="index-2.html">Home</a></li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle forwardable" data-toggle="dropdown" href="shop-categories.html" role="button" aria-haspopup="true" aria-expanded="false">
            Shop <i data-feather="chevron-down"></i>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="shop-categories.html">Shop Categories</a>
            <a class="dropdown-item" href="shop-grid.html">Shop Grid</a>
            <a class="dropdown-item" href="shop-list.html">Shop List</a>
            <a class="dropdown-item" href="shop-single.html">Single Product</a>
            <a class="dropdown-item" href="shop-single2.html">Single Product v2</a>
            <a class="dropdown-item" href="cart.html">Cart</a>
            <a class="dropdown-item" href="shipping.html">Checkout</a>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-hover dropdown-mega">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            Mega Menu <i data-feather="chevron-down"></i>
          </a>
          <div class="dropdown-menu">
            <div class="row">
              <div class="col-lg-3">
                <div class="list-group list-group-flush list-group-no-border list-group-sm">
                  <a href="shop-grid.html" class="list-group-item list-group-item-action"><strong>CLOTHING</strong></a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Polos &amp; Tees</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Casual Shirts</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Jeans</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Casual Trousers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Formal Shirts</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Formal Trousers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Suits &amp; Blazers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Shorts &amp; 3/4ths</a>
                </div>
              </div>
              <div class="col-lg-3 border-left">
                <div class="list-group list-group-flush list-group-no-border list-group-sm">
                  <a href="shop-grid.html" class="list-group-item list-group-item-action"><strong>FOOTWEAR</strong></a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Sports Shoes</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Sneakers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Casual Shoes</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Loafers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Formal Shoes</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Boots</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Outdoor &amp; Hiking</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Floaters</a>
                </div>
              </div>
              <div class="col-lg-3 border-left roboto-condensed">
                <div class="card text-white zoom-hover">
                  <div data-cover="{{ asset('assets/front-end/') }}/img/categories/men.jpg" data-height="260px"></div>
                  <div class="card-img-overlay card-img-overlay-transparent d-flex justify-content-center align-items-center flex-column">
                    <h2 class="card-title text-center">New Men's Fashion</h2>
                    <h5>See what's new</h5>
                    <a href="shop-grid.html" class="btn btn-primary rounded-pill">Shop Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 border-left roboto-condensed">
                <div class="card text-white zoom-hover">
                  <div data-cover="{{ asset('assets/front-end/') }}/img/categories/6.jpg" data-height="260px"></div>
                  <div class="card-img-overlay card-img-overlay-transparent d-flex justify-content-center align-items-center flex-column">
                    <h2 class="card-title text-center">New Women's Fashion</h2>
                    <h5>See what's new</h5>
                    <a href="shop-grid.html" class="btn btn-danger rounded-pill">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle forwardable" data-toggle="dropdown" href="account-profile.html" role="button" aria-haspopup="true" aria-expanded="false">
            Account <i data-feather="chevron-down"></i>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="account-login.html">Login / Register</a>
            <a class="dropdown-item" href="account-profile.html">Profile Page</a>
            <a class="dropdown-item" href="account-orders.html">Orders List</a>
            <a class="dropdown-item" href="account-wishlist.html">Wishlist</a>
            <a class="dropdown-item" href="account-address.html">Address</a>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle forwardable" data-toggle="dropdown" href="blog-grid.html" role="button" aria-haspopup="true" aria-expanded="false">
            Blog <i data-feather="chevron-down"></i>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="blog-grid.html">Post Grid</a>
            <a class="dropdown-item" href="blog-list.html">Post List</a>
            <a class="dropdown-item" href="blog-single.html">Single Post</a>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            Pages <i data-feather="chevron-down"></i>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="about.html">About Us</a>
            <a class="dropdown-item" href="contact.html">Contact Us</a>
            <a class="dropdown-item" href="compare.html">Compare</a>
            <a class="dropdown-item" href="faq.html">Help / FAQ</a>
            <a class="dropdown-item" href="404.html">404 Not Found</a>
          </div>
        </li>
      </ul>
      <!-- /Main navigation -->

      <!-- Search form -->
      <form class="form-inline form-search ml-auto mr-0 mr-sm-1 d-none d-sm-flex">
        <div class="input-group input-group-search">
          <div class="input-group-prepend">
            <button class="btn btn-light d-flex d-sm-none search-toggle" type="button"><i data-feather="chevron-left"></i></button>
          </div>
          <input type="text" class="form-control border-0 bg-light input-search" placeholder="Search...">
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