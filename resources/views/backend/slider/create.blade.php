@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3">
          <h5 class="mb-2">Create New Slider</h5>
          <a href="{{ route('slider.index') }}" class="btn btn-lg btn-primary">Back</a>
        </div>
        @include('backend.layouts.components.message')

      </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- tables start  -->
    <div class="row table-section">
      <!-- Simple Table start -->
      <div class="col-xl-8">
        <div class="card">
          <div class="card-body">
            <div class="app-form">
              <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                  <label for="">Slider photo</label>
                  <input class="form-control" name="slider" placeholder="file" type="file">
                </div>

                <div>
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- Simple Table end -->

    </div>
    <!-- tables-end  -->
  </div>
@endsection
