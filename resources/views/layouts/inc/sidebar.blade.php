<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a class="simple-text logo-normal">
        CoderBus
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : ''}} ">
          <a class="nav-link" href="#">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('categories') ? 'active' : ''}}">
          <a class="nav-link" href="{{ url('categories') }}">
            <i class="material-icons">person</i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('add-category') ? 'active' : ''}}">
            <a class="nav-link" href="{{ url('add-category') }}">
            <i class="material-icons">add_box</i>
            <p>Add Categories</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('products') ? 'active' : ''}}">
            <a class="nav-link" href="{{ url('products') }}">
              <i class="material-icons">person</i>
              <p>Vehicle List</p>
            </a>
          </li>
        <li class="nav-item {{ Request::is('add-products') ? 'active' : ''}}">
            <a class="nav-link" href="{{ url('add-products') }}">
              <i class="material-icons">add_box</i>
              <p>Add Vehicle</p>
            </a>
          </li>
      </ul>
    </div>
  </div>
