<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config( 'app.name', 'eVault') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

</head>
 <body class="d-flex flex-column h-100">
    <header>
      <!-- Image and text -->
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="https://landing.consilium-uk.com/wp-content/uploads/2019/01/veritas-ev-logo.png" width="40" height="30" class="d-inline-block align-top" alt="">
          eVault
        </a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Log off</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
      <div class="container">
          @yield('content')
      </div>
    </main>

    <footer class="footer mt-auto py-3">
      <div class="container text-center">
        <span class="text-muted">Copyright &copy; <?php echo date('Y'); ?> Wonkasoft LLC</span>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
