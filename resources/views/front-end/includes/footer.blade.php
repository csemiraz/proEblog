<div class="footer">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-3 text-center px-3">
          <h5 class="bold">SUBSCRIBE</h5>
          <p>and get <strong class="text-primary">update blog post</strong></p>
          <form action="{{ route('subscriber') }}" method="post">
            @csrf
            <div class="form-group">
              <input name="email" type="email" class="form-control rounded-pill text-center" placeholder="Enter your email" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block rounded-pill">SUBSCRIBE</button>
          </form>
        </div>
        <div class="col-md-3 offset-md-3">
          <h6 class="bold">Customer Service</h6>
          <div class="list-group list-group-flush list-group-no-border list-group-sm">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Help Center</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">How to buy</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Delivery</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">How to return</a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">Copyright © 2019 W3Blog All right reserved</div>