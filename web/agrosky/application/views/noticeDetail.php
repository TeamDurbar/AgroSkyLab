<?php
foreach ($notice as $v_notice) {
    $name = str_replace("%20", " ", $name);
    if ($v_notice->id == $name) {
        ?>
        <div class="wrapper">
            <h4 class="m_0">
                <span>
        <?php echo $v_notice->title; ?> ( <?php echo $v_notice->date; ?> )
                </span>
               
            </h4>

            <hr>
            <p>
            <?php if (!empty($v_notice->image)) { ?>
                    <img src="<?php echo $v_notice->image; ?>" alt="news feed" style="width: 150px; float: left; margin-right: 10px;" />
            <?php } ?>
                <?php echo $v_notice->contain; ?>
            </p>


        </div>
    <?php }
} ?>



