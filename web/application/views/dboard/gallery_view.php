<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="icon-warning-sign"></i><span class="break"></span>All Gallery</h2>
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
                        <th>Title</th>
                        <th>Image</th>
                        <th>Topic</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($gallery as $v_gallery_v) { ?>
                        <tr>
                            <td><?php echo $v_gallery_v->title; ?></td>
                            <td class="center"><img src="<?php echo $v_gallery_v->photo; ?>" width="100px"></td>
                            <td class="center"><?php echo $v_gallery_v->topic; ?></td>
                            <td class="center"><?php echo $v_gallery_v->date; ?></td>
                            <td class="center">
                                <a class="btn btn-info" href="#">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" onclick="return check_delete();"  href="<?php echo base_url() . "gallery/delete_gallery/" . $v_gallery_v->id; ?> ">
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


