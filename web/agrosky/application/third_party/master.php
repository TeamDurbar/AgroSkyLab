<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?> || Collectorate Public School & College, Nilphamari</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no">
        <meta content="keywords" name="cpsc,CPSC,Collectorate Public School & College,Nilphamari Popular School,কালেক্টরেট পাবলিক স্কুল এন্ড কলেজ, নীলফামারী, School in Nilphamari, Nilphamari,Nilphamari colleges, farhan tanvir koushik, ft.koushik" />

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <link rel="icon" href="<?php echo base_url(); ?>images/c1.png" type="image/x-icon">

        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/camera.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/boxstyle.css">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/lightbox.css"/>


        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

        <script src="<?php echo base_url(); ?>js/jquery.js"></script> 
        <script src="<?php echo base_url(); ?>js/jquery-migrate-1.1.1.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>js/superfish.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.mobilemenu.js"></script>
        <script src="<?php echo base_url(); ?>js/camera.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.ui.totop.js"></script>
        <!--Light box slider
        <script type="text/javascript" src="<?php echo base_url(); ?>js/lightbox.min.js"></script>
        -->
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
        <script type="text/javascript">
            $(document).ready(function() {
                var s = $("#sticker");
                var pos = s.position();
                $(window).scroll(function() {
                    var windowpos = $(window).scrollTop();
                    if (windowpos >= pos.top) {
                        s.addClass("stick");
                    } else {
                        s.removeClass("stick");
                    }
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>js/jquery.mobile.customized.min.js"></script>

    </head>
    <body>
        <?php
        $noticesite = $this->notice_m->select_all_notice_site();
        //echo substr('10/05/2015', 3, 2);
        $year = date('Y');
        $month = date('m');
        $data= array();
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
        ?>
        <!--======================== header ============================-->
        <header>
            <div class="container">

                <div class="row">

                    <div class="grid_12">
                        <!--======================== logo ============================-->
                        <div class="wrapper">
                            <a href=""><img src="<?php echo base_url(); ?>images/hebanner1.png" alt="logo"/></a>
                        </div>


                        <!--======================== menu ============================-->
                        <nav id="sticker">
                            <ul class="sf-menu clearfix">

                                <li <?php if ($action == 1) { ?>class="current" <?php } ?> >
                                    <span></span>
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li <?php if ($action == 2) { ?>class="current" <?php } ?> >
                                    <span></span>
                                    <a href="#">CPSC</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url(); ?>cpscAbout">CPSC About</a>
                                        </li>
                                        <li>
                                            <a href="#">Photo Gallery</a>
                                            <ul>
                                                <li><a href="<?php echo base_url(); ?>photoGallery/All">All</a></li>
                                                <?php
                                                foreach ($photogallery as $v_photogallery) {
                                                    ?>
                                                    <?php if (empty($v_photogallery->topic)) { ?>

                                                    <?php } else { ?>
                                                        <li><a href="<?php echo base_url(); ?>photoGallery/<?php echo $v_photogallery->topic; ?>"><?php echo $v_photogallery->topic; ?></a></li>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </ul>

                                        </li>
                                        <li><a href="#">Magazine</a></li>
                                        <li><a href="<?php echo base_url(); ?>video_gallery">Video Gallery</a></li>
										<li><a href="<?php echo base_url(); ?>videoGallery">Video Gallery</a></li>
                                        <li><a href="<?php echo base_url(); ?>merit">Merit Student</a></li>
                                    </ul>
                                </li>
                                <li <?php if ($action == 4) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url(); ?>cpscAbout.php">Academic</a>
                                </li>
                                <li <?php if ($action == 5) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url(); ?>result.php">Result</a>
                                </li>
                                <li <?php if ($action == 100) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url(); ?>study">E-Learning</a>
                                </li>
                                <li <?php if ($action == 7) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="<?php echo base_url(); ?>noticeView/All">Notice</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>noticeView/All">All</a></li>
                                        <li><a href="<?php echo base_url(); ?>noticeView/Science">Primary</a></li>
                                        <li><a href="<?php echo base_url(); ?>noticeView/Humanities">High School</a></li>
                                        <li><a href="<?php echo base_url(); ?>noticeView/Business Studies">Collage</a></li>
                                    </ul>
                                </li>
                                <li <?php if ($action == 8) { ?>class="current" <?php } ?>>
                                    <span></span>
                                    <a href="#">Admission</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>admissionInfo.php">Admission Information</a></li>
                                        <li><a href="<?php echo base_url(); ?>admissionForm.php">Admission Form</a></li>
                                        <li><a href="<?php echo base_url(); ?>admissionResult.php">Admission Result</a></li>
                                    </ul>
                                </li>
                                <li <?php if ($action == 9) { ?>class="current" <?php } ?>>
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
                <?php
                if ($action == 9 or $action == 100 or $action == 2) {
                    echo $maincontain;
                } else {
                    ?>
                    <div class="row">

                        <div class="grid_9">
                            <!-- home contain page -->
                            <?php echo $maincontain; ?>
                        </div>
                        <div class="grid_3">
                            <div class="banner_box">
                                <div class="notice_title"><span class="notice_icon"><span class="notice_icon_load"></span></span>
                                    NOTICE BOARD</div>
                                <div class="notice_s scroller">
                                    <?php
                                    foreach ($noticesite as $v_noticesite) {
                                        ?>
                                        <div class="notice_box">
                                            <code></code>
                                            <h6><a href=""><?php echo $v_noticesite->title; ?></a></h6><br>
                                            <p><?php echo $v_noticesite->date; ?></p>
                                            <span><a href="<?php echo base_url() . "noticeDetail/" . $v_noticesite->id; ?>">Click</a></span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="banner_box"><!-- IMPORTANT Link Start-->        
                                <div class="notice_title"><span class="imp_icon"></span>IMPORTANT LINK</div>        
                                <div class="notice_s">
                                    <ul>
                                        <li><a href="http://www.nilphamari.gov.bd/" target="black"><span class="fa-link" style="margin-right: 5px"></span>D.C Office, Nilphamari</a></li>
                                        <li><a href="http://collectoratepubliccollege.dinajpurboard.gov.bd/" target="black"><span class="fa-link" style="margin-right: 5px"></span>Subdomain cpsc</a></li>
                                        <li><a href="http://www.moedu.gov.bd/" target="black"><span class="fa-link" style="margin-right: 5px"></span>Ministry of Education</a></li>
                                        <li><a href="http://dinajpureducationboard.gov.bd/" target="black"><span class="fa-link" style="margin-right: 5px"></span>Dinajpur Education Board</a></li>                                    
                                        <li><a href="http://www.educationboardresults.gov.bd/regular/index.php" target="black"><span class="fa-link" style="margin-right: 5px"></span>Results</a></li> 
                                    </ul>     
                                </div>    
                            </div>
                            <div class="banner_box"><!-- IMPORTANT Link Start-->        
                                <div class="notice_title"><span class="fa-link"></span><i></i>Link Page</div>        
                                <div class="notice_s">
                                    <ul id="MoreBlogTools-SNS">
                                        <li ><a href="https://www.facebook.com/pages/Collectorate-Public-School-College-Nilphamari/694741493986643" class="icon fb">Facebook</a><span>Facebook</span>
                                        </li>
                                        <li ><a href="https://twitter.com/cpscnedu" class="icon twit" >Twitter</a><span>Twitter</span>
                                        </li>
                                        <li ><a href="http://cpscn.edu.bd/online_exam.php" class="icon google" >Online Examination</a><span>Online Examination</span>
                                        </li>
                                        <li ><a href="#" class="icon pint">Cpsc</a><span>Cpsc</span>
                                        </li>
                                    </ul>    
                                </div>    
                            </div>
                            <div class="banner_box"><!-- IMPORTANT Link Start-->        
                                <div class="notice_down"><span class="imp_icon"></span>Calendar</div>        
                                <div class="notice_d" id="calendar">
                                    <?php echo $calendar; ?>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <?php if ($action == 1) { ?>
                        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style_group.css"/>
                        <div class="row">
                            <div class="grid_12">
                                <div class="notice_title"><span class="fa-picture-o"></span><span style="margin-left: 4px;">GALLERY</span></div> 
                                <div class="photo_s photoslide">
                                    <!-- start Gallery slide -->
                                    <div class="photo_box">
                                        <img src="<?php echo base_url(); ?>images/dgallery/1.jpg" alt="photo gallary" class="g_photo" />
                                        <div class="lightbox">
                                            <div class="overleey"></div>
                                            <a class="example-image-link" href="http://cpscn.edu.bd/noticeView/All" data-lightbox="example-set" ><i class="fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <div class="photo_box">
                                        <img src="<?php echo base_url(); ?>images/dgallery/2.png" alt="photo gallary" class="g_photo" />
                                        <div class="lightbox">
                                            <div class="overleey"></div>
                                            <a class="example-image-link" href="http://cpscn.edu.bd/photoGallery/All" data-lightbox="example-set" ><i class="fa-search-plus"></i></a>
                                        </div>
                                    </div>

                                    <div class="photo_box">
                                        <img src="<?php echo base_url(); ?>images/dgallery/3.png" alt="photo gallary" class="g_photo" />
                                        <div class="lightbox">
                                            <div class="overleey"></div>
                                            <a class="example-image-link" href="#" data-lightbox="example-set" ><i class="fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="photo_box">
                                        <img src="<?php echo base_url(); ?>images/dgallery/about.png" alt="photo gallary" class="g_photo" />
                                        <div class="lightbox">
                                            <div class="overleey"></div>
                                            <a class="example-image-link" href="#" data-lightbox="example-set" ><i class="fa-search-plus"></i></a>
                                        </div>
                                    </div>

                                    <div class="photo_box">
                                        <img src="<?php echo base_url(); ?>images/dgallery/online.jpg" alt="photo gallary" class="g_photo" />
                                        <div class="lightbox">
                                            <div class="overleey"></div>
                                            <a class="example-image-link" href="http://cpscn.edu.bd/online_exam.php" data-lightbox="example-set" ><i class="fa-search-plus"></i></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!--======================== footer ============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="grid_4">
                    <div class="footer_icon_box">
                        <span class="fa-home"></span>
                        <h6>
                            D.C Office Road ,<br>Nilphamari
                        </h6>
                    </div>

                </div>
                <div class="grid_4">
                    <div class="footer_icon_box second">
                        <span class="fa-phone"></span>
                        <h6 class="second">
                            Call us: 
                        </h6>
                        <h5>(880) 0551-61488</h5>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="footer_icon_box">
                        <span class="fa-envelope-o"></span>
                        <a href="#" class="footer_mail">infocspc.nilphamari@gmail.com</a>
                    </div>

                </div>
            </div>
            <div class="grid_12">
                <div class="copyright">Collectorate Public School & College, Nilphamari &copy; 2013-2015 | Design & Developed by :<a href="https://www.facebook.com/ft.koushik" target="black">Farhan Tanvir</a></div>
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