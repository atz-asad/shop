@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3">
          <h5 class="mb-2">Create new product</h5>
          <a href="{{ route('product.index') }}" class="btn btn-lg btn-primary">Back</a>
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
              <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                  <input class="form-control" name="name" placeholder="name" type="text">
                </div>
                <div class="mb-3">
                  <input class="form-control" name="subtitle" placeholder="subtitle" type="text">
                </div>
                <div class="mb-3">
                  <input class="form-control" name="regular_price" placeholder="regular_price" type="text">
                </div>
                <div class="mb-3">
                  <input class="form-control" name="sale_price" placeholder="sale_price" type="text">
                </div>
                <div class="mb-3">
                  <input class="form-control" name="stock" placeholder="stock" type="number">
                </div>
                <div class="mb-3">
                  <input class="form-control" name="short_desc" placeholder="short_desc" type="text">
                </div>
                <div class="mb-3">
                  <input class="form-control" name="long_desc" placeholder="long_desc" type="text">
                </div>
                <div class="mb-3">
                  <input class="form-control" name="rating" placeholder="rating" type="number">
                </div>
                <div class="mb-3">
                  <label for="">feature photo</label>
                  <input class="form-control" name="feature_image" placeholder="file" type="file">
                </div>
                <div class="mb-3">

                  <p>select brand</p>
                  <label>
                    <select name="brand" id="">
                      @foreach ($brands as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endforeach
                    </select>
                  </label>
                  <p>select category</p>
                  @foreach ($categoryes as $item)
                    <label>
                      <input type="checkbox" name="category[]" value="{{ $item->id }}">
                      {{ $item->name }}
                    </label>
                  @endforeach

                  <p>select tag</p>
                  <label>
                    @foreach ($tags as $item)
                      <input type="checkbox" class="from-check from-control " name="tag[]" value="{{ $item->id }}">
                      {{ $item->name }}
                    @endforeach
                  </label>


                </div>
                <div class="mb-3">
                  <label for="">gallery photo</label>
                  <input class="form-control" name="gallery[]" placeholder="file" type="file" multiple>
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
