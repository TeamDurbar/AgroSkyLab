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
            <form class="form-horizontal">
                <fieldset>
                    
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Department</label>
                        <div class="controls">
                            <select id="selectError3">
                                <option>English</option>
                                <option>Bangla</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Date :</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge datepicker" id="date01" value="<?php echo date("m/d/Y"); ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">file</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="typeahead">About</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead">

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


