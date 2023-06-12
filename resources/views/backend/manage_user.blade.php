@extends('backend.layout.main')

@section('main_container')
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
              
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
           
                       
                        <div class="panel-body">
                        <form method="post" action="{{url('/manage_user')}}">
                            @csrf
                            <div class="table-responsive">
                            @if(session('success'))
							<span class="alert alert-success">{{session('success')}}</span>
						    @endif	
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                    <thead>
                                        <tr>
                                            <th>Emploee Id</th>
                                            <th>Employee Fname</th>
                                            <th>Employee lname</th>
                                          <!--  <th>profile</th>-->
                                            <th>Gender</th>
                                            <th>Phone No</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Email Id</th>
                                           
                                            <th>Status </th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>    
                            
                                    <tbody>
                                   
                                    @foreach($data as $d)
                                        <tr class="odd gradeX">
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->fname}}</td>
                                            <td>{{$d->lname}}</td>
                                        
                                            <td>{{$d->gender}}</td>
                                            <td>{{$d->phone_no}}</td>
                                            <td>{{$d->age}}</td>
                                            <td>{{$d->address}}</td>
                                            <td>{{$d->email}}</td>
                                            <td><a href="{{url('/manage_user/'.$d->id)}}" class="btn btn-Primary">Status</a></td>

                                            <td><a href="{{url('/manage_user/'.$d->id)}}" class="btn btn-danger">Delete</a></td>
                                            
                                         
                                            
                                            <td></td>
                                            <td></td>

                                        </tr>
                                       @endforeach
   
                                    </tbody>
                                 
                                </table>

                               
</div>

                                
                       
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
@endsection
</body>

</html>
