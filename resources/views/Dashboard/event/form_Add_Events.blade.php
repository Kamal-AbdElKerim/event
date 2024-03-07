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
{{-- @if($errors->has('Date_end'))
    <div class="alert alert-danger">{{ $errors->first('Date_end') }}</div>
@endif --}}
<form method="post" action="{{ route('add_event') }}">
  @csrf
<div class="row">
 
    
 
<div class="card-style mb-30  col-xl-6   col-md-12 ">
    <div class="input-style-1">
      <label>titre</label>
      <input name="title" type="text" placeholder="titre"  value="{{ old('title') }}"/>
    </div>
    <!-- end input -->
    <div class="input-style-3">
        <textarea name="description" placeholder="Description" rows="5">{{ old('description') }}</textarea>
        <span class="icon"><i class="lni lni-text-format"></i></span>
      </div>
    <!-- end input -->

    <!-- end input -->
    <div class="select-style-2">
      <div class="select-position">
          <select name="category_id">
              <option value="">Select category</option>
              @foreach ($categories as $categorie)
                  <option value="{{ $categorie->id }}" @if(old('category_id') == $categorie->id) selected @endif>{{ $categorie->name }}</option>
              @endforeach
          </select>
      </div>
  </div>


  <div class="select-style-2">
    <div class="select-position">
        <select name="city">
            <option value="">Select city</option>
            @foreach ($citys->cities as $city)
                <option value="{{ $city }}" @if(old('city') == $city) selected @endif>{{ $city }}</option>
            @endforeach
        </select>
    </div>
</div>

    </div>
    <div class="card-style mb-30  col-xl-6   col-md-12 ">
      <div class="input-style-1">
        <label>Date_start</label>
        <input name="Date_start" type="datetime-local" value="{{ old('Date_start') }}" />
    </div>
    <div class="input-style-1">
        <label>Date_end</label>
        <input name="Date_end" type="datetime-local" value="{{ old('Date_end') }}" />
    </div>
    <div class="input-style-1">
        <label>Nombre De Places</label>
        <input name="Nombre_De_Places" type="number" placeholder="Nombre De Places" value="{{ old('Nombre_De_Places') }}" />
    </div>
    
      <button type="submit" class="btn btn-primary">Add Event</button>

    </div>
  </form>
  <div class="card-style mb-30 row   ">
    @foreach ($Events as $Event)
        
  
        <div class="card-style-5 mb-30 col-xl-4   col-md-12  g-2">
         
          <div class="card-content">
            <div class=" d-flex  justify-content-between ">
            <h4><a href="#0">{{ $Event->title }}</a></h4>
            <h6><span class="badge text-bg-warning">{{ $Event->validation_status }}</span></h6>
          </div>
          <div class=" d-flex  justify-content-between ">
            <h6 class=" text-black-50 "><a href="#0">catégorie : {{ $Event->category->name }}</a></h6>
            <h6><span class="badge text-bg-info">N :{{ $Event->Nombre_De_Places }}</span>            </h6>
          </div>
            <h6 class=" text-black-50 mb-2 "><a href="#0">City : {{ $Event->city }}</a></h6>
            <p>
              {{ $Event->description }}
            </p>
            <h6 class=" text-black-50 mt-4"><a href="#0"> <span class="badge text-bg-secondary">{{ $Event->Date_start }}</span> =>  <span class="badge text-bg-secondary">{{ $Event->Date_end }}</span></a></h6>

         
              <div class="action mt-3">
                <a class=" text-success  me-4" href="{{ route('form_update_event',$Event->id) }}"><i class="lni lni-brush"></i></a>

                {{-- <a class="text-danger " href="{{ route('delete_categorie',$categorie->id) }}"><i class="lni lni-trash-can"></i></a> --}}

                <button type="button" class="text-danger" onclick="confirmDelete({{ $Event->id }})" style="border: none; background-color: transparent;">
                  <i class="fa fa-trash-o" aria-hidden="true"></i> 
              </button>
              
              
                                            <form method="POST" id="formSubmit_{{ $Event->id }}" action="{{ route('delete_event',$Event->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                @csrf

                                            
                                                <script type="text/javascript">
                                            
                                                    function confirmDelete(eventId) {
                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You won't be able to revert this!",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!',
                                                            preConfirm: () => {
                                                              document.getElementById("formSubmit_" + eventId).submit();
}
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                Swal.fire(
                                                                    'Deleted!',
                                                                    'Your event has been deleted.',
                                                                    'success'
                                                                )
                                                            }
                                                        })
                                                    }
                                                </script>
                                            </form>
              </div>
        
          </div>
        </div>
        
        @endforeach
        <!-- end card -->
      </div>
</div>


    




@endsection