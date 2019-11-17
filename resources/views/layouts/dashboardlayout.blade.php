<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config( 'app.name', 'Docryptor') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  {{-- favicon icon --}}
  <link rel="shortcut icon" type="image/png" href="{{asset('img/docryptor-favicon.png')}}"/>
</head>
<body class="d-flex flex-column h-100">
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{asset('img/docryptor-nav-logo.png')}}" width="25" height="25">
          {{ config( 'app.name', 'Docryptor') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    @yield('content')
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column py-4">
              <li class="nav-item">
                <a class="nav-link @yield('activeDashboard')" href="/dashboard">
                  <span data-feather="activity"></span>
                  Dashboard @yield('currentDashboard')
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('activeUpload')" href="/upload">
                  <span data-feather="upload"></span>
                  Upload @yield('currentUpload')
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('activeReview')" href="/review">
                  <span data-feather="file-text"></span>
                  Review @yield('currentReview')
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('activeUsers')" href="/users">
                  <span data-feather="users"></span>
                  Users @yield('currentUsers')
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('activeReports')" href="/reports">
                  <span data-feather="bar-chart-2"></span>
                  Reports @yield('currentReports')
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('activeIntegrations')" href="/integrations">
                  <span data-feather="layers"></span>
                  Integrations @yield('currentIntegrations')
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
  </main>

    @yield('scripts')

    <footer class="footer mt-auto py-3">
      <div class="container text-center">
        <span class="text-muted">Copyright &copy; <?php echo date('Y'); ?> Wonkasoft LLC</span>
      </div>
    </footer>
</body>
</html>