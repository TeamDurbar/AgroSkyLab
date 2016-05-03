<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>New Notice Post</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal"  method="POST" action="<?php echo base_url(); ?>gallery/save_gallery" enctype="multipart/form-data"  >
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Title :</label>
                        <div class="controls">
                            <input type="text" name="title" class="span6 typeahead" id="typeahead">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Topic :</label>
                        <div class="controls">
                            <input type="text" name="topic" class="span6 typeahead" id="typeahead">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Date :</label>
                        <div class="controls">
                            <input type="text" name="date" class="input-xlarge datepicker" id="date01" value="<?php echo date("m/d/Y"); ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="photo" id="fileInput" type="file">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label"> Main Slide show</label>
                        <div class="controls">
                            <label class="checkbox inline">
                                <input type="checkbox" name="pt1" id="inlineCheckbox1" value="1"> Agree
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">site Gallery add</label>
                        <div class="controls">
                            <label class="checkbox inline">
                                <input type="checkbox" name="pt2" id="inlineCheckbox1" value="2"> Agree
                            </label>
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

