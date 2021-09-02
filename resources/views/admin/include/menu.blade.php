<aside class="main-sidebar sidebar-light dark-mode  elevation-4">
    <!-- Brand Logo -->

    <a href="" class="brand-link ">
        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-4" style="opacity: .8">
        <span class="brand-text text-light">IT WAY BD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
            <div class="image ">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-4 "
                    alt="User Image">
            </div>
            
            <div class="info">
                <a href="#" class="d-block"></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2 dark-mode">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <div class="form-inline ">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">

                    </div>
                </div>
                <li class="nav-item menu-open">
                    <a href="{{route('home')}}"
                        class=" {{ (request()->is('home')) ? 'active' : '' }} nav-link list-group-item-action btn btn-outline-primary">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('clientlist')}}"
                        class="{{ (request()->is('Client-list')) ? 'active' : '' }} nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-building"></i>
                        <p>
                            Client List
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('status')}}"
                        class="{{ (request()->is('Status')) ? 'active' : '' }}  nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-clipboard-list"></i>
                        <p>
                            Status
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('Setup')}}"
                        class="{{ (request()->is('Setup')) ? 'active' : '' }} nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-cog"></i>
                        <p>
                            Setup
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('area_page_view')}}"
                        class="{{ (request()->is('Area-setup')) ? 'active' : '' }}  nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>
                            Area Setup
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{route('visit_list')}}"
                        class="{{ (request()->is('Visit-list')) ? 'active' : '' }} nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-eye"></i>
                        <p>
                            visit
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('user_page_view')}}"
                        class="{{ (request()->is('User')) ? 'active' : '' }} nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('project')}}"
                        class="{{ (request()->is('Project')) ? 'active' : '' }} nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-tasks"></i>
                        <p>
                            Project
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="/viewregister"
                        class="{{ (request()->is('viewregister')) ? 'active' : '' }} nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-user-cog"></i>
                        <p>
                            Add New Employee
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link  list-group-item-action btn btn-outline-primary"
                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Sign Out
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>