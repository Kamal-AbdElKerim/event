@extends('Dashboard.layout_Dashboard.master')



@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('add_Category') }}">
  @csrf

<div class="card-style mb-30">
  <div class="input-style-1">
    <label>Title Category</label>
    <input name="name" type="text" placeholder="Category" />
  </div>
<button type="submit" class="btn btn-primary">Add Category</button>
</div>
</form>

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
              @foreach ($categories as $categorie)

              <tr>
                <td class="min-width">
                  <div class="lead">
                
                    <div class="lead-text">
                      <p>{{ $categorie->name }}</p>
                    </div>
                  </div>
                </td>
             
                <td class="min-width">
                  <p>{{ $categorie->created_at->diffForHumans() }}</p>
                </td>
                <td>
                  <div class="action">
                    <a class=" text-success  me-4" href="{{ route('form_update_categorie',$categorie->id) }}"><i class="lni lni-brush"></i></a>

                    {{-- <a class="text-danger " href="{{ route('delete_categorie',$categorie->id) }}"><i class="lni lni-trash-can"></i></a> --}}

                    <button type="buttom" class="text-danger"
                                                title="Delete Student" onclick="confirmDelete()">

                                                <i class="fa fa-trash-o" aria-hidden="true"></i> 
                                            </button>
                                                <form method="POST" id="formSubmit" action="{{ route('delete_categorie',$categorie->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    @csrf

                                                
                                                    <script type="text/javascript">
                                                
                                                        function confirmDelete() {
                                                            Swal.fire({
                                                                title: 'Are you sure?',
                                                                text: "You won't be able to revert this!",
                                                                icon: 'warning',
                                                                showCancelButton: true,
                                                                confirmButtonColor: '#3085d6',
                                                                cancelButtonColor: '#d33',
                                                                confirmButtonText: 'Yes, delete it!',
                                                                preConfirm: () => {
                                                                    document.getElementById('formSubmit').submit(); 
    }
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    Swal.fire(
                                                                        'Deleted!',
                                                                        'Your categorie has been deleted.',
                                                                        'success'
                                                                    )
                                                                }
                                                            })
                                                        }
                                                    </script>
                                                </form>
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


    




@endsection