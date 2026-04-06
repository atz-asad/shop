@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3 mb-3">
          <h3 class="mb-2">{{ $product->name }}</h3>
          <a href="{{ route('product.index') }}" class="btn btn-lg btn-primary">Back</a>
        </div>


      </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- tables start  -->
    <div class="row table-section">
      <!-- Simple Table start -->
      <div class="col-xl-12">
        <div class="card">

          <div class="card">
            <div class="card-header">
              <h3>{{ $product->name }}</h3>
            </div>

            <div class="card-body">

              <!-- Feature Image -->
              <div class="mb-3">
                <img src="{{ asset('media/product/' . $product->feature_image) }}" width="250" class="img-thumbnail">
              </div>

              <!-- Basic Info -->
              <h4>Product Information</h4>
              <table class="table table-bordered">
                <tr>
                  <th>Regular Price</th>
                  <td>{{ $product->regular_price }}</td>
                </tr>

                <tr>
                  <th>Sale Price</th>
                  <td>{{ $product->sale_price }}</td>
                </tr>

                <tr>
                  <th>Stock</th>
                  <td>{{ $product->stock }}</td>
                </tr>

                <tr>
                  <th>Brand</th>
                  <td>{{ $product->brand->name ?? 'N/A' }}</td>
                </tr>
              </table>

              <!-- Description -->
              <h4>Description</h4>
              <p>{{ $product->short_desc }}</p>

              <div>
                {!! $product->long_desc !!}
              </div>

              <!-- Categories -->
              <h4>Categories</h4>
              <ul>
                @foreach ($product->categoryes as $cat)
                  <li>{{ $cat->name }}</li>
                @endforeach
              </ul>

              <!-- Tags -->
              <h4>Tags</h4>
              <ul>
                @foreach ($product->tags as $tag)
                  <li>{{ $tag->name }}</li>
                @endforeach
              </ul>

              <!-- Gallery Images -->
              <h4>Gallery</h4>

              <div class="row">
                @foreach ($galleries as $g)
                  <div class="col-3">
                    {{-- <img src="{{ asset('media/product/gallery/' . $g->file_name) }}" width="150"
                      class="img-thumbnail mb-3"> --}}

                    {{-- <img style="width: auto; height: 50px " src="{{ URL::to('media/product/gallery/' . g->file_name) }}"
                          alt=""> --}}
                    <img style="width: auto; height: 50px" 
     src="{{ URL::to('media/product/gallery/' . $g->file_name) }}" 
     alt="">


                  </div>
                @endforeach
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
