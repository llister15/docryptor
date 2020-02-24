@extends('layouts.dashboardlayout')

@section('currentUsers')
  <span class="sr-only">(current)</span>
@endsection

@section('activeUsers')
active
@endsection

@section('content')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h1">Users</h1>
  </div>
  @if(count($users) > 0 )
  	@foreach($users as $user)
  		<div class="well">
  			<h3>{{ $user->name }}</h3>
  			<h4>{{ $user->email }}</h4>
  			<small>Posted on {{ $user->created_at }}</small>
  		</div>
  	@endforeach
  @else
  	<p>No users found</p>
  @endif
     
@endsection