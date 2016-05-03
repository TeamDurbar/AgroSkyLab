<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?> || AgroSky Lab</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no">
        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->
        <link rel="icon" href="<?php echo base_url(); ?>images/hebanner1.png" type="image/x-icon">

        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/camera.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/boxstyle.css">
        <link href="<?php echo base_url(); ?>css/style_group.css" rel="stylesheet" type="text/css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/lightbox.css"/>

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

        <script src="<?php echo base_url(); ?>js/jquery.js"></script> 
        <script src="<?php echo base_url(); ?>js/jquery-migrate-1.1.1.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>js/superfish.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.mobilemenu.js"></script>
        <script src="<?php echo base_url(); ?>js/camera.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.ui.totop.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/lightbox.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/notice.js"></script>
        <script src="<?php echo base_url(); ?>js/script.js"></script>
        <script>
            $(document).ready(function() {
                $('#slider').camera({
                    height: '35.75%',
                    loader: true,
                    minHeight: '200px',
                    navigation: false,
                    navigationHover: false,
                    pagination: true,
                    playPause: false,
                    thumbnails: false,
                    fx: 'simpleFade'
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>js/jquery.mobile.customized.min.js"></script>
        <!-- google map -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>

        <script>
            function initialize() {
                var mapProp = {
                    center: new google.maps.LatLng(23.7230556, 90.4086111),
                    zoom: 12,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>


    </head>
    <body>
        <?php
        $noticesite = $this->notice_m->select_all_notice_site();
        //echo substr('10/05/2015', 3, 2);
        $year = date('Y');
        $month = date('m');
        $data = array();
        foreach ($noticesite as $v_noticesite) {
            $a = substr($v_noticesite->date, 3, 2);
            $b = substr($v_noticesite->date, 0, 2);
            $c = substr($v_noticesite->date, 6, 4);
            if ($year == $c and $b == $month) {
                $a = $a + 0;
                $data[$a]['url'] = base_url() . "noticeDetail/" . $v_noticesite->id;
                $data[$a]['title'] = $v_noticesite->title;
            }
        }
        $calendar = $this->calendar_m->get_calendar($year, $month, $data);
        $photogallery = $this->gallery_m->select_all_gallery_manu();
        $ins_facilities = $this->institution_m->select_all_message();
        $ins_about = $this->institution_m->select_all_institution();
        $ins_academic = $this->institution_m->select_all_message_academic();
        ?>
        <!--======================== header ============================-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <!--======================== logo ============================-->
                        <div class="wrapper">
                            <a href=""><img src="<?php echo base_url(); ?>images/logoagro.png" alt="logo"/></a>
                        </div>


                        <!--======================== menu ============================-->
                        <nav>
                            <ul class="sf-menu clearfix">

                                <li <?php if ($action == 1) { ?>class="current" <?php } ?> >
                                    <span></span>
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li <?php if ($action == 2) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url();?>soilinfo">Soil Info</a>
                                </li>

                                <li <?php if ($action == 3) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url();?>crops">Crops</a>
                                </li>
                                <li <?php if ($action == 4) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="#">Disaster</a>
                                </li>
                                <li <?php if ($action == 5) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url(); ?>">Illegal Crops</a>
                                </li>
                                <li <?php if ($action == 6) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url();?>onlinehelp">Online Help</a>
                                </li>
                                <li <?php if ($action == 7) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url();?>onlinesuggestion">Online Suggestion</a>
                                </li>
                                <li <?php if ($action == 8) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url(); ?>contacts.php">Contacts</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- menu end -->
                    </div>
                </div>
            </div>
            <!-- slider start -->
            <?php
            if ($action == 1) {
                echo $slider;
            }
            ?>


            <!-- slider end -->
        </header>
        <!--======================== content ===========================-->
        <div id="content">
            <div class="container">


                <div class="row">
                    <div class="grid_9">
                        <!-- home contain page -->
                        <?php echo $maincontain; ?>
                    </div>
                    <div class="grid_3">
                        <div class="banner_box"><!-- IMPORTANT Link Start-->        
                            <div class="notice_title"><span class="imp_icon"></span>IMPORTANT LINK</div>        
                            <div class="notice_s">
                                <ul>
                                    <li><a href="http://studentsforum.basis.org.bd/" target="black"><span class="fa-link" style="margin-right: 5px"></span>BASIS Students' Forum</a></li>
                                    <li><a href="https://2016.spaceappschallenge.org/challenges/" target="black"><span class="fa-link" style="margin-right: 5px"></span>Space Apps NASA</a></li>
                                    <li><a href="http://www.moedu.gov.bd/" target="black"><span class="fa-link" style="margin-right: 5px"></span>Online Help</a></li>
                                    <li><a href="http://www.moa.gov.bd/" target="black"><span class="fa-link" style="margin-right: 5px"></span>Ministry of Agriculture</a> </li>
                                    <li><a href="http://www.bari.gov.bd/" target="black"><span class="fa-link" style="margin-right: 5px"></span>Bangladesh Agricultural Research Institute</a> </li>                                 
                                </ul>     
                            </div>    
                        </div>

                        <div class="banner_box"><!-- IMPORTANT Link Start-->        
                            <div class="notice_down"><span class="imp_icon"></span>Calendar</div>        
                            <div class="notice_d" id="calendar">
                                <?php echo $calendar; ?>
                            </div>    
                        </div>
                        <div class="banner_box"><!-- IMPORTANT Link Start-->        
                            <div class="notice_title"><span class="fa-link"></span><i></i>Social media Page</div>        
                            <div class="notice_s">
                                <ul id="MoreBlogTools-SNS">
                                    <li ><a href="https://www.facebook.com/" class="icon fb">Facebook</a><span> Facebook</span>
                                    </li>
                                    <li ><a href="https://twitter.com/" class="icon twit" > Twitter</a><span>Twitter</span>
                                    </li>
                                    <li ><a href="Google+ URL" class="icon google" >Google+</a><span> Google+</span>
                                    </li>
                                    <li ><a href="Linkedin URL" class="icon linked" > LinkedIn</a><span> LinkedIn</span>
                                    </li>
                                </ul>    
                            </div>    
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="grid_12">
                        <div class="row">
                            <div class="grid_6">
                                <div class="notice_title"><span class="fa-map-marker"></span><span style="margin-left: 4px;">FIND US WITH GOOGLE MAP</span></div> 
                                <div style="margin: 5px;background-color: #F3F3F3;text-align: center;padding: 5px">
                                    <div id="googleMap" style="width:100%;height:200px;"></div>
                                </div>
                            </div>
                            <div class="grid_6">
                                <div class="notice_title"><span class="fa-map-marker"></span><span style="margin-left: 4px;">CONTACT US</span></div> 
                                <div style="margin: 5px;background-color: #F3F3F3;text-align: center;padding: 5px">
                                    <h3>
                                        AgroSky Lab
                                    </h3>
                                    <p>Daffodil International University
                                        <br/>
                                        <a href="www.agrosky.com">www.agrosky.com</a>
                                    <h6 style="margin-top: -5px "><san class="fa-phone" style="color: #64ad33;"> </san>+88017......</h6>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!--======================== footer ============================-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="copyright">AgroSky Lab &copy; 2016</div>
                        <div class="footer-link"><!--{%FOOTER_LINK} --></div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            $(document).ready(function() {
                $(document).on('click', '.next_button', function() {
                    var href = $(this).find('a').attr('href');

                    $.post(href, {}, function(data) {
                        $('#calendar').html(data);
                        //alert(data);
                    })

                    return false;
                });
                $(document).on('click', '.prev_button', function() {
                    var href = $(this).find('a').attr('href');

                    $.post(href, {}, function(data) {
                        $('#calendar').html(data);
                        //alert(data);
                    })

                    return false;
                });
            });
        </script>

    </body>

</html>