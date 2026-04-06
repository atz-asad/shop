@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3">
          <h5 class="mb-2">All slider</h5>
          <a href="{{ route('slider.create') }}" class="btn btn-lg btn-primary">Create slider</a>
        </div>
        @include('backend.layouts.components.message')
        <br>
      </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- tables start  -->
    <div class="row table-section">
      <!-- Simple Table start -->
      <div class="col-xl-12">
        <div class="card">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table align-middle mb-0">

                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Actiuon</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($sliders as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                        <img style="width: auto; height: 50px " src="{{ URL::to('media/slider/' . $item->image) }}"
                          alt="image">
                      </td>
                      <td>
                        <a href="{{ route('slider.edit', $item->id) }}" class="btn btn-sm btn-info">
                          <i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ route('slider.show', $item->id) }}" class="btn btn-sm btn-warning">
                          <i class="fa-solid fa-eye"></i></a>
                        <form action="{{ route('slider.destroy', $item->id) }}" method="POST"
                          style="display:inline-block;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fa-solid fa-trash"></i>
                          </button>
                        </form>

                      </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Simple Table end -->

    </div>
    <!-- tables-end  -->
  </div>
@endsection
