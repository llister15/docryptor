@extends('layouts.dashboardlayout')

@section('currentReports')
  <span class="sr-only">(current)</span>
@endsection

@section('activeReports')
active
@endsection

@section('content')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h1">{{$title}}</h1>
  </div>
     
  @endsection