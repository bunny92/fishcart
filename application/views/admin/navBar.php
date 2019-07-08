<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search " action="extra_search.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start" id="dashboard">
                <a href="javascript:;">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li id="nav_product">
                <a href="javascript:;">
                    <i class="icon-basket"></i>
                    <span class="title">Products</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li id="add_product">
                        <a href="<?php echo base_url() ?>admin/addProduct">
                            <i class="icon-basket-loaded"></i>
                            Add Product</a>
                    </li>
                    <li id="show_product">
                        <a href="<?php echo base_url() ?>admin/showProducts">
                            <i class="icon-basket"></i>
                            Modify Product</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-rocket"></i>
                    <span class="title">Orders</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="layout_horizontal_sidebar_menu.html">
                            View Orders</a>
                    </li>
                    <li>
                        <a href="index_horizontal_menu.html">
                            Manage Orders</a>
                    </li>

                </ul>
            </li>
          
            <li class="heading">
                <h3 class="uppercase">Reports & Statics</h3>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-settings"></i>
                    <span class="title">Report</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="form_controls_md.html">Customer Reports</a>
                    </li>
                    <li>
                        <a href="form_controls.html">Order Reports</a>
                    </li>
                    <li>
                        <a href="form_controls.html">Payment Reports</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-briefcase"></i>
                    <span class="title">Data Tables</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="table_basic.html">
                            Basic Datatables</a>
                    </li>
                    <li>
                        <a href="table_tree.html">
                            Tree Datatables</a>
                    </li>
                    <li>
                        <a href="table_responsive.html">
                            Responsive Datatables</a>
                    </li>
                    <li>
                        <a href="table_managed.html">
                            Managed Datatables</a>
                    </li>
                    <li>
                        <a href="table_editable.html">
                            Editable Datatables</a>
                    </li>
                    <li>
                        <a href="table_advanced.html">
                            Advanced Datatables</a>
                    </li>
                    <li>
                        <a href="table_ajax.html">
                            Ajax Datatables</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-wallet"></i>
                    <span class="title">Portlets</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="portlet_general.html">
                            General Portlets</a>
                    </li>
                    <li>
                        <a href="portlet_general2.html">
                            <span class="badge badge-roundless badge-danger">new</span>New Portlets #1</a>
                    </li>
                    <li>
                        <a href="portlet_general3.html">
                            <span class="badge badge-roundless badge-danger">new</span>New Portlets #2</a>
                    </li>
                    <li>
                        <a href="portlet_ajax.html">
                            Ajax Portlets</a>
                    </li>
                    <li>
                        <a href="portlet_draggable.html">
                            Draggable Portlets</a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>