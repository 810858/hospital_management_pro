<?php include('admin/include/config.php'); ?>
<?php include_once('header.php'); ?>
        <!-- bootstrap carousel -->

			<div id="carousel-header" class="carousel slide" data-ride="carousel" data-interval="5000"> 
  			<!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-header" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-header" data-slide-to="1"></li>
                  <li data-target="#carousel-header" data-slide-to="2"></li>
                </ol>
  
  				<!-- Wrapper for slides -->
  				<div class="carousel-inner" role="listbox">
    				<div class="item active"> 
                    	<img src="img/slider/slide1.jpg" alt="...">
      					<div class="carousel-caption"> <span class="second-head">Advanced</span> healthcare made personal. 
                        </div>
    				</div>
                    <div class="item"> 
                        <img src="img/slider/slide2.jpg" alt="...">
                        <div class="carousel-caption"> <span class="second-head">Exceptional</span> technology. Extraordinary care!
                        </div>
                    </div>
                    <div class="item"> 
                    	<img src="img/slider/slide3.jpg" alt="...">
                        <div class="carousel-caption"> <span class="second-head">Medicine</span> that touches the world!
                        </div>
                    </div>
  				</div>
  			
            <!-- Controls --> 
             
                <a class="left carousel-control" href="#carousel-header" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-header" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            
			
			</div>
			<!-- end bootstrap carousel --> 

        <div class="divide70"></div>
        <div class="container">
            <div class="row center-title">
                <div class="col-md-8 col-md-offset-2 clearfix text-center wow animated fadeInUp">
                    <h2>Key features</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                    <!--                   -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3 margin30">
                    <div class="service-box wow animated fadeIn" data-wow-delay="0.1s">
                        <i class="glyphicon glyphicon-scale"></i>
                        <h4>Special Care </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. 
                        </p>
                    </div>
                </div><!--service column-->
                <div class="col-sm-6 col-md-3 margin30">
                    <div class="service-box wow animated fadeIn" data-wow-delay="0.2s">
                        <i class="glyphicon glyphicon-user"></i>
                        <h4>On-line Support</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. 
                        </p>
                    </div>
                </div><!--service column-->
                <div class="col-sm-6 col-md-3 margin30">
                    <div class="service-box wow animated fadeIn" data-wow-delay="0.3s">
                        <i class="glyphicon glyphicon-leaf"></i>
                        <h4>Medical Consultation</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. 
                        </p>
                    </div>
                </div><!--service column-->
                <div class="col-sm-6 col-md-3 margin30">
                    <div class="service-box wow animated fadeIn" data-wow-delay="0.4s">
                        <i class="glyphicon glyphicon-earphone"></i>
                        <h4>Emergency Services</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. 
                        </p>
                    </div>
                </div><!--service column-->
            </div>
           
           
        </div>
     

        <div class="team-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="center-title">
                            <i class="glyphicon glyphicon-education"></i>
                            <h2>Meet our <strong>Specialists</strong></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                        </div>
                    </div>
                </div>
                <?php $sql=mysqli_query($con,"SELECT `id`, `specilization`, `doctorName`, `contactno`, `docEmail`, `emdocmobileno`, `docsalary`, `fb_url`, `twitter_url`, `ln_url`, `docpic`, `creationDate`, `updationDate` FROM `doctors` WHERE 1 order by `id` desc limit 0,4 "); ?>
                <div class="row">
                <?php    while($row=mysqli_fetch_array($sql)){ ?>
                    <div class="col-sm-6 col-sm-3 margin30">
                        <div class="team-col wow animated fadeInLeft" data-wow-delay="0.1s">
                            <a href="#"><img src="img/medical/<?php echo $row['docpic'];?>" class="img-responsive" alt=""></a>
                            <div class="divide20"></div>
                            <h3>Dr. <?php echo $row['doctorName'];?></h3>
                            <em> <?php echo $row['specilization'];?> </em>
                            <div class="divide20"></div>
                            <ul class="list-inline">
                                <?php if($row['fb_url']!='' ){?>
                                <li>
                                    <a href="<?php echo $row['fb_url'];?>" target="_blank" class="social-icon social-icon-sm social-ico-border-round social-ico-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($row['twitter_url']!='' ){?>
                                <li>
                                    <a href="<?php echo $row['twitter_url'];?>" target="_blank" class="social-icon social-icon-sm  social-ico-border-round social-ico-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if($row['ln_url']!='' ){?>
                                <li>
                                    <a href="<?php echo $row['ln_url'];?>" target="_blank" class="social-icon social-icon-sm  social-ico-border-round social-ico-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div><!--team col-->
                    </div><!--col-md-3 col-sm-6--> 
                    
                    <?php } ?>
                </div>
            </div>
        </div><!--team section end-->


        <section class="know-more">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 margin30">
                        <h3>Video Presentation</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="http://player.vimeo.com/video/133170635"></iframe>
                        </div>
                    </div>
                    <div class="col-sm-6 margin30">
                        <h3>Medical Departments</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        <div class="panel-group collapse-colored-col" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Primary doctors
                                        </a>
                                    </h4>
                                </div><!-- /.panel-heading -->

                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio augue, scelerisque eget erat vel, hendrerit feugiat dui. Quisque velit erat, eleifend sed ligula vel, bibendum accumsan justo. Sed in justo ac massa suscipit tincidunt. Integer ac mauris ut dolor lobortis ullamcorper. Duis facilisis vitae odio ut commodo. Etiam et enim est. Sed ultrices hendrerit euismod. Aliquam lobortis rutrum adipiscing.
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel-heading -->
                            </div><!-- /.panel -->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Dental center
                                        </a>
                                    </h4>
                                </div><!-- /.panel-heading -->

                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Praesent rutrum arcu lacus, nec consectetur mauris pellentesque sit amet. Nulla facilisi. Donec tempor nunc in varius fermentum. Nulla eget vulputate neque. Sed ultricies viverra augue, ut accumsan metus malesuada id. Cras ultrices arcu nec mauris consequat, viverra accumsan enim vulputate. Nunc auctor, dolor et aliquet consequat, sapien leo viverra felis, ac gravida purus libero sit amet eros. Nam iaculis augue vitae rhoncus elementum. In hac habitasse platea dictumst. Morbi aliquet adipiscing elit, at convallis massa fringilla et.
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel-collapse -->
                            </div><!-- /.panel -->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            Gastro center
                                        </a>
                                    </h4>
                                </div><!-- /.panel-heading -->

                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Phasellus mattis dignissim neque vel tincidunt. Nam posuere nisl at erat mollis euismod. Cras diam diam, luctus vitae metus vitae, porttitor porttitor lorem. Integer feugiat justo in lectus dignissim consectetur. Aliquam vel fringilla neque. Pellentesque eget arcu ac ante pulvinar malesuada et id erat. Praesent mattis porta arcu placerat pellentesque. Maecenas ullamcorper dui non est elementum aliquam.
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel-collapse -->
                            </div><!-- /.panel -->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                            Cancer center
                                        </a>
                                    </h4>
                                </div><!-- /.panel-heading -->

                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Cras sed nunc eu lectus feugiat ultricies lobortis eget mi. Nam et nulla venenatis, luctus lacus eget, pharetra lacus. Nam facilisis congue nibh et iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vel commodo lectus. Curabitur tellus nunc, bibendum viverra quam sed, tempor posuere dui. Aliquam a lectus ligula. Mauris congue, urna ac ullamcorper dapibus, lacus sapien consectetur tortor, vel semper ligula eros ut urna. Quisque egestas et lectus in faucibus.
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel-collapse -->
                            </div><!-- /.panel -->
                        </div><!-- /.panel-group -->
                    </div>
                </div>
            </div>
        </section>
        <!--know more section end-->

 <?php $sql=mysqli_query($con,"SELECT `id`, `full_name`, `designation`, `message`, `created_datetime` FROM `testimonial` WHERE 1 order by RAND() limit 0,5"); ?>
                
        <section class="testimonials">
            <div class="container">
                <div class="center-title">
                    <i class="glyphicon glyphicon-volume-up"></i>
                    <h2>What people say<strong> about us</strong></h2>                        
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="testi-slides">
                           <ul class="slides">
                                <?php    while($row=mysqli_fetch_array($sql)){ ?>
                                <li>
                                   
                                    <h4><?php echo $row['full_name']; ?></h4>
                                    <em><?php echo $row['designation']; ?></em>

                                    <p>
                                       <?php echo $row['message']; ?>
                                    </p>
                                </li>
                               <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonials end-->
        
        <!--section class="blog-home">
            <div class="container">
                <div class="center-title">
                    <i class="glyphicon glyphicon-qrcode"></i>
                    <h2>Special<strong> Services</strong></h2>                        
                </div>
                <div class="row">
                    <div class="col-md-4 margin30">
                        <div class="blog-post">
                            <img src="img/medical/home-services-1.jpg" alt="" class="img-responsive">
                            <h3>
                                <a href="#"> lorem ipsum dolor sit amet</a>
                            </h3>
                            <span>July 12, 2015 Dr. Lorem</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id bibendum massa, vulputate consectetur dui. Ut ut eros congue, condimentum massa
                            </p>
                            <p><a href="#">Read more...</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 margin30">
                        <div class="blog-post">
                            <img src="img/medical/home-services-2.jpg" alt="" class="img-responsive">
                            <h3>
                                <a href="#"> Lorem ipsum dolor sit amet</a>
                            </h3>
                            <span>June 11, 2015 Dr. Ipsum</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id bibendum massa, vulputate consectetur dui. Ut ut eros congue, condimentum massa
                            </p>
                            <p><a href="#">Read more...</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 margin30">
                        <div class="blog-post">
                            <img src="img/medical/home-services-3.jpg" alt="" class="img-responsive">
                            <h3>
                                <a href="#"> Lorem ipsum dolor sit amet</a>
                            </h3>
                            <span>January 1, 2015 Dr. Lorem</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id bibendum massa, vulputate consectetur dui. Ut ut eros congue, condimentum massa
                            </p>
                            <p><a href="#">Read more...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section-->
        
        <!--div class="ads-section-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <h3>Subscribe to Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Your email">
                            </div>
                            <button type="submit" name="submit" class="btn btn-theme-bg btn-lg">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div-->

 <?php include_once('footer.php'); ?>