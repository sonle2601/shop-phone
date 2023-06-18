<aside class="main-sidebar text-dark bg-light elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/template_admin/dist/img/logoss.png" alt="">

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/template_admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Sơn</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Tìm chức năng"
                    aria-label="Search">
                <div class="input-group-append">
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        {{-- Quản lí sản phẩm --}}

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-bars-progress" style="color: #125fe2;"></i>
                        <p>
                            Quản lí sản phẩm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/list" class="nav-link">
                                <i class="far fa-list-alt"></i>
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/add" class="nav-link">
                                <i class="far fa-calendar-plus" style="color: #54d624;"></i>
                                <p>Thêm sản phẩm</p>
                            </a>
                        </li>

                    </ul>
            </ul>
        </nav>

        {{-- Đơn hàng --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-shop" style="color: #1162ee;"></i>
                        <p>
                            Đơn hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/menus/add" class="nav-link">
                                <i class="fa-solid fa-signal fa-beat-fade"></i>
                                <p>Trạng thái đơn hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/list" class="nav-link">
                                <i class="fa-solid fa-rectangle-list"></i>
                                <p>Thống kê đơn hàng</p>
                            </a>
                        </li>

                    </ul>
            </ul>
        </nav>
        {{-- Thống kê doanh thu --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-clipboard-list  " style="color: #125fe2;"></i>
                        <p>
                            Thống kê doanh thu

                        </p>
                    </a>

            </ul>
        </nav>


        {{-- Quản lí thành viên  --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-user" style="color: #376ecd;"></i>
                        <p>
                            Quản lí tài khoản

                        </p>
                    </a>

            </ul>
        </nav>


        {{-- Phản hồi khách hàng --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-comment-dots" style="color: #1018f4;"></i>
                        <p>
                            Phản hồi khách hàng
                        </p>
                    </a>

            </ul>
        </nav>

        {{-- //Chủ đề  --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-mountain-sun" style="color: #005eff;"></i>
                        <p>
                            Chủ đề
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/slider" class="nav-link">
                                <i class="fa-solid fa-image" style="color: #04ff00;"></i>
                                <p>Danh sách chủ đề</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/slider-add" class="nav-link">
                                <i class="fa-solid fa-square-plus" style="color: #7bfd12;"></i>
                                <p>Thêm chủ đề</p>
                            </a>
                        </li>

                    </ul>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
