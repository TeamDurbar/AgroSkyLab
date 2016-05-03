<h4 class="second"><?php echo $title; ?></h4>
<?php
foreach ($result as $v_result) {
    ?>
    <div class="wrapper">
        <h6 class="m_0">
            <span>
                <?php echo $v_result->title; ?>
            </span>
        </h6>
        <div style="display: block; overflow: hidden">
            <div  style="float: left"><span class="date"><?php echo $v_result->date; ?></span></div>
            <div style="float: right">
                <?php if (!empty($v_result->photo)) { ?>
                    <a href="<?php echo $v_result->photo; ?>">
                        <img src="<?php echo base_url(); ?>images/download.png" alt="notice" style="width: 150px" />
                    </a>
                <?php } ?>
            </div>
        </div>
        <hr>
        <p><?php echo $v_result->contain; ?></p>

    </div>
<?php }
?>

