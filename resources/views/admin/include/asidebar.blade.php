<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('admin/dashboard')}}" class="brand-link">
    <img src="{{asset('assets/backend_assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Perky Rabbit</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="" class="d-block"></a>
        <p><span class="right badge badge-danger">
         


        </span></p>
      </div>
    </div>
    
    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        
        <!-- first slider start here -->
        <li class="nav-item">
          <a href="#" class="nav-link">
           <i class="fas fa-users"></i>
            <p style="margin-left: 2px;" >
             Product Section
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{url('add-product')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Store Product</p>
              </a>
            </li>


              <li class="nav-item">
              <a href="{{url('product')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Product</p>
              </a>
            </li>
          </ul>
        </li>
          
        <!-- first slider end here -->

        <li class="nav-item">
          <a href="#" class="nav-link">
           <i class="fas fa-users"></i>
            <p style="margin-left: 2px;" >
             Inventory Section
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="{{url('/inventory/create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Store Inventory</p>
              </a>
            </li>


              <li class="nav-item">
              <a href="{{url('inventory')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Inventory</p>
              </a>
            </li>
          </ul>
        </li>
            
     <li class="nav-item">
          <a href="{{url('/admin/logout')}}" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
            <p> Log out <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>  
        
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>