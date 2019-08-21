<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="{{ route('main') }}"><img src="{{ asset('front_end/img/logo.png') }}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="{{ route('main') }}">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="{{ route('category') }}">Shop Category</a></li>
                  
                  <!--<li class="nav-item"><a class="nav-link" href="{{ route('product_checkout') }}">Product Checkout</a></li>-->
                  <li class="nav-item"><a class="nav-link" href="{{ route('confermation') }}">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('cart') }}">Shopping Cart</a></li>
                </ul>
							</li>
              <!--<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('single_blog') }}">Blog Details</a></li>
                </ul>
							</li>-->
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="{{route('new-customer-login')}}">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('user_register')}}">Register</a></li>
                 <!--<li class="nav-item"><a class="nav-link" href="{{ route('track') }}">Tracking</a></li>-->
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>

            <ul class="nav-shop">
             
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
             @if(Session::get('customerId'))
                                    <li class="nav-item">
                                        <a href="{{route('customer-logout')}}" class="icons"  onclick="event.preventDefault();
                                                     document.getElementById('customer-logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="customer-logout-form" action="{{route('customer-logout')}}" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{route('new-customer-login')}}" class="icons">
                                            Login
                                        </a>
                                    </li>
                                @endif
              <li class="nav-item"><a class="button button-header" href="{{ route('category') }}">Buy Now</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>