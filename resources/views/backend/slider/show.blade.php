@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3 mb-3">
          <h3 class="mb-2">Product Slider</h3>
          <a href="{{ route('slider.index') }}" class="btn btn-lg btn-primary">Back</a>
        </div>


      </div>
    </div>
    <!-- Breadcrumb end -->

    {{-- @dd($slider); --}}
    <div class="row">
      <div class="col-lg-6">
        <div class="image">
          <img style="width: 70% " src="{{ asset('media/slider/'.$slider->image); }}"alt="image">
        </div>
      </div>
    </div>
    
  </div>
@endsection
