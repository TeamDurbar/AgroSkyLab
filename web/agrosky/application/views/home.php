 <?php
foreach ($institution as $v_institution) {
                    ?>
<div class="border_box">
    <div class="row">
        <div class="grid_9">
                    <h3>
                        <?php echo $v_institution->title; ?>
                    </h3>
                    <img class="wel_come" src="<?php echo $v_institution->image; ?>" alt="Welcome to" />

                    <p style="text-align: justify; line-height: 1.6;"><?php echo $v_institution->contain; ?></p>
                    <a href="<?php echo base_url(); ?>institutionAbout/<?php echo $v_institution->id; ?>" class="btn">Read more</a>

              
        </div>
    </div>
</div>
  <?php 
            }
            ?>    
<div class="row">
    <div class="grid_9">
        <div class="notice_title"><span class="fa-picture-o"></span><span style="margin-left: 4px;">PHOTO GALLERY</span></div> 
        <div class="photo_s photoslide">
            <?php
        foreach ($gallery as $v_gallery) {
                ?>
            <div class="photo_box">
                <img src="<?php echo $v_gallery->photo; ?>" alt="photo gallary" class="g_photo" />
                <div class="lightbox">
                    <div class="overleey"></div>
                    <a class="example-image-link" href="<?php echo $v_gallery->photo; ?>" data-lightbox="example-set" ><i class="fa-search-plus"></i></a>
                </div>
            </div>
            <?php
            }
        ?>

        </div>
    </div>
</div>
