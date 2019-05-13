<div class="menubar-scroll-panel">

    <!-- BEGIN MAIN MENU -->
    <ul id="main-menu" class="gui-controls">

        <!-- BEGIN DASHBOARD -->
        <li>
            <a href="<?php echo base_url() ?>admin/dashboard" class="active">
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
                <li><a href="<?php echo base_url() ?>html/mail/inbox.html" ><span class="title">Add Product</span></a></li>
                <li><a href="<?php echo base_url() ?>html/mail/compose.html" ><span class="title">Compose</span></a></li>
                <li><a href="<?php echo base_url() ?>html/mail/reply.html" ><span class="title">Reply</span></a></li>
                <li><a href="<?php echo base_url() ?>html/mail/message.html" ><span class="title">View message</span></a></li>
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