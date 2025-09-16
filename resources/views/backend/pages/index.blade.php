@extends('backend.layouts.app')

@section('main')
  <div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
      <div class="col-12 ">
        <h5>All Productd</h5>
        
      </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- tables start  -->
    <div class="row table-section">
      <!-- Simple Table start -->
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header">
            <h5> All Product</h5>
            
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Office</th>
                    <th scope="col">Status</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Contact</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <div class="d-flex align-items-center ">
                        <div
                          class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary me-2 simple-table-avatar">
                          <img alt="" class="img-fluid" src="../assets/images/avatar/1.png">
                        </div>
                        <p class="mb-0 f-w-500 ">Tiger Nixon</p>
                      </div>
                    </td>
                    <td class="f-w-500">Architect</td>
                    <td class="text-secondary f-w-600">Edinburgh</td>
                    <td><span class="badge text-light-primary">active</span>
                    </td>
                    <td class="text-success f-w-500">$320,800</td>
                    <td>+1 (025) 466-7506</td>
                  </tr>
                  
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
