@extends('base')
@section('content')
<div class="card-body">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Missing Mark Status</h1>
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Unit Name</th>
                            <th>Lecturer</th>
                            <th>Year</th>
                            <th>Semester</th>
                            <th>Cat</th>
                            <th>Exam</th>
                            <th>status</th>
                          
                        </tr>
                    </thead>
            
                    <tbody>
                        @if($missingmarks)

                        @foreach ($missingmarks as $marks)
                        <tr>
                            <td>{{$marks->unit_name}} </td>
                            <td>{{$marks->fname." ".$marks->lname}} </td>
                            <td>{{$marks->year}} </td>
                            <td>{{$marks->session}} </td>
                          
                            @if ($marks->cat==0)
                            <td class="cat">-</td>
 
                            @else
                            <td class="cat">{{$marks->cat}} </td>
  
                            @endif 

                            @if ($marks->exam==0)
                            <td  class="exam">-</td>
 
                            @else
                            <td  class="exam">{{$marks->exam}} </td>
  
                            @endif 


                            @if ($marks->status==-1)
                            <td><span class="badge badge-warning">pedding</span></td>
                            @else
                            @if ($marks->status==0)
                            <td><span class="badge badge-success">processed</span></td>   
                            @endif
                            <td><span class="badge badge-danger">Not Found</span></td>
                            @endif
                          
                          


                            
                           
                            




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
    var cat=$('.cat').text();
    var exam=$('.exam').text();
    console.log(exam); 
      if (cat===0) {
        console.log("success"); 
    }

   
   

    

   
  });

</script>
<!-- /.container-fluid -->
@endsection




