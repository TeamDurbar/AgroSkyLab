<link rel="stylesheet" href="<?php echo base_url(); ?>css/table.css" type="text/css"/>
<?php
foreach ($institution as $v_institution) {
    $name=str_replace("%20", " ", $name);
    if ($v_institution->id == $name) {
        ?>
        <h4 class="second"><?php echo $v_institution->title; ?></h4>
        <hr>
        <?php if (!empty($v_institution->photo)) { ?>
            <?php if ($v_institution->id==2 or $v_institution->id==3) { ?>
                <img class="personimage" src="<?php echo $v_institution->photo; ?>" alt="<?php echo $title; ?>" />
            <?php }else {?>
            <img class="wel_come" src="<?php echo $v_institution->photo; ?>" alt="<?php echo $title; ?>" />
        <?php } } ?>
        
        <p style="text-align: justify; line-height: 1.9;"><?php echo $v_institution->about; ?></p>

        <?php
    }
}
?>
