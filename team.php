<?php include('admin/include/config.php'); ?>
<?php include_once('header.php'); ?>
        <div class="custom-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
            </div>
        </div><!--breadcrumb-->

        <div class="container">   
            <?php $sql=mysqli_query($con,"SELECT `id`, `specilization`, `doctorName`, `contactno`, `docEmail`, `emdocmobileno`, `docsalary`, `fb_url`, `twitter_url`, `ln_url`, `docpic`, `creationDate`, `updationDate` FROM `doctors` WHERE 1 order by `id` desc  "); ?>
             <div class="row" style="margin-top:20px;">
           <?php    while($row=mysqli_fetch_array($sql)){ ?>
               
                    <div class="col-sm-6 col-sm-3 margin30">
                    
                        <div class="item-img-wrap ">
                            <img src="img/medical/<?php echo $row['docpic'];?>" class="img-responsive" alt="">
                        </div> 
                        <div class="team-desc">
                             <h3>Dr. <?php echo $row['doctorName'];?></h3>
                            <em> <?php echo $row['specilization'];?> </em>
                        </div><!--team desc-->
                    </div>

                   
               
             <?php } ?>  
             </div>
                    
        </div><!--container-->



    <?php include_once('footer.php');