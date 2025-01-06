{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm pt-4 pb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                <li class="mt-2">
                    <a href="{{ route('donations') }}"> Home</a>
                </li>
                <li class="ms-2 mt-2">
                    <a href="{{ route('about.us') }}"> About</a>
                </li>
                <li class="ms-2 mt-2">
                    <a href="{{ route('about.us') }}"> About</a>
                </li>
                



                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}}


<nav class="navbar navbar-expand-lg navbar-dark p-3 fixed-top" id="headerNav">
    <div class="container-fluid">
      <a class="navbar-brand d-block d-lg-none" href="{{ url('/') }}">
        {{-- <img src="/static_files/images/logos/logo_2_white.png" height="80" /> --}}
        <img src="{{ asset('images/logoremovebg.png') }}" height="100" />
      </a>
      <button class="navbar-toggler bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="border: 2px solid blue; font-size: 15px">
        {{-- <span class="navbar-toggler-icon bg-info"></span> --}}
        <i class="navbar-toggler-icon fa-solid fa-hands-holding-child navbaricon"></i>
      </button>
  
      <div class=" collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto dove">
          <li class="nav-item">
            {{-- <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a> --}}
            <a class="nav-link mx-2 " aria-current="page" href="{{ route('donations') }}"> Home</a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link mx-2" href="#">Products</a> --}}
            <a class="nav-link mx-2" href="{{ route('about.us') }}"> About Us </a>
          </li>
          <li class="nav-item d-none d-lg-block">
            {{-- <a class="nav-link mx-2" href="#">
              <img src="/static_files/images/logos/logo_2_white.png" height="80" />
            </a> --}}
            <a class="navbar-brand mx-2" href="{{ url('/') }}">
                <img src="{{ asset('images/logoremovebg.png') }}" height="120" /> <br>
                {{ config( 'Laravel') }}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('donation.matters') }}">Why Your Donation Matters</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Company
            </a>
            <ul class="dropdown-menu ciwi" aria-labelledby="navbarDropdownMenuLink">
              <li class="cici">
                <a class="dropdown-item " href="{{ route('our.partners') }}"> Our Partners </a>
              </li>
              <li>
                <a class="dropdown-item"  href="{{ route('our.service') }}">Our Services</a>
              </li>
              {{-- <li><a class="dropdown-item" href="#">We Need You</a></li> --}}
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>