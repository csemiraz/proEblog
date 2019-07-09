<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>
    <!-- FONTS  -->
    <!-- <link rel="stylesheet" href="../fonts/nunito.css"> -->
    <!-- <link rel="stylesheet" href="../fonts/roboto.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">

    <!-- REQUIRED CSS: BOOTSTRAP, METISMENU, PERFECT-SCROLLBAR  -->
    <link rel="stylesheet" href="{{ asset('assets/front-end/') }}/dist/css/vendor.min.css">


    <!-- PLUGINS FOR CURRENT PAGE -->
    <link rel="stylesheet" href="{{ asset('assets/front-end/') }}/plugins/swiper/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front-end/') }}/plugins/noty/noty.min.css">

    <!-- Mimity CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/front-end/') }}/dist/css/style.min.css">

  </head>
  <body>

    <!-- Top bar -->
    @include('front-end.includes.topBar')
    <!-- /Top bar -->


    <!--Header -->
    @include('front-end.includes.header')
    <!-- /Header -->

    <!-- /Main Content -->
    @yield('mainContent')
    <!-- /Main Content -->

    <!-- Footer -->
    @include('front-end.includes.footer')
    <!-- /Footer -->

    <!--Menu Modal -->
    <div class="modal modal-left modal-menu" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header shadow">
            <a class="h5 mb-0 d-flex align-items-center" href="index-2.html">
              <img src="{{ asset('assets/front-end/') }}/img/logo.svg" alt="Mimity" class="mr-3">
              <strong>Mimity</strong>
            </a>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body shadow">
            <ul class="menu" id="menu">
              <li class="no-sub mm-active"><a href="index-2.html"><i data-feather="home"></i> Home</a></li>
              <li>
                <a href="#" class="has-arrow"><i data-feather="shopping-bag"></i> Shop</a>
                <ul>
                  <li><a href="shop-categories.html">Shop Categories</a></li>
                  <li><a href="shop-grid.html">Shop Grid</a></li>
                  <li><a href="shop-list.html">Shop List</a></li>
                  <li><a href="shop-single.html">Single Product</a></li>
                  <li><a href="shop-single2.html">Single Product v2</a></li>
                  <li><a href="cart.html">Cart</a></li>
                  <li><a href="shipping.html">Checkout</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="has-arrow"><i data-feather="rss"></i> Blog</a>
                <ul>
                  <li><a href="blog-grid.html">Post Grid</a></li>
                  <li><a href="blog-list.html">Post List</a></li>
                  <li><a href="blog-single.html">Single Post</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="has-arrow"><i data-feather="user"></i> Account</a>
                <ul>
                  <li><a href="account-login.html">Login / Register</a></li>
                  <li><a href="account-profile.html">Profile Page</a></li>
                  <li><a href="account-orders.html">Orders List</a></li>
                  <li><a href="account-wishlist.html" class="has-badge">Wishlist <span class="badge rounded badge-primary">2</span></a></li>
                  <li><a href="account-address.html">Address</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="has-arrow"><i data-feather="file"></i> Pages</a>
                <ul>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="compare.html">Compare</a></li>
                  <li><a href="faq.html">Help / FAQ</a></li>
                  <li><a href="404.html">404 Not Found</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /Menu Modal -->

    <!-- REQUIRED JS  -->
    <script src="{{ asset('assets/front-end/') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets/front-end/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/front-end/') }}/plugins/feather-icons/feather.min.js"></script>
    <script src="{{ asset('assets/front-end/') }}/plugins/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('assets/front-end/') }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- PLUGINS FOR CURRENT PAGE -->
    <script src="{{ asset('assets/front-end/') }}/plugins/swiper/swiper.min.js"></script>
    <script src="{{ asset('assets/front-end/') }}/plugins/noty/noty.min.js"></script>
    <script src="{{ asset('assets/front-end/') }}/plugins/jquery-countdown/jquery.countdown.min.js"></script>

    <!-- Mimity JS  -->
    <script src="{{ asset('assets/front-end/') }}/dist/js/script.min.js"></script>

    <script>
    $(function () {

      App.atcDemo() // Add to Cart Demo
      App.atwDemo() // Add to Wishlist Demo
      App.homeSlider('#home-slider')
      App.dealsSlider('#deals-slider')
      App.colorOption()

      // example countdown, 6 hours from now for flash deals
      var countdown = new Date()
      countdown.setHours(countdown.getHours() + 6)
      $('#flash-deals-countdown').countdown(countdown, function (event) {
        $(this).text(event.strftime('%H:%M:%S'))
      })

    })
    </script>

  </body>
</html>