<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/engine1/style.css" />
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <!--=================== slider ==================-->
                <div id="wowslider-container1" style="margin-bottom: 5px;">
                    <div class="ws_images">
                        <ul>
                            <?php
                            $i = 0;
                            foreach ($slide as $v_slide) {
                                ?>
                            <li><img src="<?php echo $v_slide->image; ?>" alt="<?php echo $v_slide->title; ?>" title="<?php echo $v_slide->title; ?>" id="wows1_<?php echo $i; ?>" style=" height: 100%" /></li>
                                <?php $i++;
                            } ?>
                        </ul>
                    </div>
                    <div class="ws_thumbs">
                        <div>
                            <?php
                            foreach ($slide as $v_slide) {
                                ?>
                                <a href="#" title="<?php echo $v_slide->title; ?>"><img src="<?php echo $v_slide->image; ?>" alt="" /></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>css/engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>css/engine1/script.js"></script>
<div class="container" >
    <div class="row">
        <div class="grid_12">
            <div class="news_title">
                <marquee behavior="scroll" align="middle" direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
                    <?php
                    foreach ($timeline as $v_timeline) {
                        ?>
                        <a style="color: #fff;"href="<?php echo base_url() . "noticeDetail/" . $v_timeline->id; ?>">
                            <?php echo $v_timeline->title; ?>
                        </a> 
                        (<?php echo $v_timeline->date; ?>) &nbsp; ***&nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php } ?>
                </marquee>
            </div>
        </div>
    </div>
</div>