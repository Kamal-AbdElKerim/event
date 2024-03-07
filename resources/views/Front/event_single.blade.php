@extends('Front.layout.master')

@section('contant')
    


  <!-- Start Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Blog Single Sidebar</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog Single Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Blog Singel Area -->
<section class="section blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="single-inner">
                    <div class="post-details">
                        <div class="main-content-head">
                           
                            <div class="meta-information">
                                <h2 class="post-title">{{ $event->title }}
                                </h2>
                                <!-- End Meta Info -->
                                <ul class="meta-info">
                                    <li>
                                        <a href="javascript:void(0)">By {{ $event->user->name }}</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">{{ date("d M Y", strtotime($event->Date_start))  }}</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">{{ $event->city }}</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">category :{{ $event->category->name }}</a>
                                    </li>
                                </ul>
                                <!-- End Meta Info -->
                            </div>
                            <div class="detail-inner">
                                <p>{{ $event->description }}.</p>
                                
                        
                                <blockquote>
                                    <div class="icon">
                                        <i class="lni lni-quotation"></i>
                                    </div>
                                    <div class=" d-flex  justify-content-center  ">
                                    <h3 class="nav-link active" > {{ date("d M Y", strtotime($event->Date_start)) }}<span> {{ \Carbon\Carbon::parse($event->Date_start)->format('H:i:s') }}</span></h3>
                                    <h2 style="color: currentcolor"><i class="fa-solid fa-arrows-turn-right"></i></h2>
                                    <h3 class="nav-link active" > {{ date("d M Y", strtotime($event->Date_end)) }}<span> {{ \Carbon\Carbon::parse($event->Date_end)->format('H:i:s') }}</span></h3>
                                </div>
                                    {{-- <h4>{{ \Carbon\Carbon::parse($event->Date_start)->toDateString() }} =>  {{ \Carbon\Carbon::parse($event->Date_end)->toDateString() }}</h4> --}}
                                    {{-- <span>- Epictetus, The Enchiridion</span> --}}
                                </blockquote>
   
                             
                            </div>
                                                             <!-- Start Count Down Area -->
                            <div class="count-down ">
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
   
                            
                        <form method="post" action="{{ route('add_reservation',$event->id) }}">
                            @csrf
                            <div class="button  d-flex  justify-content-center ">
                              

                                        <div class="input-group w-25 ">
                                          <button class="btn btn-outline-secondary" type="button" id="subtractBtn">-</button>
                                          @if ($event->Nombre_De_Places - $totalQuantity->TotalQuantity == 0)
                                          <input type="text" class="form-control text-center" id="quantityInput" value="Out of stock" readonly>

                                          @else
                                          <input type="text" class="form-control text-center" id="quantityInput" value="1" readonly>

                                         @endif
                                          <button class="btn btn-outline-secondary ms-1 " type="button" id="addBtn">+</button>
                                        </div>
                                    
                                    </div>
                                    <div class="button d-flex  justify-content-center mt-3">
                                @if ($event->Nombre_De_Places - $totalQuantity->TotalQuantity == 0)
                                <button disabled type="submit" class="btn">Get Tickets<i class="lni lni-ticket"></i></button>
                                 @else
                                 <button type="submit" class="btn">Get Tickets<i class="lni lni-ticket"></i></button>
                                @endif
                            </div>
                          
                           <input type="number" id="quantity_num" name="quantity" value="1" style="display: none">

                        </form>
                           
                       
                        </div>
                    </div>
                </div>
            
            </div>
         
        </div>
    </div>
</section>
<!-- End Blog Singel Area -->

<script>
    const finaleDate = new Date("{{ $event->Date_start }}").getTime();

    const timer = () => {
        const now = new Date().getTime();
        console.log(now)
        let diff = finaleDate - now;
        if (diff < 0) {
            document.querySelector('.alert').style.display = 'block';
            document.querySelector('.container').style.display = 'none';
        }

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
        let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
        let seconds = Math.floor(diff % (1000 * 60) / 1000);

        days <= 99 ? days = `0${days}` : days;
        days <= 9 ? days = `00${days}` : days;
        hours <= 9 ? hours = `0${hours}` : hours;
        minutes <= 9 ? minutes = `0${minutes}` : minutes;
        seconds <= 9 ? seconds = `0${seconds}` : seconds;

        document.querySelector('#days').textContent = days;
        document.querySelector('#hours').textContent = hours;
        document.querySelector('#minutes').textContent = minutes;
        document.querySelector('#seconds').textContent = seconds;

    }
    timer();
    setInterval(timer, 1000);
</script>

   

@endsection

@section('js')
<script>
    var maxQuantity = {{ $event->Nombre_De_Places - $totalQuantity->TotalQuantity }};

    document.getElementById('addBtn').addEventListener('click', function() {
      var quantityInput = document.getElementById('quantityInput');
      var currentValue = parseInt(quantityInput.value);
      if (currentValue < maxQuantity) {
        quantityInput.value = currentValue + 1;
      }
      var quantity = document.getElementById('quantityInput').value 
       document.getElementById('quantity_num').value = quantity
      console.log(quantity)
    });

    document.getElementById('subtractBtn').addEventListener('click', function() {
      var quantityInput = document.getElementById('quantityInput');
      var currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
      var quantity = document.getElementById('quantityInput').value 
       document.getElementById('quantity_num').value = quantity
      console.log(quantity)
    });


  </script>
@endsection
