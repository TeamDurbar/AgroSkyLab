<h4 class="second"><?php echo $title; ?></h4>
<?php
foreach ($notice as $v_notice) {
    $name = str_replace("%20", " ", $name);
    if ($v_notice->dept == $name  or $name=="All" ) {
        ?>
        <div class="wrapper">
            <h6 class="m_0">
                <span>
        <?php echo $v_notice->title; ?>
                </span>
            </h6>

            <span class="date"><?php echo $v_notice->date; ?> ( <?php echo $v_notice->dept; ?> )</span><hr>
            <p><?php echo $v_notice->contain; ?></p>
        <?php if (!empty($v_notice->image)) { ?>
                <a href="<?php echo $v_notice->image; ?>">
                    <img src="<?php echo base_url(); ?>images/download.png" alt="notice" style="width: 150px" />
                </a><br>
        <?php } ?>
        </div>
    <?php }
} ?>

