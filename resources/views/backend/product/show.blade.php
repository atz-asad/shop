@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3 mb-3">
          <h5 class="mb-2">Brand Details</h5>
          <a href="{{ route('brand.index') }}" class="btn btn-lg btn-primary">Back</a>
        </div>


      </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- tables start  -->
    <div class="row table-section">
      <!-- Simple Table start -->
      <div class="col-xl-12">
        <div class="card">
          <div class="card-body">
            <div class="app-form p-4">

              <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                  <!-- Brand Logo -->
                  <div class="mb-3">
                    <img src="{{ URL::to('media/brands/' . $brand->logo) }}" alt="{{ $brand->name }}"
                      class="img-fluid rounded" style="max-height: 100px;">
                  </div>

                  <!-- Brand Name -->
                  <h2 class="fw-bold text-primary mb-3">{{ $brand->name }}</h2>

                  <hr>

                  <!-- Brand Details -->
                  <div class="text-start mx-auto" style="max-width: 400px;">
                    <p><strong>ID:</strong> {{ $brand->id }}</p>
                    <p><strong>Created at:</strong> {{ $brand->created_at->format('Y-m-d') }}</p>
                    <p><strong>Updated at:</strong> {{ $brand->updated_at->format('Y-m-d') }}</p>
                  </div>

                  <hr>


                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
      <!-- Simple Table end -->

    </div>
    <!-- tables-end  -->
  </div>
@endsection
