<?php include_once('header.php'); ?>

        <div class="custom-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
        </div><!--breadcrumb-->
        <div class="divide70"></div>

        <div class="container">
            <div class="row">
                <?php $log_directory = 'img/medical/gallery';
                foreach(glob($log_directory.'/*.*') as $file) {
                ?>
                <div class="col-sm-6 col-md-3 margin20 ">
                    <div class="gallery">
                        <img src="<?php echo $file; ?>" alt="gallery-img" class="img-responsive">
                        <div class="gallery-overlay">
                            <p><a href="<?php echo $file; ?>" class="show-image"><i class="glyphicon glyphicon-eye-open"></i></a></p>
                        </div>
                    </div>
                </div><!--col-->
                
            <?php } ?>
            
        </div>

  <div class="divide40"></div>

        
    <?php include_once('footer.php'); ?>