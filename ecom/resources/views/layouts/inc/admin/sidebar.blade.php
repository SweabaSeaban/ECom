<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="menu-icon fas fa-poll"></i>
          <span class="menu-title">Sales</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon fas fa-list"></i>
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/category/create')}}">Add Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/category')}}">View Category</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#pro-basic" aria-expanded="false" aria-controls="pro-basic">
          <i class="menu-icon fas fa-tag"></i>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="pro-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Add Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">View Category</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="menu-icon fas fa-bars"></i>
          <span class="menu-title">Brands</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ur-basic" aria-expanded="false" aria-controls="ur-basic">
          <i class="menu-icon fa fa-user-plus"></i>
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ur-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Add Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">View Category</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <i class="menu-icon fa fa-archive"></i>
          <span class="menu-title">Home Slider</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon fas fa-cog"></i>
          <span class="menu-title">Site Settings</span>
        </a>
      </li>
    </ul>
  </nav>