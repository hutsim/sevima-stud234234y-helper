
<div class="d-flex align-items-center justify-content-between">
  <i class="bi bi-list toggle-sidebar-btn me-3"></i>
    <a href="/dashboard" class="logo d-flex align-items-center">
      <span class="d-none d-lg-block">Study Helper</span>
    </a>
  </div><!-- End Logo -->


  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      {{-- <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li> --}}
      <!-- End Search Icon-->

      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <i class="fas fa-user"></i>
          <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>{{auth()->user()->name}}</h6>
            <span>{{auth()->user()->email}}</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>


        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->