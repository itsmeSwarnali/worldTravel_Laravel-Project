<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link" title="This takes you to Home Page" >
        <span>
            <img src="adminAsset/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image"
            style="opacity: 1">
        </span>
        World Travel
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminAsset/dist/img/swarnali.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Swarnali Mollick</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{route('addPlaces')}}" class="nav-link">
                <i class="nav-icon fa-solid fa-plus"></i>
              <p>
                Add New Destination
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('newPlacesList')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                <span>Destination List</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('addPlacesBDForm')}}" class="nav-link">
                <i class="nav-icon fa-solid fa-plus"></i>
              <p>
                <span>Add Places</span>
                <span>of <strong>Bangladesh</strong></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('bdPlacesList')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                <span>Places List</span>
                <span>of <strong>Bangladesh</strong></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('bookingListView')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                <span>Booking List</span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
