@extends('Dashboard.layout_Dashboard.master')

@section('title')
      List Reservations
@endsection

@section('content')

   <!-- ========== tables-wrapper start ========== -->
   <div class="tables-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-style mb-30">
          <h6 class="mb-10">Data Table</h6>
          <div class="table-wrapper table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="lead-info">
                    <h6>Title the event</h6>
                  </th>
                  <th class="lead-email">
                    <h6>Name the user</h6>
                  </th>
                  <th class="lead-phone">
                    <h6>Quantity</h6>
                  </th>
               
                  <th>
                    <h6>
                      <div class="form-check form-switch toggle-switch">
                    
                        <form id="reservationForm" method="POST" action="{{ route('change_Switch') }}">
                          @csrf
                          <input type="hidden" name="reservation_approval" value="{{ auth()->user()->reservation_approval }}">
                          @if (auth()->user()->reservation_approval === "automatic")
                              <input class="form-check-input" type="checkbox" id="toggleSwitch2" checked onchange="submitForm()" />
                          @else
                              <input class="form-check-input" type="checkbox" id="toggleSwitch2" onchange="submitForm()" />
                          @endif
                      </form>
                  
                  
                        <label class="form-check-label" for="toggleSwitch2">AUTO</label>
                      </div>
                    </h6>
                  </th>
                </tr>
                <!-- end table row-->
              </thead>
              <tbody>
                @foreach ($reservations as $reservation)
                    
               
                <tr>
                  <td class="min-width">
                    <div class="lead">
                    
                      <div class="lead-text">
                        <p>{{ $reservation->title }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="min-width">
                    <p><a href="#0">{{ $reservation->name }}</a></p>
                  </td>
                  <td class="min-width">
                    <p>{{ $reservation->quantity }}</p>
                  </td>
                
                  <td>
                    <div class="action">
                      @if ($reservation->status == 0 )
                      <a class=" text-success  me-4" href="{{ route('accept_reserv', $reservation->id) }}"><i class="lni lni-checkmark"></i></a>
                      <a class="text-danger " href="{{ route('refuser_reserv',$reservation->id) }}"><i class="lni lni-close"></i></a>
                      @else
                      <a class=" text-success  me-4" href="#">done</a>
                      @endif
                   
         
                    </div>
                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>
            <!-- end table -->
          </div>
          <div class="pagination mt-2">
            {{ $reservations->links() }}


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

@section('js')
<script>
  function submitForm() {
      document.getElementById("reservationForm").submit();
  }
</script>
@endsection