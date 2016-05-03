<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon picture"></i><span class="break"></span> Gallery</h2>
            <div class="box-icon">
                <a href="#" id="toggle-fullscreen" class="hidden-phone hidden-tablet"><i class="halflings-icon fullscreen"></i></a>
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="masonry-gallery">
                <?php foreach ($gallery as $v_gallery) { ?>
                <div id="image-1" class="masonry-thumb">
                    <a style="background:url(<?php echo $v_gallery->photo; ?>)" title="<?php echo $v_gallery->title; ?>" href="#"><img class="grayscale" src="<?php echo $v_gallery->photo; ?>" alt="Sample Image 1"></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div><!--/span-->

</div><!--/row-->


