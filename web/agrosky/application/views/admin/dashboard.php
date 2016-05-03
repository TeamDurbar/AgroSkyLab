<!DOCTYPE html>
<html class="no-js">

    <head>
        <title><?php echo $title; ?></title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/country.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/student_info_option.js"></script>
    </head>

    <body>
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
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>koushik<i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(); ?>supper_admin/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>super_admin">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">

<?php $show=0; ?>

            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active" >
                            <a href="<?php echo base_url(); ?>supper_admin"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>student_info/student_reg.html"><i class="icon-chevron-right"></i>Student Registration</a>
                        </li>
                        <li <?php if($show==3){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>student_info.html"><span class="badge badge-success pull-right"></span> View Registration</a>
                        </li>
                        <li <?php if($show==4){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>super_admin/teacher_reg.html"><i class="icon-chevron-right"></i>Teacher Registration</a>
                        </li>
                         <li <?php if($show==7){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>subject_panel"><span class="badge badge-success pull-right"></span> Subject Input</a>
                        </li>
                        <li <?php if($show==5){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>subject_panel/subject_assigned.html"><i class="icon-chevron-right"></i>Subject Assigned</a>
                        </li>
                        <li <?php if($show==13){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>add_four_panel.html"><i class="icon-chevron-right"></i>Select Remove And Four Subject</a>
                        </li>
                        <li <?php if($show==14){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>result_show.html"><i class="icon-chevron-right"></i>Student result</a>
                        </li>
                        <li <?php if($show==6){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>super_admin/class_reg.html"><i class="icon-chevron-right"></i> Class registration</a>
                        </li>
                       
                        <li <?php if($show==12){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>subject_panel/update_reg_info.html"><i class="icon-chevron-right"></i> Update Registration</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>report"><span class="badge badge-info pull-right">2,221</span> Report Transcripts</a>
                        </li>
                        <li>
                            <a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
                        </li>
                        <li <?php if($show==8){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>super_admin/option.html"><span class="badge badge-success pull-right">731</span>Option Input</a>
                        </li>
                        <li  <?php if($show==9){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>super_admin/view_option.html"><span class="badge badge-success pull-right"></span>View Option</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
                        </li>
                        <li <?php if($show==10){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>gallery/input_img.html"><span class="badge badge-info pull-right"></span> Input Gallery</a>
                        </li>
                        <li <?php if($show==11){ ?>class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>gallery"><span class="badge badge-info pull-right"></span> View Gallery</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                        </li>
                    </ul>
                </div>

                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">

                        <div class="navbar">
                            <div class="navbar-inner">
                                <ul class="breadcrumb">
                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                                    <li>
                                        <a href="<?php echo base_url();?>super_admin">Dashboard</a> <span class="divider">/</span>	
                                    </li>
                                    <li class="active"></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <?php echo $maincontain; ?>


                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Vincent Gabriel 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <link href="<?php echo base_url(); ?>vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="<?php echo base_url(); ?>vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="<?php echo base_url(); ?>vendors/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bootstrap-datepicker.js"></script>

        <script src="<?php echo base_url(); ?>vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="<?php echo base_url(); ?>vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="<?php echo base_url(); ?>vendors/wizard/jquery.bootstrap.wizard.min.js"></script>


        <script src="<?php echo base_url(); ?>assets/scripts.js"></script>

        <script>
            $(function() {
                $('.tooltip').tooltip();
                $('.tooltip-left').tooltip({placement: 'left'});
                $('.tooltip-right').tooltip({placement: 'right'});
                $('.tooltip-top').tooltip({placement: 'top'});
                $('.tooltip-bottom').tooltip({placement: 'bottom'});

                $('.popover-left').popover({placement: 'left', trigger: 'hover'});
                $('.popover-right').popover({placement: 'right', trigger: 'hover'});
                $('.popover-top').popover({placement: 'top', trigger: 'hover'});
                $('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});

                $('.notification').click(function() {
                    var $id = $(this).attr('id');
                    switch ($id) {
                        case 'notification-sticky':
                            $.jGrowl("Stick this!", {sticky: true});
                            break;

                        case 'notification-header':
                            $.jGrowl("A message with a header", {header: 'Important'});
                            break;

                        default:
                            $.jGrowl("Hello world!");
                            break;
                    }
                });
            });
        </script>
        <script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>