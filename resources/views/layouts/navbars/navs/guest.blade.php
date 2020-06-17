<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="{{ route('home') }}">{{ $title }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
        @guest
        <ul class="navbar-nav">

            <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
              <a href="{{ route('register') }}" class="nav-link">
                <i class="material-icons">person_add</i> {{ __('Register') }}
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
              <a href="{{ route('login') }}" class="nav-link">
                <i class="material-icons">fingerprint</i> {{ __('Login') }}
              </a>
            </li>

          </ul>
        @endguest
        @auth
        <ul class="navbar-nav">
        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
            <a href="#" class="nav-link">
              <i class="material-icons">person</i> {{auth()->user()->username}}
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="material-icons">fingerprint</i> {{ auth()->user()->type}}
            </a>
          </li>
          <li class="nav-item">
            <a   href="{{ route('logout') }}"  class="nav-link"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="material-icons">lock</i>{{ __('Logout') }}
            </a>
          </li>
        </ul>


        @endauth

    </div>
  </div>
</nav>
<!-- End Navbar -->
