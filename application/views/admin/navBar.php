<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="<?php echo base_url() ?>admin/dashboard">
                <span class="text-lg text-bold text-primary ">FISHING&nbsp;CART</span>
            </a>
        </div>
    </div>
    <div class="menubar-scroll-panel">

        <!-- BEGIN MAIN MENU -->
        <ul id="main-menu" class="gui-controls">

            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="<?php echo base_url() ?>admin/dashboard" id="dashboard">
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Dashboard</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->

            <!-- BEGIN EMAIL -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-email"></i></div>
                    <span class="title">Product</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a id="add_product" href="<?php echo base_url() ?>admin/addProduct" ><span class="title">Add Product</span></a></li>
                    <li><a id="edit_product" href="<?php echo base_url() ?>admin/showProducts" ><span class="title">Edit Product</span></a></li>
                </ul><!--end /submenu -->
            </li><!--end /menu-li -->


        </ul><!--end .main-menu -->
        <!-- END MAIN MENU -->

        <div class="menubar-foot-panel">
            <small class="no-linebreak hidden-folded">
                <span class="opacity-75">Copyright &copy; 2019</span> <strong>CodeRockers</strong>
            </small>
        </div>
    </div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->
<!-- END MENUBAR -->

</div><!--end #base-->
<!-- END BASE -->