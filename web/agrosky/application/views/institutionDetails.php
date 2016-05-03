<h4 class="second"><?php echo $title; ?></h4>
<?php
foreach ($institution as $v_institution) {
    if ($v_institution->title == $position) {
        ?>
        <?php if(!empty($v_institution->photo)){ ?>
        <img class="personimage" src="<?php echo $v_institution->photo; ?>" alt="<?php echo $title; ?>" />
        <?php } ?>
        <h4 class="m_0">
            <span>
                Abdul Mannan Bhuiyan Degree College,Shibpur Narsingdi 
            </span>
        </h4>
        <hr>
        <p style="text-align: justify; line-height: 1.9;"><?php echo $v_institution->about; ?></p>

    <?php
    }
}
?>
