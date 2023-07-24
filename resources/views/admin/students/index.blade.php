@extends('admin.base')
@section('content')
<div class="card-body">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Student</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                     
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>RegNo</th>
                            <th>School</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
            
                    <tbody>

                        @if ($students)

                        @foreach ($students as $student)
                         
                        <tr>
                            <td>{{$student->fname ." ".$student->lname}} </td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->email}}</td>
                            <td >{{$student->regno}}</td>
                            <td>{{$student->school}}</td>
                            <td>{{$student->dept}}</td>
                            <td><div class=" col justify-content-between  ">
                                <button class="btn badge-primary mt-2">Update</button>
                                <button class="btn badge-danger mt-2 ">Delete</button>                               
                                </div></td> 
                           
                          
                        </tr>

                            
                        @endforeach
                       






                            
                        @endif





                     
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>




 $(document).ready(function () {








    $('.td_comment').click(function (e) { 
        e.preventDefault();
        $(".comment").hide();
        
    });

    $(".td_comment").click(function (e) { 
        e.preventDefault();
        $(".td_comment").click(function (e) { 
            e.preventDefault();
            $(".comment").show();
        });
        
    });
 });



</script>
 





    
@endsection