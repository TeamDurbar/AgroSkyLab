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
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>person/save_teacher" enctype="multipart/form-data" >
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">ID</label>
                        <div class="controls">
                            <input name="id" type="text" class="span6" id="typeahead" required >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Full Name</label>
                        <div class="controls">
                            <input name="name" type="text" class="span6" id="alinfo" required  >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Join Date :</label>
                        <div class="controls">
                            <input type="text" name="join_date" class="input-xlarge datepicker" id="date01" value="<?php echo date("m/d/Y"); ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Photo</label>
                        <div class="controls">
                            <input name="photo" class="input-file uniform_on" id="fileInput" type="file">
                        </div>
                    </div>   
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Position </label>
                        <div class="controls">
                            <input name="position" type="text" class="span6" id="alinfo"  >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Department</label>
                        <div class="controls">
                            <select id="selectError3" name="dept">
                                <option value="">All</option>
                                <option value="Science">Science</option>
                                <option value="Humanities">Humanities</option>
                                <option value="Business Studies">Business Studies</option>
                                <option value="B.M">B.M</option>
                                <option value="B.S.S">B.S.S</option>
                                <option value="B.B.S">B.B.S</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Basic Information</div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Father Name</label>
                        <div class="controls">
                            <input name="father_name" type="text" class="span6" id="typeahead">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Mother Name</label>
                        <div class="controls">
                            <input name="mother_name" type="text" class="span6" id="typeahead">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Birth Date</label>
                        <div class="controls">
                            <input  name="birth_bate" type="text" class="input-xlarge datepicker" id="date01" value="<?php echo date("m/d/Y"); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">Gender</label>
                        <div class="controls">
                            <select  name="gender" id="select01" class="chzn-select">
                                <option>Select....</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">Marital Status</label>
                        <div class="controls">
                            <select name="marital_status" id="select01" class="chzn-select">
                                <option value="">Select....</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">Blood Group</label>
                        <div class="controls">
                            <select name="blood_group" id="select01" class="chzn-select">
                                <option value="">Select....</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">Person Type</label>
                        <div class="controls">
                            <select name="person_type" id="select01" class="chzn-select">
                                <option value="">Select....</option>
                                <option>Teacher</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">Religion</label>
                        <div class="controls">
                            <select name="religion" id="select01" class="chzn-select">
                                <option value="">Select....</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">Nationality</label>
                        <div class="controls">
                            <select name="nationality" id="select01" class="chzn-select">
                                <option value="">Select....</option>
                                <option selected="">Bangladeshi</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">National ID Number</label>
                        <div class="controls">
                            <input name="national_id" type="text" class="span6" id="typeahead">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Mobile Number</label>
                        <div class="controls">
                            <input name="mobile_number" type="text" class="span6" id="typeahead" required data-provide="typeahead" data-items="4" data-source='["017","018","019"]'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Email Address</label>
                        <div class="controls">
                            <input name="email" type="email" class="span6" id="typeahead">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="navbar navbar-inner block-header" >
                            <div class="muted pull-left">Present Address Information</div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Village</label>
                        <div class="controls">
                            <input name="village" type="text" class="span6" id="typeahead">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">District/City</label>
                        <div class="controls">
                            <select name="district" id="select01" class="chzn-select">
                                <option value="">Select....</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">Division/State</label>
                        <div class="controls">
                            <select name="division" id="select01" class="chzn-select">
                                <option value="">Select division....</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01">Country</label>
                        <div class="controls">
                            <select name="country" id="select01" class="chzn-select">
                                <option value="">Select Country....</option>
                                <option value="Bangladesh">Bangladesh</option>
                            </select>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="typeahead">Zip Code</label>
                        <div class="controls">
                            <input name="zip_code" type="text" class="span6" id="typeahead" >
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