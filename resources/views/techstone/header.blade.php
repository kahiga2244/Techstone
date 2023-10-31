<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/')}}" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">TechStone</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/')}}" class="active">Home</a></li>
          <li><a href="{{ url('/about')}}">About</a></li>
          <li><a href="{{ url('/services')}}">Services</a></li>
          <li><a href="{{url('/request')}}">Request Quote</a></li>
          {{-- <li><a href="{{url('/')}}">Portfolio</a></li>
          <li><a href="{{url('/')}}">Blog</a></li> --}}
          <li><a href="{{url('/contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>


