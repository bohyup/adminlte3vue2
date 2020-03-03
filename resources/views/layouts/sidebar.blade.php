<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <router-link tag="a" to="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link tag="a" to="/user" class="nav-link">
                        <i class="nav-icon fas fa-glass-cheers"></i>
                        <p>Users</p>
                    </router-link>
                </li>

                <!-- New Sidebar Item -->
                <li class="nav-item">
                    <router-link tag="a" to="/notice" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Notices</p>
                    </router-link>
                </li>

            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
