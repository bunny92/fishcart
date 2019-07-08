<?php include 'header.php' ?>
<body class="page-header-fixed page-quick-sidebar-over-content">
    <!-- BEGIN HEADER -->
    <?php include('topNavbar.php'); ?>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <?php include('navBar.php'); ?>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">

                <h3 class="page-title">
                    Product <small>Creating & Modifying</small>
                </h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?= base_url() ?>admin/dashboard">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Add Product</a>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                        <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
                            <span id="time"></span>&nbsp; <i class="icon-calendar"></i>
                        </div>
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <div class="clearfix">
                </div>
                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">

                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>&nbsp; AddProduct
                                </div>
                                <div class="actions btn-set">
                                    <button class="btn default"><i class="fa fa-reply"></i> Reset</button>
                                    <button class="btn green"><i class="fa fa-check"></i> Save</button>
                                    <div class="btn-group">
                                        <a class="btn yellow dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                            <i class="fa fa-share"></i> More <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    Duplicate </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Delete </a>
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    Print </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab">General </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-space">
                                        <div class="tab-pane active" id="tab_general">
                                            <form class="form-horizontal form-row-seperated"  enctype="multipart/form-data" method="POST" action="<?php base_url() ?>add_product">

                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Product Name: <span class="required">* </span></label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" autocomplete="off" name="product_name" id="product_name" placeholder="Enter Product name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Description: <span class="required">* </span></label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" name="product_description" id="product_description" placeholder="Enter Product Description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Short Description: <span class="required"> * </span></label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" name="short_product_description" id="short_product_description" placeholder="Enter Short Product Description"></textarea>
                                                            <span class="help-block text-warning">Shown in product listing </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Product Image: <span class="required">* </span></label>
                                                        <div class="col-md-4">
                                                            <input type="file" class="form-control" name="product_image" id="product_image" placeholder="Product Image">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Categories: <span class="required">
                                                                * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <?php foreach ($category as $value) { ?>
                                                                <div class="form-group form-md-radios">
                                                                    <div class="md-radio-list">
                                                                        <div class="md-radio">
                                                                            <input type="radio"  value="<?= $value->id ?>" id="radio<?= $value->id ?>" name="category_id" class="md-radiobtn">
                                                                            <label for="radio<?= $value->id ?>">
                                                                                <span class="inc"></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span>
                                                                                <?= $value->category_name ?> </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Price: <span class="required">* </span></label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" autocomplete="off" onblur="getTotal()" name="product_price" id="product_price" placeholder="Enter Product Price">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Stock: <span class="required">* </span></label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" autocomplete="off" onblur="getTotal()" name="stock" id="stock" placeholder="Enter Product Stock">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Total Cost:</label>
                                                        <div class="col-md-4">
                                                            <input type="text" readonly="" class="form-control text-danger" name="product_cost" id="product_cost">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
            2019 &copy; FishingCart by B* <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase MarketText!</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script>
        $("#nav_product").addClass('active');
        $("#add_product").addClass('active');

        function getTotal() {
            var price = $('#product_price').val();
            var stock = $('#stock').val();
            var total = Number(price) * Number(stock);
            $('#product_cost').val(total);
        }

        function showNotifications(message, title, type) {
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            toastr.options.debug = false;
            toastr.options.positionClass = 'toast-bottom-left';
            toastr.options.showDuration = 333;
            toastr.options.hideDuration = 333;
            toastr.options.timeOut = 4000;
            toastr.options.extendedTimeOut = 4000;
            toastr.options.showEasing = 'swing';
            toastr.options.hideEasing = 'swing';
            toastr.options.showMethod = 'slideDown';
            toastr.options.hideMethod = 'slideUp';
            if (type == 'error') {
                toastr.error(message, title);
            } else if (type == 'success') {
                toastr.success(message, title);
            }
        }
    </script>
</body>
</html>