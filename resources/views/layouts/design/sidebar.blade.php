<!-- Sidebar Navigation-->
<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{asset('admin_assets/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5"> {{Auth::user()->name}}</h1>
        <p> {{Auth::user()->email}}</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>
             <li class="{{ Request::is('admin/driver*') ? 'active' : '' }}"><a href="{{url('admin/driver')}}"> <i class="icon-user-1"></i>Driver </a></li>
            <li class="{{ Request::is('admin/van*') ? 'active' : '' }}"><a href="{{url('admin/van')}}"> <i class="fa fa-bus"></i>Van </a></li>
            <li class="{{ Request::is('admin/trip*') ? 'active' : '' }}"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Trips</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{url('admin/trip/create')}}">Add Trips</a></li>
                <li><a href="{{url('admin/trip/')}}">View Trips</a></li>
               
              </ul>
            </li>
           
           
    </ul>
  </nav>
  <!-- Sidebar Navigation end-->