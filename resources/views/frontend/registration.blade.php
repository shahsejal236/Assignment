@extends('frontend.layout.main')

@section('main_container')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Register Here</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="userindex">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Registration</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Frist Name</label>
                                    </div>
                                </div>
                              <!--  <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                        <div>
										<label for="subject">Gender</label>
										<br>
                                            Male:<input type="radio" name="gen" value="Male">
											Female:<input type="radio" name="gen" value="Female">
                                            
                                        </div>
                                        <div class="form-floating">
                                        <input type="textarea" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Address </label>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Age </label>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Address </label>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Password</label>
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="file" name="file" class="form-control" id="email" placeholder="Your file">
                                            <label for="email">Your file</label>
                                        </div>
                                    </div>
-->
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Register </button>
                                    <a href="login" class="nav-item nav-link" value="">If Alreadyy Register ...?? Then login here</a>
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