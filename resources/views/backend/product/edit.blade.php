@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3">
          <h5 class="mb-2">Update category</h5>
          <a href="{{ route('category.index') }}" class="btn btn-lg btn-primary">Back</a>
        </div>
        @include('backend.layouts.components.message')

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
              <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="mb-3">
                  <input class="form-control" name="name" value="{{ $category->name }}" placeholder="category name"
                    type="text">
                </div>
                <div class="mb-3">
                  <label class="form-label">Current photo:</label><br>


                  @if ($category->photo)
                    <img src="{{ URL::to('media/category/' . $category->photo) }}" alt="photo" width="100"
                      class="mb-2">
                  @else
                    <p>No photo uploaded.</p>
                  @endif
                  <input class="form-control" name="photo" placeholder="file" type="file">
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
