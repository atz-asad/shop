@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3">
          <h5 class="mb-2">Create Brand</h5>
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
            <div class="app-form">
              <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                  <input class="form-control" name="name" placeholder="name" type="text">
                </div>
                <div class="mb-3">
                  <input class="form-control" name="logo" placeholder="file" type="file">
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
