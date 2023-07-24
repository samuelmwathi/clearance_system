<div>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Mmust Clearance System</div>
     </a>
 
     <!-- Divider -->
     <hr class="sidebar-divider my-0">
 
     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="index.html">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>
 
     <!-- Divider -->
 
 
     <!-- Heading -->
     <div class="sidebar-heading">
         Interface
     </div>
 
  
 
     <!-- Heading -->
     <div class="sidebar-heading">
         Addons
     </div>
 
     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="tables.html">
             <i class="fas fa-fw fa-table"></i>
             <span>News & Events</span></a>
     </li>
     
     <li class="nav-item">
         <a class="nav-link" href="tables.html">
             <i class="fas fa-fw fa-table"></i>
             <span>Units</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#units"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Units</span>
         </a>
         <div id="units" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">My Units:</h6>
                 <a class="collapse-item" href="{{route('all_units')}}">All Units</a>
                 <a class="collapse-item" href="{{route('missing_mark_request')}}">Missing Mark Request</a>
             </div>
         </div>
     </li>
    
    
     <li class="nav-item">
         <a class="nav-link" href="tables.html">
             <i class="fas fa-fw fa-table"></i>
             <span>Messages</span></a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="{{route("admin_clearance_index")}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Clearance</span></a>
    </li>
 
 
 
 
 
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">
 
     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
 
    
 
 </ul>
 <!-- End of Sidebar -->
 </div>