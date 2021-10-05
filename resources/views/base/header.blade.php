<header class="main_menu">
  <div class="sub_menu">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12 col-md-6">
          <div class="sub_menu_right_content">
            <span>Top destinations</span>
            <a href="#">Asia</a>
            <a href="#">Europe</a>
            <a href="#">America</a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6">
          <div class="sub_menu_social_icon">
            <a href="#"><i class="flaticon-facebook"></i></a>
            <a href="#"><i class="flaticon-twitter"></i></a>
            <a href="#"><i class="flaticon-skype"></i></a>
            <a href="#"><i class="flaticon-instagram"></i></a>
            <span><i class="flaticon-phone-call"></i>+880 356 257 142</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main_menu_iner">
    <div class="container">
      <div class="row align-items-center ">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
            <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('img/logo.png') }}" alt="logo"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                 id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('voyages') }}">Voyages</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
              </ul>
            </div>
            <a href="#" class="btn_1 d-none d-lg-block">book now</a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
