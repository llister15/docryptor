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
          <div class="p-5 bg-white shadow rounded-lg"><img src="https://res.cloudinary.com/mhmd/image/upload/v1557366994/img_epm3iz.png" alt="" width="200" class="d-block mx-auto mb-4 rounded-pill">

            <!-- Default bootstrap file upload-->

            <h6 class="text-center mb-4 text-muted">
              Upload your files here
            </h6>

            <div class="custom-file overflow-hidden rounded-pill mb-5">
              <input id="customFile" type="file" class="custom-file-input rounded-pill">
              <label for="customFile" class="custom-file-label rounded-pill">Choose file</label>
            </div>
            <!-- End -->

            <h6 class="text-center mb-4 text-muted">
              Or a custom button that launches file browser
            </h6>

            <!-- Custom bootstrap upload file-->
            <label for="fileUpload" class="file-upload btn btn-outline-danger btn-block rounded-pill shadow"><i class="fa fa-upload mr-2"></i>Browse for file ...
                          <input id="fileUpload" type="file">
                      </label>
            <!-- End -->

          </div>
        </div>
      </div>
  @endsection