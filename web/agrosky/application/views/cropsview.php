
        <div class="wrapper">
            <h4 class="m_0">
                <span>
        Crops Name ( 221/12/12 )
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



