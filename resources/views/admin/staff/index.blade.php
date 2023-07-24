@extends('admin.base')
@section('content')
<div class="card-body">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Staff</h6>
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
                            <th>StaffNo</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
            
                    <tbody>
                      @if ($staff)

                      @foreach ($staff as $emp)
                        <tr>
                            <td>{{$emp->fname." ".$emp->lname}} </td>
                            <td>{{$emp->gender}}</td>
                            <td>{{$emp->phone}}</td>
                            <td>{{$emp->email}}</td>
                            <td>{{$emp->empNo}}</td>
                            <td>{{$emp->dept}}</td>
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