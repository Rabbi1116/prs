<aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <!-- Brand Logo -->

    <a href="" class="brand-link">
        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle "
            style="opacity: .8">
        <span class="brand-text ">IT WAY BD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
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
                <li class="nav-item menu-open">
                    <a href="{{route('home')}}" style="background: #5711B2;"
                        class="nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('clientlist')}}" style="background: #5711B2;"
                        class="nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-building"></i>
                        <p>
                            Client List
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('status')}}" style="background: #5711B2;"
                        class="nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-shield-alt"></i>
                        <p>
                            Status
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{route('Setup')}}" style="background: #5711B2;"
                        class="nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-user-cog"></i>
                        <p>
                            Setup
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="/viewregister" style="background: #5711B2;"
                        class="nav-link  list-group-item-action btn btn-outline-primary">
                        <i class="fas fa-user-cog"></i>
                        <p>
                            Add New Employee
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" style="background: #5711B2;"
                        class="nav-link  list-group-item-action btn btn-outline-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
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