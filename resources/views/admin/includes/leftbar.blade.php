<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{ asset('admin/assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Career Doctor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">{{auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link {{Request::is('home') ? 'active' : ''}}">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <!-- <i class="right fa fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <!-- menu-open -->
          <li class="nav-item has-treeview {{Request::is('addIndustry') ? 'menu-open' : '' || Request::is('industryList') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{Request::is('addIndustry') ? 'active' : '' || Request::is('industryList') ? 'active' : ''}}">
              <i class="nav-icon fa fa-industry"></i>
              <p>
                Industry
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addIndustry')}}" class="nav-link {{Request::is('addIndustry') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Industry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('industryList')}}" class="nav-link {{Request::is('industryList') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Industry List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{Request::is('addCategory') ? 'menu-open' : '' || Request::is('categoryList') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('addCategory') ? 'active' : '' || Request::is('categoryList') ? 'active' : ''}}">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Category
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addCategory')}}" class="nav-link {{Request::is('addCategory') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categoryList')}}" class="nav-link {{Request::is('categoryList') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{Request::is('addCountry') ? 'menu-open' : '' || Request::is('countryList') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('addCountry') ? 'active' : '' || Request::is('countryList') ? 'active' : ''}}">
              <i class="nav-icon fa fa-globe"></i>
              <p>
                Country
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addCountry')}}" class="nav-link {{Request::is('addCountry') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Country</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('countryList')}}" class="nav-link {{Request::is('countryList') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Country List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{Request::is('addCity') ? 'menu-open' : '' || Request::is('countryListToGetCities') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('addCity') ? 'active' : '' || Request::is('countryListToGetCities') ? 'active' : ''}}">
              <i class="nav-icon fa fa-building"></i>
              <p>
                City
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addCity')}}" class="nav-link {{Request::is('addCity') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add City</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('countryListToGetCities')}}" class="nav-link {{Request::is('countryListToGetCities') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>City List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{Request::is('addJobSkills') ? 'menu-open' : '' || Request::is('jobSkillsList') ? 'menu-open' : '' || Request::is('newJobSkillsList') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('addJobSkills') ? 'active' : '' || Request::is('jobSkillsList') ? 'active' : '' || Request::is('newJobSkillsList') ? 'active' : ''}}">
              <i class="nav-icon fa fa-check"></i>
              <p>
                Job Skills
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addJobSkills')}}" class="nav-link {{Request::is('addJobSkills') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Job Skills</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('jobSkillsList')}}" class="nav-link {{Request::is('jobSkillsList') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Job Skills List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('newJobSkillsList')}}" class="nav-link {{Request::is('newJobSkillsList') ? 'active' : ''}}">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>New Job Skills List</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>