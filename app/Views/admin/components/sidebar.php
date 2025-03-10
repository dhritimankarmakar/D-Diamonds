<!-- Main Sidebar Container -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('/admin/dashboard') ?>" class="brand-link">
        <!-- <img src=<?= base_url("public/assets/img/logo/logo_2.png") ?>  height="50" width="180"> -->
         D.Diamonds
        <!-- class="brand-image img-circle elevation-3" style="opacity: .8" -->
        <!-- <span class="brand-text font-weight-light">Gift House Nutrition Shop</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <p class="d-block">Welcome <?= session('admin_auth')['email'] ?> !</p>
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
                    <a href=<?= base_url("/admin/dashboard") ?> class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>
                           
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories List</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Categories</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Banners
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">6</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/banner') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Banner</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/banner/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Banner</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Testimonials
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">6</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/testimonials') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Testimonials</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/testimonials/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Testimonial</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">6</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/product') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Product</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/product/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
<!-- 
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Review
                            <i class="fas fa-angle-left right"></i>
                           
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/review') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Review List</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/review/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Review</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-item menu-open">
                    <a href=<?= base_url("/admin/message") ?> class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Message
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item menu-open">
                    <a href=<?= base_url("/admin/booking") ?> class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tour Booking
                        </p>
                    </a>
                </li> -->

                <li class="nav-item menu-open">
                    <a href=<?= base_url("/admin/logout") ?> class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>