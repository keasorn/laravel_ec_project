<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/back_end/index3.html" class="brand-link">
        <img src="/back_end/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin EC Web</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('products.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('products.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Product</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route("product_category.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("coupons.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Coupons</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('customer.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Customer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
