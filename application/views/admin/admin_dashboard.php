<?php include('header.php'); ?>

<body class="menubar-hoverable header-fixed menubar-pin menubar-first">

    <!-- BEGIN HEADER-->
    <header id="header" >
        <div class="headerbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="headerbar-left">
                <ul class="header-nav header-nav-options">
                    <li class="header-nav-brand" >
                        <div class="brand-holder">
                            <a href="<?php echo base_url() ?>html/dashboards/dashboard.html">
                                <span class="text-lg text-bold text-primary">FISHING CART</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="headerbar-right">
                <ul class="header-nav header-nav-toggle">
                    <li>
                        <a class="btn btn-icon-toggle btn-default" href="<?= base_url() ?>admin/admin_logout" data-backdrop="false">
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </li>
                </ul><!--end .header-nav-toggle -->
            </div><!--end #header-navbar-collapse -->
        </div>
    </header>
    <!-- END HEADER-->

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

                        <!-- BEGIN ALERT - REVENUE -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-info no-margin">
                                        <strong class="pull-right text-success text-lg">0,38% <i class="md md-trending-up"></i></strong>
                                        <strong class="text-xl">$ 32,829</strong><br/>
                                        <span class="opacity-50">Revenue</span>
                                        <div class="stick-bottom-left-right">
                                            <div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
                                        </div>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - REVENUE -->

                        <!-- BEGIN ALERT - VISITS -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-warning no-margin">
                                        <strong class="pull-right text-warning text-lg">0,01% <i class="md md-swap-vert"></i></strong>
                                        <strong class="text-xl">432,901</strong><br/>
                                        <span class="opacity-50">Visits</span>
                                        <div class="stick-bottom-right">
                                            <div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
                                        </div>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - VISITS -->

                        <!-- BEGIN ALERT - BOUNCE RATES -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-danger no-margin">
                                        <strong class="pull-right text-danger text-lg">0,18% <i class="md md-trending-down"></i></strong>
                                        <strong class="text-xl">42.90%</strong><br/>
                                        <span class="opacity-50">Bounce rate</span>
                                        <div class="stick-bottom-left-right">
                                            <div class="progress progress-hairline no-margin">
                                                <div class="progress-bar progress-bar-danger" style="width:43%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - BOUNCE RATES -->

                        <!-- BEGIN ALERT - TIME ON SITE -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-success no-margin">
                                        <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                        <strong class="text-xl">54 sec.</strong><br/>
                                        <span class="opacity-50">Avg. time on site</span>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - TIME ON SITE -->

                    </div><!--end .row -->
                </div><!--end .section-body -->
            </section>
        </div><!--end #content-->
        <!-- END CONTENT -->

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
            <?php include 'navBar.php'; ?>
        </div><!--end #menubar-->
        <!-- END MENUBAR -->

    </div><!--end #base-->
    <!-- END BASE -->

    <?php include 'footer.php'; ?>