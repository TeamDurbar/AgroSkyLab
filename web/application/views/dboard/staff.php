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
                        <th>About</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($staff as $v_staff) { ?>
                    <tr>
                        <td class="center"><?php echo $v_staff->id; ?></td>
                        <td class="center"><?php echo $v_staff->name; ?></td>
                        <td class="center"><img src="<?php echo $v_staff->photo; ?>" width="100px" height="100px" /></td>
                        <td class="center">Phone: <?php echo $v_staff->mobile_number; ?> <br> Email: <?php echo $v_staff->email; ?></td>
                        <td class="center"><?php echo $v_staff->position; ?></td>
                        <td class="center"><?php echo $v_staff->village; ?><br><?php echo $v_staff->district; ?><br><?php echo $v_staff->division; ?></td>
                        <td class="center">
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger"  onclick="return check_delete();" href="<?php echo base_url() . "person/staff_delete/" . $v_staff->reg_id; ?>" >
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

