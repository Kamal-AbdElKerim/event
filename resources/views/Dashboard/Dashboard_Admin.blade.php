@extends('Dashboard.layout_Dashboard.master')

@section('title')
    Dashboard Admin
@endsection

@section('css')
    
@endsection

@section('content')

    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Evento Dashboard</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Evento
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon purple">
                  <i class="lni lni-cart-full"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Categories</h6>
                  <h3 class="text-bold mb-10">{{ count($categories) }}</h3>
                  <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +2.00%
                    <span class="text-gray">(30 days)</span>
                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon success">
                  <i class="lni lni-dollar"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Total Reservations</h6>
                  <h3 class="text-bold mb-10">{{ count($reservations) }}</h3>
                  <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +5.45%
                    <span class="text-gray">Increased</span>
                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon primary">
                  <i class="lni lni-credit-cards"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Events</h6>
                  <h3 class="text-bold mb-10">{{ count($events) }}</h3>
                  <p class="text-sm text-danger">
                    <i class="lni lni-arrow-down"></i> -2.00%
                    <span class="text-gray">Expense</span>
                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon orange">
                  <i class="lni lni-user"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Users</h6>
                  <h3 class="text-bold mb-10">{{ count($users) }}</h3>
                  <p class="text-sm text-danger">
                    <i class="lni lni-arrow-down"></i> -25.00%
                    <span class="text-gray"> Earning</span>
                  </p>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
          </div>
       
          <div class="row">
          
            <!-- End Col -->
            <div class="col-lg-12">
              <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left">
                    <h6 class="text-medium mb-30">List the Users</h6>
                  </div>
                  
                </div>
                <!-- End Title -->
                <div class="table-responsive">
                  <table class="table top-selling-table">
                    <thead>
                      <tr>
                        <th>
                          <h6 class="text-sm text-medium">name</h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            email <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            adresse <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                            Status <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                        <th>
                          <h6 class="text-sm text-medium text-end">
                            Actions <i class="lni lni-arrows-vertical"></i>
                          </h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                          
                   
                      <tr>
                        <td>
                          <div class="product">
                            <div class="image">
                              <img src="assets/images/products/product-mini-1.jpg" alt="" />
                            </div>
                            <p class="text-sm">{{ $user->name }}</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">{{ $user->email }}</p>
                        </td>
                        <td>
                          <p class="text-sm">{{ $user->adresse }}</p>
                        </td>
                        <td>
                          @if ( $user->deleted_at === null)
                          <span class="status-btn close-btn  text-bg-success ">unlock</span>
                          @else 
                          <span class="status-btn close-btn text-bg-danger ">lock</span>

                          @endif
                        </td>
                        <td>
                          <div class="action justify-content-end">
                           @if ( $user->deleted_at === null)
                           <a class="edit btn " href="{{ route('delete_user',$user->id) }}"><i class="fa-solid fa-user-lock"></i></a>
                           @else 
                           <a class="edit btn " href="{{ route('restore_user',$user->id) }}"><i class="fa-solid fa-lock-open"></i></a>

                           @endif
                       
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->
    




@endsection

@section('js')
    <script>
        
    </script>
@endsection