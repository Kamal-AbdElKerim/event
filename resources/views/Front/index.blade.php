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
                            <a href="{{ route('events') }}" class="btn ">Buy Ticket Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    {{-- <!-- Start Count Down Area -->
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
    <!-- End Count Down Area --> --}}

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







    @endsection


