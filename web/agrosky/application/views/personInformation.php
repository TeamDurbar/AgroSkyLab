<link rel="stylesheet" href="<?php echo base_url(); ?>css/table.css" type="text/css"/>
<h4 class="second"><?php echo $title; ?></h4>
<div class="CSSTableGenerator"  >
    <center>
        <table>
            <tr>
                <td>
                </td>
                <td >
                    Detail
                </td>

            </tr>
            <?php
            foreach ($teacher as $v_teacher) {
                $name=str_replace("%20", " ", $name);
                if ($v_teacher->dept==$name or $name=="All" ) { 
                ?>
                <tr>


                    <td align="center">
                        <?php if (!empty($v_teacher->photo)) { ?>
                            <img  class="sta" src="<?php echo $v_teacher->photo; ?>" alt="principal" />
                        <?php } else { ?>
                            <img  class="sta" src="<?php echo base_url(); ?>images/male-icon.png" alt="" />
                        <?php } ?>
                    </td>

                    <td >
                        <span> <?php echo $v_teacher->name; ?></span><br>
                        <span> <?php echo $v_teacher->position; ?></span><br>
                        <span><?php echo $v_teacher->dept; ?></span><br>
                    </td>

                </tr>
            <?php } } ?>

        </table>
    </center>
</div>


