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
                    Dashboard <small>reports & statistics</small>
                </h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?= base_url() ?>admin/dashboard">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Dashboard</a>
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
                <!-- BEGIN DASHBOARD STATS -->
              

                <table id="datatable" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Sno.</th>
                            <th>Product Name</th>
                            <th>SKU</th>
                            <th class="sort-numeric">Product Price</th>
                            <th class="sort-alpha">Stock</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $index = 1;
                        foreach ($product as $value) {
                            ?>
                            <tr class="gradeX">
                                <td><?= $index++ ?></td>
                                <td><?= $value->product_name ?></td>
                                <td><?= $value->SKU ?></td>
                                <td><?= $value->product_price ?></td>
                                <td <?= $value->stock < 10 ? 'class=text-danger' : 'class=text-primary' ?>><?= $value->stock ?></td>
                                <td><button class="btn btn-flat btn-icon-toggle" data-toggle="modal" data-target="#formModal_<?= $value->id ?>"><i class="fa fa-eye text-danger"></i></button></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
                <?php foreach ($product as $value) { ?>
                    <div class="modal fade" id="formModal_<?= $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="model-body">
                                    <center>
                                        <br/>
                                        <img src="<?php echo $value->product_image ?>" class="img-fluid" width="60%">
                                    </center>
                                    <br/>
                                    <table style="width:100%" class="table table-striped">
                                        <tr>
                                            <th>Product Name:</th>
                                            <td><?= $value->product_name ?></td>
                                        </tr>
                                        <tr>
                                            <th>Description:</th>
                                            <td><?= $value->product_description ?></td>
                                        </tr>
                                        <tr>
                                            <th>SKU:</th>
                                            <td><?= $value->SKU ?></td>
                                        </tr>
                                        <tr>
                                            <th>Stock:</th>
                                            <td><?= $value->stock ?></td>
                                        </tr>
                                    </table>
                                </div><!-- /.modal-content -->
                                <div class="modal-footer">
                                    <a href="<?php base_url() ?>showProductsById/<?= $value->id ?>" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        </div><!-- /.modal-dialog -->
                    </div>
                <?php } ?>

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
        $("#show_product").addClass('active');
    </script>
</body>
</html>