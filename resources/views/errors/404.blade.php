@extends('layouts.app')

@section('content')
  
  <section>
   <!-- Error Page -->
    <div class="error 404-page">
        <div class="container-floud">
            <div class="col-xs-12 ground-color text-center">
                <div class="container-error-404">
                    <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                    <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                    <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                    <div class="msg">OH!<span class="triangle"></span></div>
                </div>
                <h2 class="h1">Sorry! Page not found</h2>
                  <a href="{{ url('/') }}" class="btn btn-outline-secondary">Return to Home Page</a>
            </div>
        </div>
    </div>
  <!-- Error Page -->
  </section>  

  @endsection