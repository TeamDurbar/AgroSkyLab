<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="icon-warning-sign"></i><span class="break"></span>All Notice</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Notice Title</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($notice as $v_notice) { ?>
                        <tr>
                            <td class="center"><img src="<?php echo $v_notice->image; ?>" width="50px"></td>
                            <td><?php echo $v_notice->title; ?></td>
                            <td class="center"><?php echo $v_notice->date; ?></td>
                            <td class="center">
                                <a class="btn btn-success btnshow<?php echo $v_notice->id; ?>" href="#">
                                    <i class="halflings-icon white zoom-in"></i>  
                                </a>
                                <a class="btn btn-info" href="<?php echo base_url() . "notice/notice_edit/" . $v_notice->id; ?>">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" onclick="return check_delete();"  href="<?php echo base_url() . "notice/notice_delete/" . $v_notice->id; ?> ">
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->
<script src="<?php echo base_url(); ?>vendors/jquery-1.9.1.min.js"></script>
<?php foreach ($notice as $v_notice) { ?>
    <div class="modal showm<?php echo $v_notice->id; ?>" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close remove<?php echo $v_notice->id; ?>">×</button>
            <h3><?php echo $v_notice->title; ?></h3>
            <span>( <?php echo $v_notice->date; ?> )</span>


        </div>
        <div class="modal-body">

            <p style="text-align: justify;">
                <img src="<?php echo $v_notice->image; ?>" width="50px">
                <?php echo $v_notice->contain; ?>
            </p>
        </div>
        <div class="modal-footer">
        </div>
    </div>
    <script>
                                    $(".btnshow<?php echo $v_notice->id; ?>").click(function() {
                                        $(".showm<?php echo $v_notice->id; ?>").show(300);
                                    });
                                    $(".remove<?php echo $v_notice->id; ?>").click(function() {
                                        $(".showm<?php echo $v_notice->id; ?>").hide(700);
                                    });
    </script>
<?php } ?>