<div class="row-fluid">

    <div class="span7">
        <h1>Contacts Box
            <a class="btn btn-info" href="#">
                <span class="">All Select</span>
            </a>
            <a class="btn btn-danger" href="#">
                <i class="halflings-icon white trash"></i> 
            </a>
        </h1>


        <ul class="messagesList">
            <?php foreach ($mess as $v_mess) { ?>

                <li>
                    <span class="btnshow<?php echo $v_mess->id; ?>"><span class="from"><input type="checkbox" id="inlineCheckbox1" value="option1"><b><?php echo $v_mess->name; ?></b></span><span class="title"><?php echo $v_mess->message_c; ?></span><span class="date"><?php echo $v_mess->date_c; ?></span></span>
                </li>

            <?php } ?>
        </ul>

    </div>
    <script src="<?php echo base_url(); ?>vendors/jquery-1.9.1.min.js"></script>
    <div class="span5 noMarginLeft">

        <?php foreach ($mess as $v_mess) { ?>
            <div class="message dark showm<?php echo $v_mess->id; ?> closeallm" style="display: none;">
                
                <div class="header">
                    <div class="from"><i class="halflings-icon user"></i> <b><?php echo $v_mess->name; ?></b> / <?php echo $v_mess->email_c; ?></div>
                    <div class="date"><?php echo $v_mess->date_c; ?></div>

                    <div class="menu">Phone: <?php echo $v_mess->phone_c; ?></div>

                </div>

                <div class="content">
                    <p><?php echo $v_mess->message_c; ?></p>
                </div>

                <form class="replyForm"method="post" action="">

                    <fieldset>
                        <textarea tabindex="3" class="input-xlarge span12" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>

                        <div class="actions">

                            <button tabindex="3" type="submit" class="btn btn-success">Send message</button>

                        </div>

                    </fieldset>

                </form>	

            </div>	
            <script>
                $(".btnshow<?php echo $v_mess->id; ?>").click(function() {
                    $(".closeallm").hide(700);
                    $(".showm<?php echo $v_mess->id; ?>").show(300);
                });

            </script>
        <?php } ?>

    </div>

</div>

