<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="icon-warning-sign"></i><span class="break"></span>Teacher</h2>
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Phone/Email</th>
                        <th>Position</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($teacher as $v_teacher) { ?>
                    <tr>
                        <td class="center"><?php echo $v_teacher->id; ?></td>
                        <td class="center"><?php echo $v_teacher->name; ?></td>
                        <td class="center"><img src="<?php echo $v_teacher->photo; ?>" width="100px" height="100px" /></td>
                        <td class="center">Phone: <?php echo $v_teacher->mobile_number; ?> <br> Email: <?php echo $v_teacher->email; ?></td>
                        <td class="center"><?php echo $v_teacher->position; ?></td>
                        <td class="center"><?php echo $v_teacher->village; ?><br><?php echo $v_teacher->district; ?><br><?php echo $v_teacher->division; ?></td>
                        <td class="center">
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" onclick="return check_delete();" href="<?php echo base_url() . "person/teacher_delete/" . $v_teacher->reg_id; ?> ">
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

