@extends('Front.layout.master')

@section('contant')
    
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="main__circle"></div>
        <div class="main__circle2"></div>
        <div class="main__circle3"></div>
        <div class="main__circle4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="hero-content">
                        <h5 class="wow zoomIn" data-wow-delay=".2s"><i class="lni lni-map-marker"></i> Waterfront Hotel,
                            London</h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">The Biggest Event Booking Platform 2024</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">In 2024, the global events industry witnessed a monumental transformation with the emergence of 
                            "The Biggest Event Booking Platform," an innovative digital platform that revolutionized event planning and management.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="pricing.html" class="btn ">Buy Ticket Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Count Down Area -->
    <div class="count-down">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box-head">
                        <div class="box-content">
                            <div class="box">
                                <h1 id="days">000</h1>
                                <h2 id="daystxt">Days</h2>
                            </div>
                            <div class="box">
                                <h1 id="hours">00</h1>
                                <h2 id="hourstxt">Hours</h2>
                            </div>
                            <div class="box">
                                <h1 id="minutes">00</h1>
                                <h2 id="minutestxt">Minutes</h2>
                            </div>
                            <div class="box">
                                <h1 id="seconds">00</h1>
                                <h2 id="secondstxt">Secondes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Count Down Area -->

    <!-- Start Features Area -->
    <section class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Why join eventGrids?</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Why you should Join Event</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Feature -->
                    <div class="single-featuer">
                        <img class="shape" src="assets/images/features/shape.svg" alt="#">
                        <img class="shape2" src="assets/images/features/shape2.svg" alt="#">
                        <span class="serial">01</span>
                        <div class="service-icon">
                            <i class="lni lni-microphone"></i>
                        </div>
                        <h3>Great Speakers</h3>
                        <p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
                            from.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Feature -->
                    <div class="single-featuer">
                        <img class="shape" src="assets/images/features/shape.svg" alt="#">
                        <img class="shape2" src="assets/images/features/shape2.svg" alt="#">
                        <span class="serial">02</span>
                        <div class="service-icon">
                            <i class="lni lni-users"></i>
                        </div>
                        <h3>New People</h3>
                        <p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
                            from.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Feature -->
                    <div class="single-featuer">
                        <img class="shape" src="assets/images/features/shape.svg" alt="#">
                        <img class="shape2" src="assets/images/features/shape2.svg" alt="#">
                        <span class="serial">03</span>
                        <div class="service-icon">
                            <i class="lni lni-bullhorn"></i>
                        </div>
                        <h3>Global Event</h3>
                        <p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
                            from.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Feature -->
                    <div class="single-featuer">
                        <img class="shape" src="assets/images/features/shape.svg" alt="#">
                        <img class="shape2" src="assets/images/features/shape2.svg" alt="#">
                        <span class="serial">04</span>
                        <div class="service-icon">
                            <i class="lni lni-heart"></i>
                        </div>
                        <h3>Get Inspired</h3>
                        <p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
                            from.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Feature -->
                    <div class="single-featuer">
                        <img class="shape" src="assets/images/features/shape.svg" alt="#">
                        <img class="shape2" src="assets/images/features/shape2.svg" alt="#">
                        <span class="serial">05</span>
                        <div class="service-icon">
                            <i class="lni lni-cup"></i>
                        </div>
                        <h3>Networking Session</h3>
                        <p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
                            from.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Feature -->
                    <div class="single-featuer">
                        <img class="shape" src="assets/images/features/shape.svg" alt="#">
                        <img class="shape2" src="assets/images/features/shape2.svg" alt="#">
                        <span class="serial">06</span>
                        <div class="service-icon">
                            <i class="lni lni-happy"></i>
                        </div>
                        <h3>Meet New Faces</h3>
                        <p>How you transform your business as tech, consumer, habits industry dynamic change, Find out
                            from.</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Features Area -->

    <!-- Start About Area -->
    <section class="about section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 wow fadeIn" data-wow-delay=".4s">
                    <div class="about-image">
                        <div class="video-head wow fadeIn" data-wow-delay="0.4s">
                            <a href="https://www.youtube.com/watch?v=Gxw45q3Ga3k" class="glightbox video"><i
                                    class="lni lni-play"></i></a>
                        </div>
                        <img src="assets/images/about/about-image.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-12 wow fadeIn" data-wow-delay=".6s">
                    <div class="content">
                        <h4>Get Experience</h4>
                        <h2>About The Event</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam, quis nostrud exercitation.
                        </p>
                        <p>Adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris.
                        </p>
                        <div class="date">
                            <h4><span>25th</span> December’ 2023</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->


    <!-- Start Events Schedule Area -->
    <section class="events-schedule section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Events</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Events Schedule</h2>
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
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>8:00 AM - 08:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event1.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Media est eligendi oatio cumrue</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>9:00 AM - 09:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event2.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Exercitationem ullam cororis
                                                            sure</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>10:00 AM - 10:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event3.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Reprehenderit rui in ea
                                                            volutate</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                            </div>
                            <!-- End Events Head -->
                        </div>
                        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <!-- Start Events Head -->
                            <div class="events-head">
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>8:00 AM - 08:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event1.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Media est eligendi oatio cumrue</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12 align-right">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>9:00 AM - 09:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event2.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Exercitationem ullam cororis
                                                            sure</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12 align-right">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>10:00 AM - 10:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event3.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Reprehenderit rui in ea
                                                            volutate</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12 align-right">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                            </div>
                            <!-- End Events Head -->
                        </div>
                        <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
                            <!-- Start Events Head -->
                            <div class="events-head">
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>8:00 AM - 08:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event1.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Media est eligendi oatio cumrue</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12 align-right">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>9:00 AM - 09:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event2.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Exercitationem ullam cororis
                                                            sure</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12 align-right">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>10:00 AM - 10:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event3.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Reprehenderit rui in ea
                                                            volutate</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12 align-right">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                            </div>
                            <!-- End Events Head -->
                        </div>
                        <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
                            <!-- Start Events Head -->
                            <div class="events-head">
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>8:00 AM - 08:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event1.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Media est eligendi oatio cumrue</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12 align-right">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>9:00 AM - 09:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event2.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Exercitationem ullam cororis
                                                            sure</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12 align-right">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
                                <!-- Start Single Event -->
                                <div class="single-event">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="date">
                                                <h2>30</h2>
                                                <p>March<span>10:00 AM - 10:45 AM</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-12">
                                            <div class="event-info">
                                                <div class="image">
                                                    <img src="assets/images/events/event3.jpg" alt="#">
                                                </div>
                                                <div class="info">
                                                    <h4>
                                                        <a href="javascript:void(0)">Reprehenderit rui in ea
                                                            volutate</a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="lni lni-user"></i>
                                                            <a href="javascript:void(0)"> By: Andio Lexa</a>
                                                        </li>
                                                        <li><i class="lni lni-map-marker"></i>
                                                            <a href="javascript:void(0)"> At: Prism Club,
                                                                USA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-12 align-right">
                                            <div class="button">
                                                <a class="btn" href="javascript:void(0)">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Event -->
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



    <!-- Start Blog Section Area -->
    <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Blogs</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Latest News</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="blog-single.html">
                                <img src="assets/images/blog/blog1.jpg" alt="#">
                            </a>
                            <p class="date">
                                29
                                <span class="day">
                                    Nov
                                </span>
                            </p>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Events</a>
                            <h4>
                                <a href="blog-single.html">3 Best Practices for Keeping Your Event Clients
                                    Happy</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
                                magna.</p>
                            <a href="blog-single.html" class="more-btn">Read Blog <i
                                    class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Blog -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="blog-single.html">
                                <img src="assets/images/blog/blog2.jpg" alt="#">
                            </a>
                            <p class="date">
                                15
                                <span class="day">
                                    Mar
                                </span>
                            </p>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Conference</a>
                            <h4>
                                <a href="blog-single.html">Adding a New Digital Dimension to Your Next Special Event</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
                                magna.</p>
                            <a href="blog-single.html" class="more-btn">Read Blog <i
                                    class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="blog-single.html">
                                <img src="assets/images/blog/blog3.jpg" alt="#">
                            </a>
                            <p class="date">
                                30
                                <span class="day">
                                    Jan
                                </span>
                            </p>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Marketing</a>
                            <h4>
                                <a href="blog-single.html">West Elm At Evantor 2023 + Room Makeover Competition!</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
                                magna.</p>
                            <a href="blog-single.html" class="more-btn">Read Blog <i
                                    class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section Area -->

    @endsection


