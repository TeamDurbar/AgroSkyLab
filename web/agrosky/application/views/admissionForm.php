<h4 class="second"><?php echo $title; ?></h4>
<style>
.seip-form .input_holder{ width:680px; display:block; float:left; margin-bottom:5px;}

.input-text{ width:100%; padding:5px; border:1px solid #b4ce45; margin-bottom:5px;}
.clear{ clear:both; overflow:hidden;}
.seip-form .margin-right {
    padding-right: 46px;
}
.seip-form .margin-right-0{ margin-right:0;}
.seip-form .input_holder-2 {
display: block;
float: left;
margin-bottom: 3px;
width: 310px;
}
.input_holder-3 {
    float: left;
    margin-right: 48px;
    width: 190px;
}
.input_holder label, .input_holder-2 label, .input_holder-3 label {
    display: block;
    font-weight: normal;
    margin-bottom: 2px;
}
.seip-form h3 {
  border-bottom: 1px solid #ccc;
  clear: both;
  margin-bottom: 10px;
  overflow: hidden;
  padding-bottom: 3px;
  color: #999;
}
.seip-form .input_holder label span,
.seip-form .input_holder-1 label span,
.seip-form .input_holder-2 label span{
   color: red; 
}
.employed-block{margin:auto; overflow:hidden; clear:both; margin-bottom:3px; width:100%;}
.employed-block .employed-left {
  float: left;
  margin-right: 10px;
  margin-top: 22px;
  width: 29%;
}
.employed-block .employed-left label{ float:left; margin-right:10px;}
.employed-block .employed-right{float:left; width:65%}
.success_msg{
    background: #008000;
    padding: 5px;
    color: #fff;
}
.error_msg {
    background: none repeat scroll 0 0 #FF0000;
    color: #FFFFFF;
    font-family: arial;
    font-size: 12px;
    font-weight: bold;
    padding: 5px;
}
.error_msg p{
    color: #FFFFFF!important;
}
 </style>
<div class="seip-form">
    <form action="" method="post" id="seipRegistrationForm" class="infoForm">
        <div class="input_holder">
            <div class="input_holder-2 margin-right">
                <label>Name:<span>*</span></label>
                <input type="text" class="input-text" name="name" id="name" value="" />
            </div>
        </div>
        <div class="input_holder">
            <div class="input_holder-3">
                <label>Father Name:<span>*</span></label>
                <input type="text" class="input-text" name="fname" id="fname" value="" />
            </div>
            <div class="input_holder-3">
                <label>Mother Name:<span>*</span></label>
                <input type="text" class="input-text" name="mnane" id="mnane" value="" />
            </div>
            <div class="input_holder-3 margin-right-0" style=" width: 202px;">
                <label>Gender:<span>*</span></label>
                <select name="gender" id="gender" class="input-text">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>  

        <div class="input_holder">
            <div class="input_holder-3">
                <label>National ID:</label>
                <input type="text" class="input-text" name="NID" id="NID" value="" />
            </div>
            <div class="input_holder-3">
                <label>Birth Certificate No:</label>
                <input type="text" class="input-text" name="BCN" id="BCN" value="" />
            </div>
            <div class="input_holder-3 margin-right-0">
                <label>Other Valid Id (e.g passport):</label>
                <input type="text" class="input-text" name="OID" id="OID" value="" />
            </div>
        </div>
        <div class="input_holder">
            <div class="input_holder-3">
                <label>Date of Birth:<span>*</span></label>
                <input type="text" class="input-text datepicker" name="DOB" value="" />
            </div>
            <div class="input_holder-3">
                <label>Religion:<span>*</span></label>
                <select name="religion" id="religion" class="input-text">
                    <option value="">Select Religion</option>
                    <option value="Islam">Islam</option>
                    <option value="Hinduism">Hinduism</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Christianity">Christianity</option>
                </select>
            </div>
            <div class="input_holder-3 margin-right-0">
                <label>Ethnic Group:<span>*</span></label>
                <select name="ethnic_group" id="ethnic_group" class="input-text">
                    <option value="">Select Ethnic Group</option>
                    <option value="Armenian community of Dhaka">Armenian community of Dhaka</option>
                    <option value="Armenians in Bangladesh">Armenians in Bangladesh</option>
                    <option value="Bagdi caste">Bagdi caste</option>
                    <option value="Bom people">Bom people</option>
                    <option value="Bede people">Bede people</option>
                    <option value="Bedia (Muslim caste)">Bedia (Muslim caste)</option>
                    <option value="Bengali Hindus">Bengali Hindus</option>
                    <option value="Bengali Muslims">Bengali Muslims</option>
                    <option value="Bengali people">Bengali people</option>
                    <option value="Bihari Muslims">Bihari Muslims</option>
                    <option value="Bihari people">Bihari people</option>
                    <option value="Buno people">Buno people</option>
                    <option value="Chak people">Chak people</option>
                    <option value="Chakma people">Chakma people</option>
                    <option value="Chinese people in Bangladesh">Chinese people in Bangladesh</option>
                    <option value="Dhanuk">Dhanuk</option>
                    <option value="Garo people">Garo people</option>
                    <option value="Indians in Bangladesh">Indians in Bangladesh</option>
                    <option value="Indigenous peoples in Bangladesh">Indigenous peoples in Bangladesh</option>
                    <option value="Jumma people">Jumma people</option>
                    <option value="Kan (tribe)">Kan (tribe)</option>
                    <option value="Khasi people">Khasi people</option>
                    <option value="Khumi people">Khumi people</option>
                    <option value="Khyang people">Khyang people</option>
                    <option value="Kuki Inpi">Kuki Inpi</option>
                    <option value="Kuki people">Kuki people</option>
                    <option value="Kurukh people">Kurukh people</option>
                    <option value="Lushei tribe">Lushei tribe</option>
                    <option value="Mahle people">Mahle people</option>
                    <option value="Maimal">Maimal</option>
                    <option value="Mustafa Majid">Mustafa Majid</option>
                    <option value="Mal Muslim">Mal Muslim</option>
                    <option value="Marma people">Marma people</option>
                    <option value="Mro people">Mro people</option>
                    <option value="Munda people">Munda people</option>
                    <option value="Murang people">Murang people</option>
                    <option value="Naulak">Naulak</option>
                    <option value="Nepalis in Bangladesh">Nepalis in Bangladesh</option>
                    <option value="Pankho people">Pankho people</option>
                    <option value="Rakhine people, Bangladesh">Rakhine people, Bangladesh</option>
                    <option value="Rohingya people">Rohingya people</option>
                    <option value="Santhal people">Santhal people</option>
                    <option value="Stranded Pakistanis">Stranded Pakistanis</option>
                    <option value="Tanchangya people">Tanchangya people</option>
                    <option value="Thadou people">Thadou people</option>
                    <option value="Template:Tribes of Bangladesh">Template:Tribes of Bangladesh</option>
                    <option value="Tripuri people">Tripuri people</option>
                    <option value="Vaiphei people">Vaiphei people</option>
                    <option value="Zo people">Zo people</option>
                    <option value="Zomi nationalism">Zomi nationalism</option>
                </select>
            </div>
        </div>
        <div class="input_holder">
            <div class="input_holder-2 margin-right">
                <label>Mobile:<span>*</span></label>
                <input type="text" class="input-text" name="mobile" id="mobile" value="" />
            </div>
            <div class="input_holder-2 margin-right-0">
                <label>Email:<span>*</span></label>
                <input type="text" class="input-text" name="email" id="email" value="" />
            </div>
        </div>


        <h3>Present Address</h3>    
        <div class="input_holder" style="width: 668px;">
            <label>Address:<span>*</span></label>
            <input type="text" class="input-text" name="pre_address" id="pre_address" value="" />
        </div>
        <div class="input_holder">
            <div class="input_holder-2 margin-right">
                <label>City:<span>*</span></label>
                <input type="text" class="input-text" name="pre_city" id="pre_city" value="" />
            </div>
            <div class="input_holder-2 margin-right-0">
                <label>Post Code:<span>*</span></label>
                <input type="text" class="input-text" name="pre_postcode" id="pre_postcode" value="" />
            </div>
        </div>
        <div class="input_holder">
            <div class="input_holder-3">
                <label>Division:<span>*</span></label>
                <select name="pre_division" class="input-text" id="pre_division">
                    <option value="" selected="selected">Select Division</option>
                    <option value="5">Barisal</option>
                    <option value="2">Chittagong</option>
                    <option value="1">Dhaka</option>
                    <option value="3">Khulna</option>
                    <option value="6">Rajshahi</option>
                    <option value="7">Rangpur</option>
                    <option value="4">Sylhet</option>
                </select>                          
            </div>
            <div class="input_holder-3">
                <label>District:<span>*</span></label>
                <select  name="pre_district" id="pre_district" class="input-text">
                    <option value="" selected="selected">Select District</option>
                </select>


            </div>
            <div class="input_holder-3 margin-right-0">
                <label>Sub-District:<span>*</span></label>
                <select  name="pre_sub_district" id="pre_sub_district" class="input-text">
                    <option value="" selected="selected">Select Sub-District</option>
                </select>
            </div>
        </div>
        <h3>Permanent Address</h3>    
        <div class="input_holder" style="width: 668px;">
            <label>Address:<span>*</span></label>
            <input type="text" class="input-text" name="per_address" id="per_address" value="" />
        </div>
        <div class="input_holder">
            <div class="input_holder-2 margin-right">
                <label>City:<span>*</span></label>
                <input type="text" class="input-text" name="per_city" id="per_city" value="" />
            </div>
            <div class="input_holder-2 margin-right-0">
                <label>Post Code:<span>*</span></label>
                <input type="text" class="input-text" name="per_postcode" id="per_postcode" value="" />
            </div>
        </div>
        <div class="input_holder">
            <div class="input_holder-3">
                <label>Division:<span>*</span></label>
                <select name="per_division" class="input-text" id="per_division">
                    <option value="" selected="selected">Select Division</option>
                    <option value="5">Barisal</option>
                    <option value="2">Chittagong</option>
                    <option value="1">Dhaka</option>
                    <option value="3">Khulna</option>
                    <option value="6">Rajshahi</option>
                    <option value="7">Rangpur</option>
                    <option value="4">Sylhet</option>
                </select>                           
            </div>
            <div class="input_holder-3">
                <label>District:<span>*</span></label>
                <select  name="per_district" id="per_district" class="input-text">
                    <option value="" selected="selected">Select District</option>
                </select>                          
            </div>
            <div class="input_holder-3 margin-right-0">
                <label>Sub-District:<span>*</span></label>
                <select  name="per_sub_district" id="per_sub_district" class="input-text">
                    <option value="" selected="selected">Select Sub-District</option>
                </select>                          
            </div>
        </div>
        <h3>SSC or Equivalent</h3>    
        <div class="input_holder">
            <div class="input_holder-3">
                <label>Board:<span>*</span></label>
                <input type="text" class="input-text" name="ssc_board" value="" />
            </div>
            <div class="input_holder-3">
                <label>Institute:<span>*</span></label>
                <input type="text" class="input-text" name="ssc_institue" value="" />
            </div>
            <div class="input_holder-3 margin-right-0">
                <label>Subject:<span>*</span></label>
                <input type="text" class="input-text" name="ssc_subject" value="" />
            </div>
        </div>
        <div class="input_holder">
            <div class="input_holder-3">
                <label>Year:<span>*</span></label>
                <input type="text" class="input-text" name="ssc_pass_year" value="" />
            </div>
            <div class="input_holder-3">
                <label>Roll Number:<span>*</span></label>
                <input type="text" class="input-text" name="ssc_rollno" value="" />
            </div>
            <div class="input_holder-3 margin-right-0">
                <label>Result:<span>*</span></label>
                <input type="text" class="input-text" name="ssc_result" value="" />
            </div>
        </div>
        <h3>HSC or Equivalent</h3>    
        <div class="input_holder">
            <div class="input_holder-3">
                <label>Board:<span>*</span></label>
                <input type="text" class="input-text" name="hsc_board" value="" />
            </div>
            <div class="input_holder-3">
                <label>Institute:<span>*</span></label>
                <input type="text" class="input-text" name="hsc_institue" value="" />
            </div>
            <div class="input_holder-3 margin-right-0">
                <label>Subject:<span>*</span></label>
                <input type="text" class="input-text" name="hsc_subject" value="" />
            </div>
        </div>
        <div class="input_holder">
            <div class="input_holder-3">
                <label>Year:<span>*</span></label>
                <input type="text" class="input-text" name="hsc_pass_year" value="" />
            </div>
            <div class="input_holder-3">
                <label>Roll Number:<span>*</span></label>
                <input type="text" class="input-text" name="hsc_rollno" value="" />
            </div>
            <div class="input_holder-3 margin-right-0">
                <label>Result:<span>*</span></label>
                <input type="text" class="input-text" name="hsc_result" value="" />
            </div>
        </div>
        <h3>Highest Academic Achievement</h3>    
        <div class="input_holder">
            <div class="input_holder-3">
                <label>Level of Education:</label>
                <input type="text" class="input-text" name="education" id="education" value="" />
            </div>
            <div class="input_holder-3">
                <label>Institute:</label>
                <input type="text" class="input-text" name="hinstitue" id="hinstitue" value="" />
            </div>
            <div class="input_holder-3 margin-right-0">
                <label>Subject:</label>
                <input type="text" class="input-text" name="hsubject" id="hsubject" value="" />
            </div>
        </div>
        <br>
        <div style=" text-align: right">  
            <input class="btn" name="submit" type="submit" value="Submit">
        </div>
    </form>
</div>