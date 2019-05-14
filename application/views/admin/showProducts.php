<?php include 'header.php'; ?>
<?php include 'topNavbar.php'; ?>

<!-- BEGIN BASE-->
<div id="base">

    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->

    <!-- BEGIN CONTENT-->
    <div id="content">
        <section>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-primary">Product Details</h4><br/>
                    </div><!--end .col -->
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table id="datatable1" class="table table-striped table-hover table-bordered">
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
                        </div><!--end .table-responsive -->
                    </div><!--end .col -->
                </div>
            </div>
    </div><!--end .section-body -->
</section>
</div><!--end #content-->
<!-- END CONTENT -->
</div>

<?php include 'navBar.php'; ?>
<?php include 'footer.php'; ?>
<script>
    $("#edit_product").addClass('active');
</script>