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
       <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
         <div class="form">
           <div class="form-group text-center">
             <input type="file" name="files[]" id="js-upload-files" multiple hidden>
           </div>
           <button type="submit" class="btn btn-sm btn-outline-danger" id="js-upload-submit">Upload files</button>
         </div>
       </form>

       <!-- Drop Zone -->
       <h4>Or drag and drop files below</h4>
       <div class="upload-drop-zone" id="drop-zone">
         Just drag and drop files here
       </div>

       <!-- Progress Bar -->
       <div class="progress">
         <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
          <span class="sr-only">10% Complete</span>
         </div>
       </div>

       <!-- Upload Finished -->
       <div class="js-upload-finished">
         <h3>Processed files</h3>
         <div class="list-group">
           <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
           <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-02.jpg</a>
         </div>
       </div>
     </div>
   </div>

 </div>
</div>
</div>
@endsection