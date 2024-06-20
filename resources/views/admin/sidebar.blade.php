<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{URL('/admin/home')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="products-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{URL('/view_product')}}">
                        <i class="bi bi-circle"></i><span>Add Products</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL('/show_product')}}">
                        <i class="bi bi-circle"></i><span>Show Products</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Products Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{URL('/order')}}">
                <i class="bi bi-journal-text"></i>
                <span>Orders</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#posts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="posts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{URL('/view_post')}}">
                        <i class="bi bi-circle"></i><span>Add Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL('/show_post')}}">
                        <i class="bi bi-circle"></i><span>Show Posts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Posts Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{URL('/')}}">
                <i class="bi bi-grid"></i>
                <span>Customer Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
    </ul>
</aside><!-- End Sidebar-->
