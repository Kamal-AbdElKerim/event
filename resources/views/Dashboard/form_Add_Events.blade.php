@extends('Dashboard.layout_Dashboard.master')



@section('content')
<div class="row">
<div class="card-style mb-30  col-xl-6   col-md-12 ">
    <div class="input-style-1">
      <label>titre</label>
      <input name="titre" type="text" placeholder="titre" />
    </div>
    <!-- end input -->
    <div class="input-style-3">
        <textarea name="Description" placeholder="Description" rows="5"></textarea>
        <span class="icon"><i class="lni lni-text-format"></i></span>
      </div>
    <!-- end input -->

    <!-- end input -->
    <div class="select-style-2">
        <div class="select-position">
          <select name="category">
            <option value="">Select category</option>
            <option value="">Category one</option>
            <option value="">Category two</option>
            <option value="">Category three</option>
          </select>
        </div>
      </div>


    <div class="select-style-2">
        <div class="select-position">
          <select name="city">
            <option value="">Select city</option>
            <option value="">Category one</option>
            <option value="">Category two</option>
            <option value="">Category three</option>
          </select>
        </div>
      </div>
    </div>
    <div class="card-style mb-30  col-xl-6   col-md-12 ">
      <div class="input-style-1">
        <label>Date_start</label>
        <input name="date_start" type="datetime-local" />
      </div>
      <div class="input-style-1">
        <label>Date_end</label>
        <input name="date_end" type="datetime-local" />
      </div>
      <div class="input-style-1">
        <label>Nombre De Places</label>
        <input name="nombre_de_places" type="number" placeholder="Nombre De Places" />
      </div>
      <button type="button" class="btn btn-primary">Add Event</button>
      
    </div>

  <div class="card-style mb-30 row   ">
        <div class="card-style-5 mb-30 col-xl-6   col-md-12">
         
          <div class="card-content">
            <h4><a href="#0">Card Title here </a></h4>
            <h6 class=" text-black-50 "><a href="#0">catégorie : </a></h6>
            <h6 class=" text-black-50 mb-2 "><a href="#0">City </a></h6>
            <p>
              With supporting text below as a natural lead-in to
              additional content. consectetur adipiscing elit. Integer
              posuere erat a ante.
            </p>
            <h6 class=" text-black-50 mt-4"><a href="#0">date start : 08:20 => date end : 08:20</a></h6>

            <a href="#0" class="main-btn primary-btn btn-hover">Update</a>
            <a href="#0" class="main-btn  danger-btn  btn-hover">Delete</a>
          </div>
        </div>
        
    
        <!-- end card -->
      </div>
</div>


    




@endsection