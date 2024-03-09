@extends('Dashboard.layout_Dashboard.master')

@section('title')
    Dashboard Organisateur
@endsection
@section('css')
    
@endsection

@section('content')

    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>eCommerce Dashboard</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        eCommerce
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
      
        
        
          <div class="row">
            <div class="col-lg-7">
              <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left">
                    <h6 class="text-medium mb-2">Sales Forecast</h6>
                  </div>
               
                </div>
                <!-- End Title -->
                <div class="chart">
                  <div id="legend3">
                    <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                      <li>
                        <div class="d-flex">
                          <span class="bg-color primary-bg"> </span>
                          <div class="text">
                            <p class="text-sm text-success">
                              <span class="text-dark">Revenue</span> +25.55%
                              <i class="lni lni-arrow-up"></i>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="d-flex">
                          <span class="bg-color purple-bg"></span>
                          <div class="text">
                            <p class="text-sm text-success">
                              <span class="text-dark">Net Profit</span> +45.55%
                              <i class="lni lni-arrow-up"></i>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="d-flex">
                          <span class="bg-color orange-bg"></span>
                          <div class="text">
                            <p class="text-sm text-danger">
                              <span class="text-dark">Order</span> -4.2%
                              <i class="lni lni-arrow-down"></i>
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <canvas id="Chart3" style="width: 100%; height: 450px; margin-left: -35px;"></canvas>
                </div>
              </div>
            </div>
            <!-- End Col -->
            <div class="col-lg-5">
             
                <div class="col-xl-12 col-lg-4 col-sm-6">
                  <div class="icon-card mb-30">
                    <div class="icon purple">
                      <i class="lni lni-cart-full"></i>
                    </div>
                    <div class="content">
                      <h6 class="mb-10">New Orders</h6>
                      <h3 class="text-bold mb-10">34567</h3>
                      <p class="text-sm text-success">
                        <i class="lni lni-arrow-up"></i> +2.00%
                        <span class="text-gray">(30 days)</span>
                      </p>
                    </div>
                  </div>
                  <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-12 col-lg-4 col-sm-6">
                  <div class="icon-card mb-30">
                    <div class="icon success">
                      <i class="lni lni-dollar"></i>
                    </div>
                    <div class="content">
                      <h6 class="mb-10">Total Income</h6>
                      <h3 class="text-bold mb-10">$74,567</h3>
                      <p class="text-sm text-success">
                        <i class="lni lni-arrow-up"></i> +5.45%
                        <span class="text-gray">Increased</span>
                      </p>
                    </div>
                  </div>
                  <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-12 col-lg-4 col-sm-6">
                  <div class="icon-card mb-30">
                    <div class="icon primary">
                      <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="content">
                      <h6 class="mb-10">Total Expense</h6>
                      <h3 class="text-bold mb-10">$24,567</h3>
                      <p class="text-sm text-danger">
                        <i class="lni lni-arrow-down"></i> -2.00%
                        <span class="text-gray">Expense</span>
                      </p>
                    </div>
                  </div>
                  <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-12 col-lg-4 col-sm-6">
                  <div class="icon-card mb-30">
                    <div class="icon orange">
                      <i class="lni lni-user"></i>
                    </div>
                    <div class="content">
                      <h6 class="mb-10">New User</h6>
                      <h3 class="text-bold mb-10">34567</h3>
                      <p class="text-sm text-danger">
                        <i class="lni lni-arrow-down"></i> -25.00%
                        <span class="text-gray"> Earning</span>
                      </p>
                    </div>
                  </div>
                  <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
            
              <!-- End Row -->

            </div>
            <!-- End Col -->
          </div>
      
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->
    




@endsection

@section('js')
    <script>
            const ctx3 = document.getElementById("Chart3").getContext("2d");
            const array = [];
            @foreach ($reservations_conut as $element)
                  array.push({{ $element->quantity }});
              @endforeach

    const chart3 = new Chart(ctx3, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "Visitors",
            backgroundColor: "transparent",
            borderColor: "#9b51e0",
            data: array,
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#9b51e0",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#fff",
            pointHoverBorderWidth: 3,
            borderWidth: 5,
            pointRadius: 5,
            pointHoverRadius: 8,
            fill: false,
            cubicInterpolationMode: "monotone", // Add this line for curved line
          },
        ],
      },
      options: {
        plugins: {
          tooltip: {
            callbacks: {
              labelColor: function (context) {
                return {
                  backgroundColor: "rgba(104, 110, 255, .0)",
                };
              },
            },
            intersect: false,
            backgroundColor: "#fbfbfb",
            titleColor: "#8F92A1",
            bodyColor: "#272727",
            titleFont: {
              fontSize: 16,
              fontFamily: "Plus Jakarta Sans",
              fontStyle: "400",
              display: false,
            },
            bodyFont: {
              family: "Plus Jakarta Sans",
              size: 16,
            },
            multiKeyBackground: "transparent",
            displayColors: false,
            padding: 15,
            borderColor: "rgba(143, 146, 161, .1)",
            borderWidth: 1,
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        // maintainAspectRatio: false,
        layout: {
          padding: {
            top: 0,
          },
        },
        title: {
          display: false,
        },
        legend: {
          display: false,
        },
        scales: {
          y: {
            grid: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 300,
              min: 50,
            },
          },
          x: {
            grid: {
              display: false,
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
            },
          },
        },
      },
    });
    </script>
@endsection