@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <div class="d-flex justify-content-between g-3">
          <h5 class="mb-2">All tag</h5>
          <a href="{{ route('tag.create') }}" class="btn btn-lg btn-primary">Create tag</a>
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
                    <th>Name</th>
                    <th>slug</th>
                    <th>Created At</th>
                    <th>Actiuon</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($tags as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->slug }}</td>

                      <td>1 min ago</td>
                      <td>
                        <a href="{{ route('tag.edit', $item->id) }}" class="btn btn-sm btn-info"><i
                            class="fa-solid fa-pen-to-square"></i></a>

                        <a href="{{ route('tag.show', $item->id) }}" class="btn btn-sm btn-warning"><i
                            class="fa-solid fa-eye"></i></a>


                        <form action="{{ route('tag.destroy', $item->id) }}" method="POST"
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
