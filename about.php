<?php include('admin/include/config.php'); ?>
<?php include_once('header.php'); ?>
        <div class="custom-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
        </div><!--breadcrumb-->
        <div class="parallax" data-stellar-background-ratio="0.5"></div>
        <div class="divide70"></div>

        <div class="container about-page">
            <div class="row">
                <div class="col-md-12">
                    <h1>Welcome to <strong>E-Hospital</strong></h1>
                    <p class="lead">
                        If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros adipiscing nonummy.
                    </p>
                </div>
            </div><!--end row-->
            <div class="row">
                <div class="col-md-7 margin30">
                    <!--bootstrap carousel slider-->
                    <div id="about-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#about-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#about-carousel" data-slide-to="1"></li>
                            <li data-target="#about-carousel" data-slide-to="2"></li>
                            <li data-target="#about-carousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/medical/equp-1.jpg" alt="img">
                            </div>

                            <div class="item">
                                <img src="img/medical/equp-2.jpg" alt="img">
                            </div>

                            <div class="item">
                                <img src="img/medical/equp-3.jpg" alt="img">
                            </div>

                            <div class="item">
                                <img src="img/medical/equp-4.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <p>
                        Lorem ipsum dolor amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check-square"></i>Dental Specialists.</li>
                        <li><i class="fa fa-check-square"></i>X-Ray and Laboratory exams.</li>
                        <li><i class="fa fa-check-square"></i>Traumatology emergency services.</li>
                        <li><i class="fa fa-check-square"></i>Gastroenterology diseases.</li>
                        <li><i class="fa fa-check-square"></i>People virus prevention methods.</li>
                        <li><i class="fa fa-check-square"></i>Cancer and AIDS Specialists</li>
                    </ul>
                    <p>
                    	Euismod nec nunc et, luctus viverra mauris. Vestibulum dictum nunc a diam bibendum tempus. Etiam odio ligula, luctus et ante bibendum, rhoncus rhoncus lorem. Proin at euismod nunc. Integer sagittis lorem at lorem rhoncus placerat. Praesent tellus metus, molestie non feugiat in, suscipit vitae arcu. Sed a justo rutrum, interdum turpis quis, imperdiet est. Cras nec dolor vitae metus molestie lacinia dignissim ut nisl. Praesent finibus quis ligula vel molestie. Ut condimentum lacus nec dolor pulvinar blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec semper dui. Maecenas vulputate, lacus eu facilisis suscipit, erat augue malesuada lorem, efficitur efficitur arcu quam eget dolor.
                    </p>
                </div>
            </div><!--end row-->
        </div>
        <div class="divide30"></div>
        
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

      <?php include_once('footer.php'); ?>