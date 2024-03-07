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
                <!-- Start Events Schedule Tab -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="one-tab" data-bs-toggle="tab" data-bs-target="#one"
                            type="button" role="tab" aria-controls="one" aria-selected="true">Day 1 <span>Mar 05,
                                2023</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#two"
                            type="button" role="tab" aria-controls="two" aria-selected="false">Day 2 <span>Mar 10,
                                2023</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="three-tab" data-bs-toggle="tab" data-bs-target="#three"
                            type="button" role="tab" aria-controls="three" aria-selected="false">Day 3 <span>Mar 15,
                                2023</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="four-tab" data-bs-toggle="tab" data-bs-target="#four"
                            type="button" role="tab" aria-controls="four" aria-selected="false">Day4
                            <span>Mar 30, 2023</span></button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <!-- Start Events Head -->
                        <div class="events-head">
                            @foreach ($events as $event)
                                
                         
                            <!-- Start Single Event -->
                            <div class="single-event">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="date">
                                            {{-- <h2>{{ $event->Nombre_De_Places }} </h2> --}}
                                            <p class="me-5 text-center align-items-center ">{{ $event->Nombre_De_Places }}<span>Tickets</span></p>

                                            <p >{{  date("Y-m-d", strtotime($event->Date_start)) }}<span>{{  date("Y-m-d", strtotime($event->Date_end)) }}</span></p>
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
        <div class="row">
            <div class="col-12 align-center">
                <div class="button details-button">
                    <a href="schedule.html" class="btn btn-alt">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Events Schedule Area -->

    @endsection
