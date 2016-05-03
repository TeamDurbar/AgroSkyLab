<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>New Post</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal"   method="POST" action="<?php echo base_url(); ?>facilities/save_message" enctype="multipart/form-data" >
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Title :</label>
                        <div class="controls">
                            <input type="text" name="title" class="span6 typeahead" id="typeahead">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Date :</label>
                        <div class="controls">
                            <input type="text" name="date" class="input-xlarge datepicker" id="date01" value="<?php echo date("m/d/Y"); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Country</label>
                        <div class="controls">
                            <select id="selectError3" name="country">
                                <option value="">select</option>
                                <option>Bangladesh</option>
                                <option>India</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError4">Division</label>
                        <div class="controls">
                            <select id="selectError3" name="division">
                                <option value="">select</option>
                                <option>Dhaka</option>
                                <option>Rongpur</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError5">District</label>
                        <div class="controls">
                            <select id="selectError3" name="district">
                                <option value="">Select</option>
                                <option>Dhaka</option>
                                <option>Rongpur</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="photo" id="fileInput" type="file">
                        </div>
                    </div>  
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Detail</label>
                        <div class="controls">
                            <textarea id="tinymce_full" name="about" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->


<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="icon-warning-sign"></i><span class="break"></span> Other Facilities </h2>
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
                        <th>Title</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($mess as $v_mess) { ?>
                        <tr>
                            <td><?php echo $v_mess->id; ?></td>
                            <td><?php echo $v_mess->title; ?></td>
                            <td class="center">
                                <?php if (!empty($v_mess->photo)) { ?>
                                    <img src="<?php echo $v_mess->photo; ?>" width="100px" />
                                <?php } ?>
                            </td>
                            <td class="center"><?php echo $v_mess->date; ?></td>
                            <td class="center">
                                <a class="btn btn-success btnshow<?php echo $v_mess->id; ?>" href="#">
                                    <i class="halflings-icon white zoom-in"></i>  
                                </a>
                                <a class="btn btn-info" href="<?php echo base_url() . "facilities/message_edit/" . $v_mess->id; ?>">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" onclick="return check_delete();"  href="<?php echo base_url() . "facilities/message_delete/" . $v_mess->id; ?> ">
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
<?php foreach ($mess as $v_mess) { ?>
<div class="modal showm<?php echo $v_mess->id; ?>" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close remove<?php echo $v_mess->id; ?>">×</button>
            <h3><?php echo $v_mess->title; ?></h3>
            <span><?php echo $v_mess->date; ?></span>
        </div>
        <div class="modal-body">
            <?php if (!empty($v_mess->photo)) { ?>
                <img src="<?php echo $v_mess->photo; ?>" width="100px" style="float: left; margin-right: 5px" >
            <?php } ?>

            <p style="text-align: justify;"><?php echo $v_mess->about; ?></p>
        </div>
        <div class="modal-footer">
        </div>
    </div>
<script>
    $(".btnshow<?php echo $v_mess->id; ?>").click(function(){
		$(".showm<?php echo $v_mess->id; ?>").show(300);
	});
        $(".remove<?php echo $v_mess->id; ?>").click(function(){
		$(".showm<?php echo $v_mess->id; ?>").hide(700);
	});
    </script>
<?php } ?>




<script type="text/javascript" src="<?php echo base_url(); ?>vendors/tinymce/js/tinymce/tinymce.min.js"></script>

<script>

    
    
                                // Tiny MCE
                                tinymce.init({
                                    selector: "#tinymce_basic",
                                    plugins: [
                                        "advlist autolink lists link image charmap print preview anchor",
                                        "searchreplace visualblocks code fullscreen",
                                        "insertdatetime media table contextmenu paste"
                                    ],
                                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                                });

                                // Tiny MCE
                                tinymce.init({
                                    selector: "#tinymce_full",
                                    plugins: [
                                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                                        "insertdatetime media nonbreaking save table contextmenu directionality",
                                        "emoticons template paste textcolor"
                                    ],
                                    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                                    toolbar2: "print preview media | forecolor backcolor emoticons",
                                    image_advtab: true,
                                    templates: [
                                        {title: 'Test template 1', content: 'Test 1'},
                                        {title: 'Test template 2', content: 'Test 2'}
                                    ]
                                });

</script>