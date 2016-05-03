<style>
    .searchfrom{padding: 10px;border: 1px solid #b4ce45;margin-right: 10px; width: 140px;}
</style>
<div style="font-size: 20px;margin-bottom: 10px">
    <form action="" method="POST">
        Country : 
        <select name="country" class="searchfrom">
            <option>Bangladesh</option>
            <option>India</option>
        </select>
        Division :
        <select name="division"  class="searchfrom">
            <option value="">All</option>
            <option>Dhaka</option>
            <option>Rongpur</option>
        </select>
        District : 
        <select name="district"  class="searchfrom">
            <option value="">All</option>
            <option>Nilphamari</option>
            <option>Dinajpur</option>
        </select>

        <input type="submit" value="Search" style="padding: 10px;border: 1px solid #b4ce45;" />
    </form>
</div>
<hr>

<div class="border_box">
    <div class="row">
        <div class="grid_9">
            <img src="<?php echo base_url(); ?>images/gallery/istock_000015226257_620px_0.jpg" width="300px" style="float:left;margin-right: 10px"/>
            <h6> 
                Country: Bangladesh<br>
                Division: Dhaka<br>
                District: Dhaka<br>
            </h6>
            <a href="<?php echo base_url(); ?>soilinfoview">Read more</a>
        </div>
    </div>
</div>