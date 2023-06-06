<!DOCTYPE html>
<html>


@extends('backend.layout.main')

@section('main_container')
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        
                                        <div class="form-group">
                                            <label>Employee First name</label>
                                            <input class="form-control" placeholder="Firast Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Employee Last name</label>
                                            <input class="form-control" placeholder="Surname Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email id">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone no</label>
                                            <input class="form-control" placeholder="number ">
                                        </div>

                                       
                                        <div class="form-group">
                                            <label>Photo </label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Address </label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        
                                  
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="Male" value="option1" checked>Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="Female" value="option2">Female
                                                </label>
                                            </div>
                                          
                                        </div>
                                     
                                        <div class="form-group">
                                            <label>Select City</label>
                                            <select class="form-control">
                                                <option>Ahmedabad</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                      
                                       <!-- <button type="submit" class="btn btn-primary">Submit Button</button>-->

                                        <input type="submit" name="submit" value="Submit" class="">

                                        
                                    </form>
                                </div>
                                
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

    @endsection
</body>

</html>
