@extends('layouts.main')
@section('title', 'PortFolio')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-sm-3 col-mb-4 col-6 circle-progress-block" style="border: none;">
                <div id="circleProgress1" class="progressbar-js-circle  rounded p-3" >Laravel <br></div>
              </div>

              <div class="col-sm-3 col-mb-4 col-6 circle-progress-block">
                <div id="circleProgress2" class="progressbar-js-circle  rounded p-3">PHP <br></div>
              </div>

              <div class="col-sm-3 col-mb-4 col-6 circle-progress-block">
                <div id="circleProgress3" class="progressbar-js-circle  rounded p-3">HTML <br></div>
              </div>

              <div class="col-sm-3 col-mb-4 col-6 circle-progress-block">
                <div id="circleProgress4" class="progressbar-js-circle  rounded p-3">JavaScript <br></div>
              </div>
        </div>
    </div>

@endsection
