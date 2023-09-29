
<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #ffffff" class="shadow-sm p-3 mb-5 bg-white rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" width="100" height="30" class="d-inline-block align-text-top"> 
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/buyerhome">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="#about-section">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('shop') ? 'active' : '' }}" href="/shopbuyer">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('cart') ? 'active' : '' }}" href="/cart">Cart</a>
          </li>
        </ul>
        
        <li class="nav-item ">
          <button class="btn button-notif" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <style>
              .button-notif {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-image: url('images/notif.png'); 
                background-size: cover;
                background-position: center;
                
              }</style>
          </button>
          <button class="btn button-profile" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <style>
            .button-profile {
              width: 40px;
              height: 40px;
              border-radius: 50%;
              background-image: url('images/pic1.png'); 
              background-size: cover;
              background-position: center;
              
            }</style>
  
          </button>

        </li>
      </div>
    </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Profile</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-center">
    <div class="row">
      <div class="profile-image"> 
        <img src="images/pic1.png" class="profile-image-buyer rounded-circle">
        <style>
          .profile-image-buyer{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            
          }
         
          /* profile picture in navbar */
         
        </style>
      </div>
      <h3 class="m-b-0">Brad Macullam</h3>
    </div>
    <div class="row">
      <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-hover" type="button">Setting</button>
        <button class="btn btn-hover" type="button">My Cart</button>
        <a class="dropdown-item" href="{{ route('buyerLogout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('buyerLogout') }}" method="POST" class="d-none">
                    @csrf
                    @method('delete')
                </form>
      </div>
      
    </div>
  </div>
</div>
