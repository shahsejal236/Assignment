@extends('frontend.layout.main')

@section('main_container')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Login Here</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="userindex">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="row g-3">
                            

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                    <form action="{{url('login_check')}}" method="post" enctype="multipart/formd-data" >
							@csrf
                            
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control"  name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <br>                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control"  name="password" placeholder="Password">
                                        <label for="subject">Password</label>
                                    </div>
                                </div>
                                <br>     
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" placeholder="Confirmpassword">
                                        <label for="subject">Confirm Password</label>
                                    </div>
                                </div>
                                <div>
                                <br>     
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                                    <a href="signup" class="nav-item nav-link" value="">If Not Register ...?? Then Register here</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    @endsection