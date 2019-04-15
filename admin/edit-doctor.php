<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
$did=intval($_GET['id']);// get doctor id
if(isset($_POST['submit']))
{
$docpicquery = '';
$target_dir = "../img/medical/";
if(isset($_FILES["fileToUpload"]["tmp_name"]) && $_FILES["fileToUpload"]["tmp_name"]!=''){

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      //  echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
   // echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
       // echo "Sorry, there was an error uploading your file.";
    }
}
$docpic = basename($_FILES["fileToUpload"]["name"]);
$docpicquery = ",docpic='$docpic'";
}

$docspecialization=$_POST['Doctorspecialization'];
$docname=$_POST['docname'];
$contactno=$_POST['contactno'];
$emdocmobileno=$_POST['emdocmobileno'];
$docsalary=$_POST['docsalary'];
$docEmail=$_POST['docEmail'];
$fb_url=$_POST['fb_url'];
$twitter_url=$_POST['twitter_url'];
$ln_url=$_POST['ln_url'];

$sql=mysqli_query($con,"Update doctors set specilization='$docspecialization',doctorName='$docname',contactno='$contactno',emdocmobileno='$emdocmobileno',docsalary='$docsalary',docEmail='$docEmail',fb_url='$fb_url',twitter_url='$twitter_url',ln_url='$ln_url' $docpicquery where id='$did'");
if($sql)
{
$msg="Doctor Details updated";

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Edit Doctor Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Edit Doctor Details</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Edit Doctor Details</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h5 style="color: green; font-size:18px; ">
<?php if($msg) { echo "<span='color:green;'>".htmlentities($msg)."</span>";}?> </h5>
									<div class="row">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Doctor info</h5>
												</div>
												<div class="panel-body">
									<?php $sql=mysqli_query($con,"select * from doctors where id='$did'");
while($data=mysqli_fetch_array($sql))
{
?>
													<form role="form" name="adddoc" method="post" onSubmit="return valid();" enctype="multipart/form-data">
														<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
							<select name="Doctorspecialization" class="form-control" required="required">
					
<?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
	
																<option value="<?php echo htmlentities($row['specilization']);?>" <?php echo htmlentities($data['specilization']) == htmlentities($row['specilization']) ? 'selected' : ''; ?> >
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>

<div class="form-group">
															<label for="doctorname">
																 Doctor Name
															</label>
	<input type="text" name="docname" class="form-control" value="<?php echo htmlentities($data['doctorName']);?>" >
														</div>



<div class="form-group">
															<label for="fess">
																Doctor Mobile No 
															</label>
		<input type="text" name="contactno" maxlength="10" class="form-control" required="required"  value="<?php echo htmlentities($data['contactno']);?>" >
														</div>
	
<div class="form-group">
									<label for="fess">
																Doctor Emergency Contact No
															</label>
					<input type="text" maxlength="10" name="emdocmobileno" class="form-control" required="required"  value="<?php echo htmlentities($data['emdocmobileno']);?>">
														</div>

<div class="form-group">
									<label for="fess">
																 Doctor Email
															</label>
					<input type="email" name="docEmail" class="form-control"  value="<?php echo htmlentities($data['docEmail']);?>">
														</div>
<div class="form-group">
<label for="fess">
																 Salary
															</label>
					<input type="text" name="docsalary" class="form-control"  value="<?php echo htmlentities($data['docsalary']);?>">
														</div>
<div class="form-group">
<label for="fess">
																 Facebook URL
															</label>
					<input type="text" name="fb_url" class="form-control"  placeholder="Facebook URL" value="<?php echo htmlentities($data['fb_url']);?>">
														</div>
<div class="form-group">
												<label for="fess">
																 Twitter URL
															</label>
					<input type="text" name="twitter_url" class="form-control"  placeholder="Twitter URL" value="<?php echo htmlentities($data['twitter_url']);?>">
														</div>
														
														<div class="form-group">
														<label for="fess">
																 LinkedIn URL
															</label>
					<input type="text" name="ln_url" class="form-control"  placeholder="LinkedIn URL" value="<?php echo htmlentities($data['ln_url']);?>">
														</div>

														<div class="form-group">
														<label for="fess">
																 Doctor Profile Photo
															</label>
														 <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
														 <?php if($data['docpic']!=''){ ?>
														 <img width="50%" height="50%" src="../img/medical/<?php echo htmlentities($data['docpic']); ?>">
														 <?php } ?>
														</div>
														<?php } ?>
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
					<>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
