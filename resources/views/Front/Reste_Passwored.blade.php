
@extends('Front.layout.master')

@section('contant')

    
 

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Rest Password</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Rest Password</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

   <!--====== SIGNIN ONE PART START ======-->
<section class="signin-area signin-one">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-5">

   
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        
            
        <form method="POST" action="{{ route('password.email') }}">
         @csrf

                <div class="signin-form form-style-two rounded-buttons">
                   <div class="row">
                    <h3>Rest Password</h3>

                      <div class="col-md-12">
                         <div class="form-input">
                            <label>Your account will be under this email</label>
                            <div class="input-items default">
                               <input name="email" type="text" placeholder="Email" />
                               <i class="lni lni-envelope"></i>
                            </div>
                         </div>
                         <!-- form input -->
                      </div>
                      @if ($errors->has('email'))
                      <div class="alert alert-danger" role="alert">
                          {{ $errors->first('email') }}
                      </div>
                  @endif
                  

                 
                

                   
                      <div class=" d-flex  justify-content-center ">
                         <div class="form-input rounded-buttons">
                            <button
                               class="btn primary-btn rounded-full"
                               type="submit"
                               >
                            Rest Password
                            </button>
                            
                         </div>
                         <!-- form input -->
                      </div>

                    </form>
                    
                      <div class="col-md-12">
                         <div class="form-input text-center">
                            <p class="text">
                               By signing in you agree with the
                               <a href="javascript:void(0)">Terms and Conditions</a>
                               and
                               <a href="javascript:void(0)">Privacy</a>
                            </p>
                         </div>
                         <!-- form input -->
                      </div>
                   </div>
                </div>
                <!-- signin form -->
             
          </div>
       </div>
       <!-- row -->
    </div>
    <!-- container -->
 </section>
 <!--====== SIGNIN ONE PART ENDS ======-->


 @endsection 

  
    
