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
<form method="post" action="{{ route('Update_event',$event->id) }}">
  @csrf
  <div class="row">

      <div class="card-style mb-30 col-xl-6 col-md-12">
          <div class="input-style-1">
              <label>Titre</label>
              <input name="title" type="text" placeholder="Enter Titre" value="{{ old('title',$event->title) }}"/>
          </div>
          <!-- end input -->
          <div class="input-style-3">
              <textarea name="description" placeholder="Enter Description" rows="5">{{ old('description', $event->description) }}</textarea>
              <span class="icon"><i class="lni lni-text-format"></i></span>
          </div>
          <!-- end input -->

          <!-- end input -->
          <div class="select-style-2">
              <div class="select-position">
                  <select name="category_id">
                      <option value="">Select Category</option>
                      @foreach ($categories as $categorie)
                          <option value="{{ $categorie->id }}" @if(old('category_id', $event->category_id) == $categorie->id) selected @endif>{{ $categorie->name }}</option>
                      @endforeach
                  </select>
              </div>
          </div>

          <div class="select-style-2">
              <div class="select-position">
                  <select name="city">
                      <option value="">Select City</option>
                      @foreach ($citys->cities as $city)
                          <option value="{{ $city }}" @if(old('city', $event->city) == $city) selected @endif>{{ $city }}</option>
                      @endforeach
                  </select>
              </div>
          </div>

      </div>
      <div class="card-style mb-30 col-xl-6 col-md-12">
          <div class="input-style-1">
              <label>Date Start</label>
              <input name="Date_start" type="datetime-local" value="{{ old('Date_start', $event->Date_start) }}" />
          </div>
          <div class="input-style-1">
              <label>Date End</label>
              <input name="Date_end" type="datetime-local" value="{{ old('Date_end', $event->Date_end) }}" />
          </div>
          <div class="input-style-1">
              <label>Nombre De Places</label>
              <input name="Nombre_De_Places" type="number" placeholder="Enter Nombre De Places" value="{{ old('Nombre_De_Places', $event->Nombre_De_Places) }}" />
          </div>

          <button type="submit" class="btn btn-primary">Update Event</button>

      </div>
  </div>
</form>

 

    




@endsection