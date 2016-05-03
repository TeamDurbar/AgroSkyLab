<h4 class="second"><?php echo $title; ?></h4>
<?php foreach ($gallery as $v_gallery) {  
    $name=str_replace("%20", " ", $name);
    if ($v_gallery->topic == $name or $name=="All") {
    ?>
    <div class="product_box grid_4">
        <img src="<?php echo $v_gallery->photo; ?>" style="height: 180px" alt="">
        <?php  
        if(!empty($v_gallery->title)){
    ?>
        <div class="description">
            <p><?php echo $v_gallery->title; ?></p>
        </div>
        <?php  } ?>
    </div>
<?php } } ?>