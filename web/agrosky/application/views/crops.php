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
            <img src="<?php echo base_url(); ?>images/220px-Oryza_sativa_of_Kadavoor.jpg" width="300px" style="float:left;margin-right: 10px"/>
            
            <h3>Rice</h3>
            <samp style="font-size: 16px;font-weight: 700;">12/12/12</samp>
            <p style="text-align: justify; line-height: 1.6;">
                Rice is the seed of the grass species Oryza sativa (Asian rice) or Oryza glaberrima (African rice). As a cereal grain, it is the most widely consumed staple food for a large part of the world's human population, especially in Asia. It is the agricultural commodity with the third-highest worldwide production, after sugarcane and maize, according to 2012 FAOSTAT data.
Oryza sativa with small wind-pollinated flowers

Since a large portion of maize crops are grown for purposes other than human consumption, rice is the most important grain with regard to human nutrition and caloric intake, providing more than one-fifth of the calories consumed worldwide by humans.
            </p>
            <a href="<?php echo base_url(); ?>cropsview">Read more</a>
        </div>
    </div>
</div>