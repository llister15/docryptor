@extends('layouts.dashboardlayout')

@section('currentUpload')
<span class="sr-only">(current)</span>
@endsection

@section('activeUpload')
active
@endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h1">{{$title}}</h1>
</div>
<div class="row text-center">
  <div class="col-md-10 justify-content-md-center pr-5">
    <div class="panel panel-default">
     <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
     <div class="panel-body text-center">

       <!-- Standar Form -->
       <h4>Select files from your computer</h4>
       {!!  Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'js-upload-form']) !!}
       <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
       </div>
       <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description']) }}
      </div>
      <div class="form-group">
        {{ Form::file('document') }}
      </div> 
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
       {!! Form::close() !!}
     </div>
   </div>
 </div>
</div>
</div>
@endsection