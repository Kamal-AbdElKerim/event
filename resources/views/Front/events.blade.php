@extends('Front.layout.master')



@section('contant')



    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">events</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Home</a></li>
                            <li>events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
  <!-- Start Events Schedule Area -->
  <section class="events-schedule section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Events</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Events</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button onclick="searchByTitle('')" class="nav-link" id="one-tab" data-bs-toggle="tab" data-bs-target="#one"
                            type="button" role="tab" aria-controls="one" aria-selected="true">All</span></button>
                    </li>
                    @foreach ($categories as $item)
                    <li class="nav-item" role="presentation">
                        <button onclick="searchByTitle('{{ $item->name }}')" class="nav-link" id="one-tab" data-bs-toggle="tab" data-bs-target="#one"
                            type="button" role="tab" aria-controls="one" aria-selected="true">{{ $item->name }}</span></button>
                    </li>
                    @endforeach
                </ul>
                <!-- Start Events Schedule Tab -->
                <ul class="nav nav-tabs  d-flex  justify-content-start" id="myTab" role="tablist">
                   
                        {{-- <div class="input-group mb-3 w-25 ">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input id="SearchByTiltle" type="text" class="form-control" placeholder="Search Here..." aria-label="Username" aria-describedby="basic-addon1">
                          </div> --}}
                        <div class="input-group mb-3 w-25 ">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input id="searchInput" type="text" class="form-control" placeholder="Search Here..." aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                    
                </ul>
           
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <!-- Start Events Head -->
                        <div class="events-head" id="ajax_events">
                            @foreach ($events as $event)
                            <!-- Start Single Event -->
                            <div class="single-event">  
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="date">
                                            <p class="me-5 text-center align-items-center ">{{ $event->Nombre_De_Places }}<span>Tickets</span></p>
                                            <p>{{ date("Y-m-d", strtotime($event->Date_start)) }}<span>{{ date("Y-m-d", strtotime($event->Date_end)) }}</span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-12">
                                        <div class="event-info">
                                            <div class="image">
                                                <img src="assets/images/events/event1.jpg" alt="#">
                                            </div>
                                            <div class="info">
                                                <h4>
                                                    <a href="javascript:void(0)">{{ $event->title }}</a>
                                                </h4>
                                                <ul>
                                                    <li><i class="lni lni-user"></i>
                                                        <a href="javascript:void(0)"> By: {{ $event->user->name }}</a>
                                                    </li>
                                                    <li><i class="lni lni-map-marker"></i>
                                                        <a href="javascript:void(0)"> At: {{ $event->city }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-12">
                                        <div class="button">
                                            <a class="btn" href="{{ route('events_single',$event->id) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Event -->
                            @endforeach
                        </div>
                        <!-- End Events Head -->
                    </div>


                </div>
                <!-- End Events Schedule Tab -->
            </div>
        </div>
      
     
    
        {{-- <div class="row">
            <div class="col-12 align-center">
                <div class="button details-button">
                    <a href="schedule.html" class="btn btn-alt">Load More</a>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- End Events Schedule Area -->

    @endsection
@section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    

    let events = []

  setTimeout(() => {
    events  = document.querySelectorAll('.single-event');
    console.log(events)
  }, 1000);
  
    searchInput.addEventListener('input', function () {
        const query = searchInput.value.trim().toLowerCase();
        // console.log(query)
        events.forEach(function (event) {
            const title = event.querySelector('.info h4 a').textContent.toLowerCase();
            console.log(title)
            if (title.includes(query)) {
                event.classList.remove('hidden');
            } else {
                event.classList.add('hidden');
            }
        });
    });
});
</script>
<script>
    $(document).ready(function(){
        searchByTitle('');

        $(document).on('input', '#SearchByTiltle', function() {
            var searchByTitleValue = $(this).val();
            searchByTitle(searchByTitleValue);
        });

        // Handle click on pagination links
        $(document).on('click', "#ajax_search_pagination a", function(e) {
            e.preventDefault();
            var searchByTitleValue = $('#SearchByTiltle').val();
            $.ajax({
                url: $(this).attr("href"),
                type: 'post',
                dataType: 'html',
                cache: false,
                data: { SearchByTiltle: searchByTitleValue, "_token": "{{ csrf_token() }}" },
                success: function(data) {
                    $("#ajax_events").html(data);
                },
                error: function() {}
            });
        });

        // Function to handle search by title
        function searchByTitle(value) {
            $.ajax({
                url: "{{ route('Ajax_Search') }}",
                type: 'post',
                dataType: 'html',
                cache: false,
                data: { SearchByTiltle: value, "_token": "{{ csrf_token() }}" },
                success: function(data) {
                    $("#ajax_events").html(data);
                },
                error: function() {}
            });
        }
    });

    function searchByTitle(value) {
            $.ajax({
                url: "{{ route('Ajax_Search') }}",
                type: 'post',
                dataType: 'html',
                cache: false,
                data: { SearchByTiltle: value, "_token": "{{ csrf_token() }}" },
                success: function(data) {
                    $("#ajax_events").html(data);
                },
                error: function() {}
            });
        }
</script>
@endsection
    

{{-- <script>
    $(document).ready(function(){
        searchByTitle('');

        $(document).on('input', '#SearchByTiltle', function() {
            var searchByTitleValue = $(this).val();
            searchByTitle(searchByTitleValue);
        });

        // Handle click on pagination links
        $(document).on('click', "#ajax_search_pagination a", function(e) {
            e.preventDefault();
            var searchByTitleValue = $('#SearchByTiltle').val();
            $.ajax({
                url: $(this).attr("href"),
                type: 'post',
                dataType: 'html',
                cache: false,
                data: { SearchByTiltle: searchByTitleValue, "_token": "{{ csrf_token() }}" },
                success: function(data) {
                    $("#ajax_events").html(data);
                },
                error: function() {}
            });
        });

        // Function to handle search by title
        function searchByTitle(value) {
            $.ajax({
                url: "{{ route('Ajax_Search') }}",
                type: 'post',
                dataType: 'html',
                cache: false,
                data: { SearchByTiltle: value, "_token": "{{ csrf_token() }}" },
                success: function(data) {
                    $("#ajax_events").html(data);
                },
                error: function() {}
            });
        }
    });

    
</script> --}}
