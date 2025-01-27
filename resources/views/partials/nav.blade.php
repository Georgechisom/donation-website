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


{{-- <nav class="navbar navbar-expand-lg navbar-dark p-3 fixed-top" id="headerNav">
    <div class="container-fluid">
      <a class="navbar-brand d-block d-lg-none" href="{{ url('/') }}">
        <img src="{{ asset('images/logoremovebg.png') }}" height="100" />
      </a>
      <button class="navbar-toggler bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="border: 2px solid blue; font-size: 15px">
        <i class="navbar-toggler-icon fa-solid fa-hands-holding-child navbaricon"></i>
      </button>
  
      <div class=" collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto dove">
          <li class="nav-item">
            <a class="nav-link mx-2 " aria-current="page" href="{{ route('donations') }}"> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('about.us') }}"> About Us </a>
          </li>
          <li class="nav-item d-none d-lg-block">
              <img src="/static_files/images/logos/logo_2_white.png" height="80" />
            </a>
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
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav> --}}

<nav class="navbar fixed mx-auto w-full overflow-hidden z-50" id="my-nav">
  <div class="container flex items-center justify-between mx-auto md:justify-center">
    <div class="hidden lg:hidden md:flex sm:hidden w-full h-28 text-lg font-semibold items-center justify-center cursor-pointer flex-nowrap abu0 ">
      <a href="{{ route('donations') }}" class="mx-4 cc hover:text-blue-600 hover:italic">Home</a>
      <a href="{{ route('about.us') }}" class="mx-4 cc hover:text-blue-600 hover:italic md:w-28 lg:w-auto">About Us</a>
      <a class="mx-4 mt-4" href="{{ url('/') }}">
        <img src="{{ asset('images/logoremovebg.png') }}" class="md:w-28 object-cover" /> <br>
        {{ config( 'Laravel') }}
      </a>
      <a href="{{ route('donation.matters') }}" class="hidden md:inline-flex lg:hidden mx-4 hover:text-blue-600 hover:italic md:w-32 lg:w-auto">Donations</a>
      <a href="{{ route('our.service') }}" class="mx-4 cc hover:text-blue-600 hover:italic md:w-32 lg:w-auto">Our Services</a>
    </div>
    <div class="hidden md:hidden lg:flex w-full h-28 text-lg font-semibold items-center justify-center cursor-pointer flex-nowrap abu0">
      <a href="{{ route('donations') }}" class="mx-4 -mt-7 cc hover:text-blue-600 hover:italic">Home</a>
      <a href="{{ route('about.us') }}" class="mx-4 -mt-7 cc hover:text-blue-600 hover:italic md:w-32 lg:w-auto">About Us</a>
      <a class="mx-4 mt-4" href="{{ url('/') }}">
        <img src="{{ asset('images/logoremovebg.png') }}" class="md:w-28 lg:w-32 object-cover" /> <br>
        {{ config( 'Laravel') }}
      </a>
      <a href="{{ route('donation.matters') }}" class="mx-4 -mt-7 hover:text-blue-600 hover:italic cc">Why Donations Matters</a>
      <a href="{{ route('our.service') }}" class="mx-4 -mt-7 cc hover:text-blue-600 hover:italic md:w-32 lg:w-auto">Our Services</a>
    </div>

    <a class="flex md:hidden lg:hidden" href="{{ url('/') }}">
      <img src="{{ asset('images/logoremovebg.png') }}" class="object-cover w-24" />
    </a>

    <div onclick="openNav()" id="opens" class="flex md:hidden lg:hidden text-blue-600 border-2 border-blue-600 mr-3 px-3 py-2 rounded-lg shadow-md shadow-blue-600 hover:shadow-lg">
      <i class=" fa-solid fa-hands-holding-child"></i>
    </div>

    <!--background overlay element, will close navbar when clicked-->
    <div onclick="exitNav()" id="sideBar" class="flex md:hidden lg:hidden fixed top-0 right-0 bg-transparent w-0 h-full overflow-x-hidden duration-500 z-10">

      <!--navigation menu contents bg-gradient-to-r from-pink-600 to-purple-600-->
      <div id="sideNav" class="fixed  right-0 bg-white text-blue-600 w-0 h-full bottom-0 flex justify-center items-center overflow-x-hidden duration-500 font-semibold z-50">
        <!--exit icon, will close navbar when clicked-->
        <a href="javascript:void(0)" onclick="exitNav()" class="text-3xl absolute top-0 right-0 mr-4 mt-10 font-semibold">&times;</a>
        <!--menu links--> 
        <ul class="text-xl">
          <li class="p-2"><a href="{{ route('donations') }}">Home</a></li>
          <li class="p-2"><a href="{{ route('about.us') }}">About Us</a></li>
          <li class="p-2"><a href="{{ route('donation.matters') }}">Donations</a></li>
          <li class="p-2"><a href="{{ route('project') }}">True Projects</a></li>
          <li class="p-2"><a href="{{ route('our.partners') }}">Our Partners</a></li>
          <li class="p-2"><a href="{{ route('our.service') }}">Our Service</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>