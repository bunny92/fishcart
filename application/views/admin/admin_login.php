<?php include 'header.php' ?>
<style>
    #username-error, #password-error{
        color:red;
    }
</style>
<body class="login">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="menu-toggler sidebar-toggler">
    </div>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="<?= base_url() ?>/admin">
            <img src="<?= base_url() ?>/assets/admin/layout/img/logo-big.png" alt=""/>
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->

        <form class="login-form" id="login-form" role="form" method="post">
            <h3 class="form-title">Sign In</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>Enter any username and password. </span>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="text" id="username" autocomplete="off" placeholder="Username" name="username"/>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="password" id="password" autocomplete="off" placeholder="Password" name="password"/>
            </div>
            <div class="form-actions">
                <button type="submit" id="login-submit" class="btn btn-success btn-raised uppercase">Login</button>
            </div>
        </form>
    </div>
    <div class="copyright">
        2019 © FishingCart. Admin Portal.
    </div>
    <?php include 'footer.php' ?>

</body>
</html>