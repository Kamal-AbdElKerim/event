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
                    <h6>Date start</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>Date end</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>city</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>Nombre_De_Places</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>category</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>Organisateur</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>Status</h6>
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
                @foreach ($events as $event)
                    
              
                <tr>
                  <td class="min-width">
                    <div class="lead">
                    
                      <div class="lead-text">
                        <p>{{ $event->title }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="min-width">
                    <p><a href="#0">{{ $event->description }}</a></p>
                  </td>
                  <td class="min-width">
                    <p>{{ $event->Date_start }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $event->Date_end }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $event->city }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $event->Nombre_De_Places }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $event->category->name }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $event->user->name }}</p>
                  </td>
                  <td class="min-width">
                    @if ($event->validation_status ===  "pending")
                    <p><span class="badge rounded-pill text-bg-warning">{{ $event->validation_status }}</span></p>
                    @endif
                    @if ($event->validation_status ===  "approved")
                    <p><span class="badge rounded-pill text-bg-success">{{ $event->validation_status }}</span></p>
                    @endif
                    @if ($event->validation_status ===  "rejected")
                    <p><span class="badge rounded-pill text-bg-danger">{{ $event->validation_status }}</span></p>
                    @endif
                  </td>
                
                  <td>
                    <div class="action">

                      @if ($event->validation_status ===  "pending")
                                             
                      <a class=" text-success  me-4" href="{{ route('approved_event',$event->id) }}"><i class="lni lni-checkmark"></i></a>

                      <a class="text-danger " href="{{ route('rejected_event',$event->id) }}"><i class="lni lni-close"></i></a>
                      @endif
                      @if ($event->validation_status ===  "approved")
                                             
                      <a class="text-danger " href="{{ route('rejected_event',$event->id) }}"><i class="lni lni-close"></i></a>

                      @endif
                      @if ($event->validation_status ===  "rejected")
                                             
                      <a class=" text-success  me-4" href="{{ route('approved_event',$event->id) }}"><i class="lni lni-checkmark"></i></a>

                      @endif


                    </div>
                  </td>
                </tr>
                @endforeach
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