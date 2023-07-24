@extends('lec.base')
@section('content')
<div class="card-body">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All My Units</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>RegNo</th>
                            <th>Name</th>
                            <th>Year of Study</th>
                            <th>Department</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Action</th>

                            
                           
                          
                        </tr>
                    </thead>
            
                    <tbody>
                        <tr>
                            <td>Business Application Software </td>
                            <td>Michiel Ujunju</td>
                            <td>2021/202</td>
                            <td>Sem 1</td>
                            <td class="td_comment"><div contenteditable="true" ></div></td>
                            <td><span class="badge badge-warning">pending</span></td>
                            <td><div class=" col justify-content-between  ">
                                <button class="btn badge-primary mt-2">Approve</button>
                                <button class="btn badge-danger mt-2 ">Deny</button>                               
                                </div></td> 
                           
                          
                        </tr>
                     
                       
                       
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