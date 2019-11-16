<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config( 'app.name', 'Docryptor') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

  <link rel="shortcut icon" type="image/png" href="{{asset('img/docryptor-favicon.png')}}"/>
  
</head>
 <body class="d-flex flex-column h-100">
      <div id="app"></div>
      <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/dashboard">Docryptor</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
              <li class="nav-item text-nowrap">
                <a class="nav-link" href="/signout">Sign out</a>
              </li>
            </ul>
          </nav>

          <div class="container-fluid">
            <div class="row">
              <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" href="/dashboard">
                        <span data-feather="activity"></span>
                        Dashboard <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/upload">
                        <span data-feather="upload"></span>
                        Upload
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/review">
                        <span data-feather="file-text"></span>
                        PDF
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/users">
                        <span data-feather="users"></span>
                        Users
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/reports">
                        <span data-feather="bar-chart-2"></span>
                        Reports
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/integrations">
                        <span data-feather="layers"></span>
                        Integrations
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

    {{-- jquery 3.3.1 slim js --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    {{-- popper.min.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

   

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
  </script>
  <script src="{{asset('js/app.js')}}"></script>
   <!-- Icons -->
    <script src="https://unpkg.com/feather-icons@4.24.1/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>