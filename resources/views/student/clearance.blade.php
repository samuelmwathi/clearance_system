@extends('base')
@section('content')
<div class="row">
<div class="card-body">

  <form action="{{route('clearance_store')}}" method="post">
    @csrf
    <div>
       
      <input type="checkbox" value="cod" required  name="cod" id="cod" title="Clear with the Chair of Department">
      <label for="cod">Clear with the Chair of Department</label>
  </div>
     <div>
     
      <input type="checkbox" value="dos"  required name="dos" id="dos" title="Clear with the Dean of Students">
      <label for="dos">Clear with the Dean of Students</label>
     </div>
  
    <div>
     
      <input type="checkbox" required name="lib" id="lib" value="lib" title="Clear with the Library">
      <label for="lib">Clear with the Library</label>
    </div>
  
     <div>
     
      <input type="checkbox" required  name="games" id="games" value="games" title="Clear with the Games Department">
      <label for="games">Clear with the Games Department</label>
     </div>
  
    <div>
     
      <input type="checkbox" required name="societies" id="societies" value="societies" title="Clear with the clubs $ Societies">
      <label for="societies">Clear with the clubs $ Societies</label>
    </div>
  
     <div>
     
      <input type="checkbox" required name="fee" id="fee" value="fee" title="Clear with the Finance Office">
      <label for="fee">Clear with the Finance Office</label>
     </div>
  
   <div>
      
      <input type="checkbox" required name="deansch" id="deansch" title="Clear with the Dean of School ">
      <label for="deansch">Clear with the Dean of School</label>
  
   </div>
   <div class="row mb-0">
      <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{ __('submit') }}
          </button>
      </div>
  </div>






  </form>

  
    
    
        

    
    
    
    

   


                 

</div>  
</div>


<Script >

</Script>
@endsection











  
