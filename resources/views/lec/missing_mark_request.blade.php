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
                            <th>Unit Name</th> 
                            <th>Unit Code</th>
                            <th>Year of Study</th>
                            <th>Session</th>
                            <th>Cat</th>
                            <th>Exam</th>
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
                            <form>
                                <td contenteditable="true">-</td>
                                <td contenteditable="true">-</td> 
                            </form>
                            <td><span class="badge badge-warning">pending</span></td>
                            <td><span class="btn badge-primary">Approve</span></td> 
                           
                          
                        </tr>
                     
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 
    
@endsection