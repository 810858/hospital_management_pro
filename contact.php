<?php include('admin/include/config.php'); ?>
<?php include_once('header.php'); ?>
<?php if(isset($_POST['submit']))
{ 

$fullname=$_POST['fullname'];
$emailid=$_POST['emailid'];
$contact_number=$_POST['contact_number'];
$message=$_POST['message'];

$sql=mysqli_query($con,"insert into contact_us(`fullname`,`emailid`,`contact_number`,`message`) values('$fullname','$emailid','$contact_number','$message')");
if($sql)
{
echo "<script>alert('Thank you. We will contact you shortly.');</script>";
}
}
?>
        <div class="custom-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
        </div><!--breadcrumb-->
        <!--g map start-->
       
        <div class="container">
            <div class="row">
                <div class="contact-info">
                    <div class="col-md-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="glyphicon glyphicon-home"></i>
                        </div>
                        <div class="media-body">
                            <p>31452 8th Ave, New York, NY 10022</p>
                        </div>
                    </div>
                    </div><!--media-->
                    <div class="col-md-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="glyphicon glyphicon-envelope"></i>
                        </div>
                        <div class="media-body">
                            <p>support@iconhospital.com</p>
                        </div>
                    </div>
                    </div><!--media-->
                    <div class="col-md-4">
                       <div class="media">
                        <div class="media-left">
                            <i class="glyphicon glyphicon-phone"></i>
                        </div>
                        <div class="media-body">
                            <p>+1 234 567 8910</p>
                        </div>
                    </div>
                    </div><!--media-->                    
                </div>
                
                <!-- Contact Form -->
                <div class="col-md-12"> 
                  <!-- IMPORTANT: change the email address at the top of the mail/mail.php file to the email address that you want this form to send to -->
                  <form class="form-style validate-form clearfix" method="POST" role="form">
                    
                    <!-- Left Column -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="text-field form-control validate-field required" data-validation-type="string" id="form-name" placeholder="Full Name" name="fullname">
                        </div>
                        <div class="form-group">
                          <input type="email" class="text-field form-control validate-field required" data-validation-type="email" id="form-email" placeholder="Email Address" name="emailid">
                        </div>
                        <div class="form-group">
                          <input type="tel" class="text-field form-control validate-field phone" data-validation-type="phone" id="form-contact-number" placeholder="Contact Number" name="contact_number">
                        </div>
                       
                      </div>
                    
                    <!-- END: Left Column --> 
                    
                    
                      <!-- Right Column -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea placeholder="Message..." class="form-control validate-field required" name="message"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" name="submit" class="btn btn-lg btn-outline-inverse  submit">Submit</button>
                        </div>
                        <div class="form-group form-general-error-container"></div>
                      </div>
                      <!-- END: Right Column -->
                    </div>
                  </form>
                </div>
                <!-- END: Contact Form --> 
     
            </div>
        </div>
		<div class="divide30"></div>
       
       <?php include_once('footer.php');