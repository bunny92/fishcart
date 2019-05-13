<?php include 'header.php' ?>
<style>
    #username-error, #password-error{
        color:red;
    }
</style>
<body class="menubar-hoverable header-fixed">

    <!-- BEGIN LOGIN SECTION -->
    <section class="section-account">

        <div class="spacer"></div>
        <center>
            <span class="text-lg text-bold text-info">FISHING CART ADMIN PORTAL</span>
            <br/><br/>
        </center>

        <div class="card contain-sm">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo base_url() ?>assets/img/fish.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">

                        <form class="form" style="margin-top:50px;" id="login-form" name="login_form" role="form" style="display: block;" method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" name ="username" id="username">
                                <label for="username">Username</label>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password">
                                <label for="password">Password</label>
                                <p class="help-block"><a href="#">Forgotten?</a></p>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" name="login-submit" id="login-submit" class="btn btn-primary btn-raised">
                                        <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Let's go</button>
                                </div><!--end .col -->

                            </div><!--end .row -->
                        </form>
                    </div><!--end .col -->
                    <!--end .col -->
                </div><!--end .row -->
            </div><!--end .card-body -->
        </div><!--end .card -->
    </section>
    <!-- END LOGIN SECTION -->
    <?php include 'footer.php' ?>
    <script>
        $(document).ready(function (e) {
            /* handling form validation */
            $("#login-form").validate({
                rules: {
                    password: {
                        required: true
                    },
                    username: {
                        required: true
                    }
                },
                messages: {
                    password: {
                        required: "Please enter your password"
                    },
                    username: "Please enter your username"
                },
                submitHandler: submitForm
            });

            function submitForm() {
                var data = $("#login-form").serialize();
                $.ajax({
                    type: "POST",
                    url: baseurl + "admin/ajax_admin_login",
                    data: data,
                    beforeSend: function () {
                        $("#error").fadeOut();
                        $("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Logging ...');
                    },
                    success: function (response) {
                        if ($.trim(response) === "success") {
                            console.log("Login Success..!");
                            $("#login-submit").html("Signing In ...");
                            setTimeout(' window.location.href = "admin/dashboard"; ', 1000);
                        } else {
                            showNotifications('Invalid Credentials', '', 'error');
                        }
                    }
                });

                return false;
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
                }
            }
        });
    </script>