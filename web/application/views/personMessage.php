<h4 class="second"><?php echo $title; ?></h4>

<?php
foreach ($mess as $v_mess) {
    if ($v_mess->position == $title) {
        ?>
        <?php if (!empty($v_mess->photo)) { ?>
            <img src="<?php echo $v_mess->photo; ?>" alt="<?php echo $title; ?>" style=" width: 200px;float: left;border: 1px solid #EDEDED;padding: 5px;margin: -3px 10px 0px 0px;" />
        <?php } else { ?>
            <img src="<?php echo base_url(); ?>images/male-icon.png" alt="<?php echo $title; ?>" style=" width: 200px;float: left;border: 1px solid #EDEDED;padding: 5px;margin: -3px 10px 0px 0px;" />
        <?php } ?>
        <h4 class="m_0">
            <span>
                <?php echo $v_mess->title; ?>
            </span>
        </h4>
        <hr>
        <p style="text-align: justify; line-height: 1.9;"><?php echo $v_mess->about; ?></p>

        <?php
    }
}
?>

