@extends('base')
@section('content')
<div class="card-body">
    <!-- Page Heading -->
  

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Clearance Status</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Officer Name</th>
                            <th>Department</th>
                            <th>Date Of Submition</th>
                            <th>Date Processed</th>
                            <th>Status</th>                                           
                        </tr>
                    </thead>
            
                    <tbody>

                        @if ($clearance)
                        @foreach ($clearance as $office)
                        <tr>
                            <td>{{$office->officer_name}} </td>
                            <td>{{$office->depatment}} </td>
                            <td>{{$office->date_of_submission}} </td>
                            <td>{{$office->date_processed}} </td>
                            @if($office->status==-1)
                            <td><span class="badge badge-warning">pending</span></td>
                            @endif

                            @if ($office->status==0)
                            <td><span class="badge badge-success">cleared</span></td>
                          
                            @endif

                            
                            @if ($office->status==1)
                            <td><span class="badge badge-danger">denied</span></td>
                            
                           
                          
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
 









    
@endsection