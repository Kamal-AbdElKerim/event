
@extends('Front.layout.master')

@section('contant')

    
 

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Sign In</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Sign In</li>
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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            
                  <form method="POST" action="{{ route('login') }}">
                     @csrf

                <div class="signin-form form-style-two rounded-buttons">
                   <div class="row">
                    <h3>Sign In</h3>

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
                 
                 
                      <div class="col-md-12">
                         <div class="form-input">
                            <label>Password for your account</label>
                            <div class="input-items default">
                               <input name="password" type="password" placeholder="Password" />
                               <i class="lni lni-key"></i>
                            </div>
                         </div>
                         <!-- form input -->
                      </div>
                      <div class="col-md-12">
                         <div class="form-input">
                            <div class="input-items default">
                             <a href="{{ route('Reste_Passwored') }}">Forgotten password?                            </a>
                            </div>
                         </div>
                         <!-- form input -->
                      </div>

                   
                      <div class="col-md-6">
                         <div class="form-input rounded-buttons">
                            <button
                               class="btn primary-btn rounded-full"
                               type="submit"
                               >
                            Sign In!
                            </button>
                            
                         </div>
                         <!-- form input -->
                      </div>

                    </form>
                      <div class="col-md-6">
                         <div class="form-input rounded-buttons">
                         
                            <a class="btn primary-btn-outline rounded-full" href="{{ route('register') }}">Sign Up</a>
                         </div>
                         <!-- form input -->
                      </div>
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

  
    
