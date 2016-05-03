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
            <form class="form-horizontal" action="<?php echo base_url(); ?>notice/notice_edit_save" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Title :</label>
                        <div class="controls">
                            <input type="text" value="<?php echo $notice_row->title; ?>" name="title" class="span6 typeahead" id="typeahead">
                            <input type="hidden" value="<?php echo $notice_row->id; ?>" name="id" class="span6 typeahead" id="typeahead">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Date :</label>
                        <div class="controls">
                            <input type="text" name="date" class="input-xlarge datepicker" id="date01" value="<?php echo $notice_row->date; ?>">
                        </div>
                    </div>
                    <?php
                    if (!empty($notice_row->image)) {
                        $nfile = str_replace(base_url() . "images/notice/", " ", "$notice_row->image");
                        $ch = curl_init($notice_row->image);

                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                        curl_setopt($ch, CURLOPT_HEADER, TRUE);
                        curl_setopt($ch, CURLOPT_NOBODY, TRUE);

                        $data = curl_exec($ch);
                        $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
                        curl_close($ch);
                        ?>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">File</label>
                            <div class="controls"><b><?php echo $nfile; ?></b> <i>(<?php echo round($size / 1024, 2) . "KB"; ?>)</i>
                            </div>
                        </div> 
                    <?php } ?>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Change File</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" name="photo" type="file">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">News Feed Time Line</label>
                        <div class="controls">
                            <label class="checkbox inline">
                                <?php if ($notice_row->timeline == 1) { ?>
                                    <input type="checkbox" name="timeline" id="inlineCheckbox1" checked="" value="1"> Agree
                                <?php } else { ?>
                                    <input type="checkbox" name="timeline" id="inlineCheckbox1" value="1"> Agree
                                <?php } ?>
                            </label>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Detail</label>
                        <div class="controls">
                            <textarea id="tinymce_full" name="contain" rows="10"><?php echo $notice_row->contain; ?></textarea>
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


<script src="<?php echo base_url(); ?>vendors/jquery-1.9.1.min.js"></script>


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
