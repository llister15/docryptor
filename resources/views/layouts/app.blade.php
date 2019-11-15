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
  </body>
</html>
