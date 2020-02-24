@extends('layouts.dashboardlayout')

@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1>Posts</h1>
	</div>
		@if(count($posts) > 1 )
			@foreach($posts as $post)
				<div class="well">
					<h3>{{ $post->title }}</h3>
					<small>Posted on {{ $post->created_at }}</small>
					<div class="">
						<img src="{{ $post->document }}">
					</div>
				</div>
			@endforeach
		@else
			<p>No posts found</p>
		@endif
@endsection