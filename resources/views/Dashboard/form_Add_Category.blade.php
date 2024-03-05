@extends('Dashboard.layout_Dashboard.master')



@section('content')

<div class="card-style mb-30">
  <div class="input-style-1">
    <label>Title Category</label>
    <input name="Category" type="text" placeholder="Category" />
  </div>
<button type="button" class="btn btn-primary">Add Category</button>
</div>


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
                  <h6>Title</h6>
                </th>
                <th class="lead-email">
                  <h6>create_at</h6>
                </th>
             
            
                <th>
                  <h6>Action</h6>
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
                  <p>UIdeck digital agency</p>
                </td>
                <td>
                  <div class="action">
                    <a class=" text-success  me-4" href=""><i class="lni lni-brush"></i></a>

                    <a class="text-danger " href=""><i class="lni lni-trash-can"></i></a>
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


    




@endsection