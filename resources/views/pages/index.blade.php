@extends('layouts.app')

@section('content')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container text-center">
          <img src="{{asset('img/docryptor-logo.png')}}" />
          <h1 class="display-3">Welcome to Docryptor</h1>
          <p>Secure all of your documents in one place with a great user interface. Upload your documents and we will do the rest.</p>
          <p><a class="btn btn-outline-danger btn-lg" href="/register" role="button">Get started &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Store and Manage</h2>
            <p>Upload multiple files at once and keep them forever on this site. If you're using FireFox or Chrome, you can simply drag & drop your files to begin uploading. We'll take care of the rest.</p>
            <p><a class="btn btn-outline-danger" href="/register" role="button">Get Started &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Secure and Encrypted</h2>
            <p>Safely store and backup all your essential files. From family photos & videos to important documents, you can rely on us to store all your media securely and forever.</p>
            <p><a class="btn btn-outline-danger" href="/register" role="button">Get Started &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Fast and Instant</h2>
            <p>Our premium members benefit from no waiting time and direct downloads for all of their files. Unlike other file hosts we don't limit the transfer speed of our downloads.</p>
            <p><a class="btn btn-outline-danger" href="/register" role="button">Get Started &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

  @endsection