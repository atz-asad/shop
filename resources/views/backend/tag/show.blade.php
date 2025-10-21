@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3 mb-3">
          <h5 class="mb-2">tag Details</h5>
          <a href="{{ route('tag.index') }}" class="btn btn-lg btn-primary">Back</a>
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
                  <!-- tag Logo -->
                  <div class="mb-3">
                    <img src="{{ URL::to('media/tags/' . $tag->logo) }}" alt="{{ $tag->name }}"
                      class="img-fluid rounded" style="max-height: 100px;">
                  </div>

                  <!-- tag Name -->
                  <h2 class="fw-bold text-primary mb-3">{{ $tag->name }}</h2>

                  <hr>

                  <!-- tag Details -->
                  <div class="text-start mx-auto" style="max-width: 400px;">
                    <p><strong>ID:</strong> {{ $tag->id }}</p>
                    <p><strong>Created at:</strong> {{ $tag->created_at->format('Y-m-d') }}</p>
                    <p><strong>Updated at:</strong> {{ $tag->updated_at->format('Y-m-d') }}</p>
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
