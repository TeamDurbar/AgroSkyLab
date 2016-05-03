<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="description" content="Dashboard">
        <meta name="author" content="Farhan Tanvir">
        <meta name="keyword" content="school, college, system, ftkoushik, synat">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?php echo base_url(); ?>adminfile/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>adminfile/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo base_url(); ?>adminfile/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo base_url(); ?>adminfile/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>


        <!-- start: Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>adminfile/img/logo.ico">
        <!-- end: Favicon -->




    </head>

    <body>
        <?php 
        $CI = &get_instance();
        $this->dbk = $CI->load->database('dbk', TRUE);
        ?>
        <script type="text/javascript">
            function check_delete()
            {
                var chk = confirm("AreYou Sure To Delete This Recored");
                if (chk) {
                    return  true;
                } else {
                    return false;
                }
            }
        </script>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    
                    <a class="brand" href="<?php echo base_url(); ?>" target="black">
                        <img src="<?php echo base_url(); ?>adminfile/img/logo.png" width="30px" />
                        <span> Website View >></span>
                    </a>

                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                            <li>
                                <a href="#" id="toggle-fullscreen" class="hidden-phone hidden-tablet">
                                    <i class="halflings-icon white fullscreen"></i>
                                </a>

                            </li>

                            <li>
                                <a class="btn" href="#">
                                    <i class="halflings-icon white wrench"></i>
                                </a>
                            </li>
                            <!-- start: User Dropdown -->
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i> <?php echo $this->session->userdata('user_name');?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                    <li><a href="<?php echo base_url();?>dboard/logout"><i class="halflings-icon off"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="<?php echo base_url() . "dboard/home"; ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-warning-sign"></i><span class="hidden-tablet">News Feed</span></a>
                                <ul>
                                    <li><a class="submenu" href="<?php echo base_url() . "notice/notice_post"; ?>"><i class="icon-edit"></i><span class="hidden-tablet">New Post</span></a></li>
                                    <li><a class="submenu" href="<?php echo base_url() . "notice/all_notice"; ?>"><i class="icon-bookmark"></i><span class="hidden-tablet">News View</span><span class="label label-success"> <?php echo $this->dbk->count_all('tbl_notice');?> </span></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url() . "institution/institution"; ?>"><i class="icon-comment-alt"></i><span class="hidden-tablet"> Soil</span></a></li>
                            <li><a href="<?php echo base_url() . "academic/message"; ?>"><i class="icon-comment-alt"></i><span class="hidden-tablet">Crop</span></a></li>
                            <li><a href="<?php echo base_url() . "facilities/message"; ?>"><i class="icon-comment-alt"></i><span class="hidden-tablet">Disaster</span></a></li>                            
                            <li><a href="<?php echo base_url() . "contactsBoard/contacts"; ?>"><i class="icon-tasks"></i><span class="hidden-tablet"> Contacts</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <!-- start: Content -->
                <div id="content" class="span10">
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="<?php echo base_url(); ?>dboard">Home</a> 
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#"><?php echo $title; ?></a></li>
                    </ul>
                    <?php
                    $message = $this->session->userdata('message');
                    if ($message) {
                        ?>

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success !</h4>
                            <?php echo $message; ?>
                        </div>
                        <?php
                        $this->session->unset_userdata('message');
                    }
                    ?>

                    <?php
                    $erroraaa = $this->session->userdata('erroraaa');
                    if ($erroraaa) {
                        ?>
                        <div class="alert alert-error">
                            <button class="close" data-dismiss="alert">&times;</button>
                            <strong>Error!</strong> <?php echo $erroraaa; ?>
                        </div>
                        <?php
                        $this->session->unset_userdata('erroraaa');
                    }
                    ?>

                    <?php echo $maincontain; ?>

                </div><!--/.fluid-container-->

                <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->



        <div class="clearfix"></div>

        <footer>

            <p>
                <span style="text-align:left;float:left">Synat &copy; 2015 | Design & Developed by : <a href="https://www.facebook.com/ft.koushik" alt="Farhan Tanvir" target="black" >Farhan Tanvir</a></span>

            </p>

        </footer>

        <!-- start: JavaScript-->

        <script src="<?php echo base_url(); ?>adminfile/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url(); ?>adminfile/js/jquery-migrate-1.0.0.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery-ui-1.10.0.custom.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.ui.touch-punch.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/modernizr.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.cookie.js"></script>

        <script src='<?php echo base_url(); ?>adminfile/js/fullcalendar.min.js'></script>

        <script src='<?php echo base_url(); ?>adminfile/js/jquery.dataTables.min.js'></script>

        <script src="<?php echo base_url(); ?>adminfile/js/excanvas.js"></script>
        <script src="<?php echo base_url(); ?>adminfile/js/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>adminfile/js/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>adminfile/js/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>adminfile/js/jquery.flot.resize.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.chosen.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.uniform.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.cleditor.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.noty.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.elfinder.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.raty.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.iphone.toggle.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.uploadify-3.1.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.gritter.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.imagesloaded.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.masonry.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.knob.modified.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/counter.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/retina.js"></script>

        <script src="<?php echo base_url(); ?>adminfile/js/custom.js"></script>
        <!-- end: JavaScript-->

    </body>
</html>
