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
<form method="post" action="{{ route('update_Category',$category->id) }}">
  @csrf

<div class="card-style mb-30">
  <div class="input-style-1">
    <label>Title Category</label>
    <input name="name" type="text" placeholder="Category" value="{{ $category->name }}" />
  </div>
<button type="submit" class="btn btn-primary">Update Category</button>
</div>
</form>




    




@endsection