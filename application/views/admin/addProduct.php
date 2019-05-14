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
                <div class="col-md-8 offset-md-2">
                    <form class="form" enctype="multipart/form-data" method="POST" action="<?php base_url() ?>add_product">
                        <h4 class="text-primary text-center">Add Product</h4>
                        <br/>
                        <div class="card">
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select id="select1" class="form-control" name="category_id" id="category_id">
                                                <?php foreach ($category as $value) { ?>
                                                    <option value="<?= $value->id ?>"><?= $value->category_name ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="category_id">Category</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="product_name" id="product_name">
                                            <label for="product_name">Product Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="form-group">
                                            <textarea name="product_description" id="product_description" class="form-control" rows="10" placeholder=""></textarea>
                                            <label for="product_description">Product Description</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" onblur="getTotal()" name="product_price" id="product_price">
                                            <label for="product_price">Product Price <small>( each product )</small></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" onblur="getTotal()" name="stock" id="stock">
                                            <label for="stock">Stock</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="form-group">
                                            <input type="text" readonly="" class="form-control" name="product_cost" id="product_cost">
                                            <label for="product_description">Total Product Cost</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="product_image" id="product_image" placeholder="Product Image">
                                            <label for="category_id">Product Image</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="seller" id="seller">
                                            <label for="product_name">Seller</label>
                                        </div>
                                    </div>
                                </div>


                                <center>
                                    <br/>
                                    <button type="submit" class="btn btn-primary btn-raised">Add Project</button>
                                </center>
                            </div>
                        </div>

                        <em class="text-caption">Every product has their own SKU code with auto generated</em>
                    </form>
                </div><!--end .card -->
            </div>
    </div><!--end .section-body -->
</section>
</div><!--end #content-->
<!-- END CONTENT -->
</div>

<?php include 'navBar.php'; ?>
<?php include 'footer.php'; ?>
<script>
    $("#add_product").addClass('active');

<?php if ($this->session->flashdata('success')) { ?>
        showNotifications('Product Created successfully..!', '', 'success');
<?php } elseif ($this->session->flashdata('error')) { ?>
        showNotifications('Somthing went wrong..!', '', 'error')
<?php } ?>
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
    
    function getTotal() {
        var price = $('#product_price').val();
        var stock = $('#stock').val();
        var total = Number(price) * Number(stock);
        $('#product_cost').val(total);
    }
</script>