@extends('Front.layout.master')

@section('contant')

  

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Sign Up</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <!--====== SIGNIN ONE PART START ======-->
<section class="signin-area signin-one">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-5">
            <form method="POST" action="{{ route('register') }}">
               @csrf
                <div class="signin-form form-style-two rounded-buttons">
                   <div class="row">
                     <h3>Sign Up</h3>
                    <div class="col-md-12">
                        <div class="form-input">
                           <label>
                           Name will be used to personalize your experience
                           </label>
                           <div class="input-items default">
                              <input name="name" type="text" placeholder="Name" value="{{ old('name') }}" />
                              <i class="lni lni-user"></i>
                           </div>
                        </div>
                        <!-- form input -->
                     </div>
                      <div class="col-md-12">
                         <div class="form-input">
                            <label>Your account will be under this email</label>
                            <div class="input-items default">
                               <input name="email" type="text" placeholder="Email" value="{{ old('email') }}" />
                               <i class="lni lni-envelope"></i>
                            </div>
                         </div>
                         <!-- form input -->
                      </div>
                      <div class="col-md-12">
                         <div class="form-input">
                            <label>Your account will be under this Adresse</label>
                            <div class="input-items default">
                               <input name="adresse" type="text" placeholder="Adresse" value="{{ old('adresse') }}" />
                               <i class="lni lni-map-marker"></i>                            </div>
                         </div>
                         <!-- form input -->
                      </div>
                      <div class="col-md-12">
                        <div class="form-input">
                        <label>Your account will be under this Adresse</label>

                      <select name="role" class="form-select" aria-label="Default select example">
                        <option selected value="User">User</option>
                        <option value="Organisateur">Organisateur</option>
                      </select>
                     </div>
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
                            <label>Password Confirmation</label>
                            <div class="input-items default">
                               <input name="password_confirmation" type="password" placeholder="Password" />
                               <i class="lni lni-key"></i>
                            </div>
                         </div>
                         <!-- form input -->
                      </div>
                 
                      <div class="col-md-6 mt-2">
                         <div class="form-input rounded-buttons">
                            <button
                               class="btn primary-btn-outline rounded-full"
                               type="submit"
                               >
                            Sign Up
                            </button>
                         </div>
                         <!-- form input -->
                      </div>
                     </form>
                      <div class="col-md-6 mt-2">
                        <div class="form-input rounded-buttons">
                       
                           <a class="btn primary-btn rounded-full" href="{{ route('login') }}"> Sign In!</a>
                           
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

