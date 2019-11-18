<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config( 'app.name', 'Docryptor') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <link rel="shortcut icon" type="image/png" href="{{asset('img/docryptor-favicon.png')}}"/>
  
</head>
 <body class="d-flex flex-column h-100">
      <div id="app"></div>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/dashboard">
              <img src="{{asset('img/docryptor-nav-logo.png')}}" />
              Docryptor
            </a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
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
          </nav>

          <div class="container-fluid">
            <div class="row">
              <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                  <ul class="nav flex-column">
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

    <!-- Begin page content -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @yield('content')
    </main>
    </div>
  </div>

  
    <footer class="footer mt-auto py-3">
      <div class="container text-center">
        <span class="text-muted">Copyright &copy; <?php echo date('Y'); ?> Wonkasoft LLC</span>
      </div>
    </footer>


    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

    {{-- popper.min.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



   

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [0, 1, 2, 3, 4, 5, 6],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#cd1735',
            borderWidth: 4,
            pointBackgroundColor: '#cd1735'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>

   <!-- Icons -->
    <script src="https://unpkg.com/feather-icons@4.24.1/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html> --}}