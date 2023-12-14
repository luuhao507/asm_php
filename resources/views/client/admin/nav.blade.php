<style>
    #colorlib-logo {
        font-size: 34px;
        margin: 0;
        padding: 0;
        font-weight: 700;
    }

    @media (max-width: 767.98px) {
        #colorlib-logo {
            margin-bottom: 10px;
            font-size: 41%;
        }
    }

    #colorlib-logo a {
        position: relative;
        color: #595959;

    }
</style>

<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute"
    data-header-position="absolute" data-boxed-layout="full">
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo"><a href="{{ route('index_admin') }}">Footwear</a></div>
                </div>
                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('index_admin') }}"
                            aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span class="hide-menu">Trang Chủ ADMIN</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/category"
                            aria-expanded="false">
                            <i class="mdi mdi-chart-bar"></i>
                            <span class="hide-menu">Danh Mục</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('list-user') }}"
                            aria-expanded="false">
                            <i class="mdi mdi-chart-bar"></i>
                            <span class="hide-menu">Tài Khoản</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/product"
                            aria-expanded="false">
                            <i class="mdi mdi-chart-bar"></i>
                            <span class="hide-menu">Sản Phẩm</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/list_order"
                            aria-expanded="false">
                            <i class="mdi mdi-chart-bubble"></i>
                            <span class="hide-menu">Đơn Hàng</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('list-contact') }}"
                            aria-expanded="false">
                            <i class="mdi mdi-border-inside"></i>
                            <span class="hide-menu">Liên Hệ</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false">
                            <i class="mdi mdi-receipt"></i>
                            <span class="hide-menu">Thống Kê</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('list-tk-product') }}" class="sidebar-link">
                                    <i class="mdi mdi-note-outline"></i>
                                    <span class="hide-menu"> Thống Kê Sản Phẩm </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('list-tk-order') }}" class="sidebar-link">
                                    <i class="mdi mdi-note-outline"></i>
                                    <span class="hide-menu"> Thống Kê Đơn Hàng </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('index') }}"
                            aria-expanded="false">
                            <i class="mdi mdi-relative-scale"></i>
                            <span class="hide-menu">Về Giao Diện</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</div>
