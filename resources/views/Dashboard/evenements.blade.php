@extends('Dashboard.layout_Dashboard.master')



@section('content')

   <!-- ========== tables-wrapper start ========== -->
   <div class="tables-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-style mb-30">
          <h6 class="mb-10">List Evenements</h6>
          <div class="table-wrapper table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="lead-info">
                    <h6>title</h6>
                  </th>
                  <th class="lead-email">
                    <h6>description</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>category_id</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>date</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>location</h6>
                  </th>
                 
                  <th>
                    <h6>
                      <h6>action</h6>

                    </h6>
                  </th>
                </tr>
                <!-- end table row-->
              </thead>
              <tbody>
                <tr>
                  <td class="min-width">
                    <div class="lead">
                    
                      <div class="lead-text">
                        <p>Courtney Henry</p>
                      </div>
                    </div>
                  </td>
                  <td class="min-width">
                    <p><a href="#0">yourmail@gmail.com</a></p>
                  </td>
                  <td class="min-width">
                    <p>(303)555 3343523</p>
                  </td>
                  <td class="min-width">
                    <p>(303)555 3343523</p>
                  </td>
                  <td class="min-width">
                    <p>(303)555 3343523</p>
                  </td>
                
                  <td>
                    <div class="action">
                   
                      <a class=" text-success  me-4" href=""><i class="lni lni-checkmark"></i></a>

                      <a class="text-danger " href=""><i class="lni lni-close"></i></a>
                    </div>
                  </td>
                </tr>
            
              </tbody>
            </table>
            <!-- end table -->
          </div>
        </div>
        <!-- end card -->
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->

  </div>
  <!-- ========== tables-wrapper end ========== -->


    




@endsection