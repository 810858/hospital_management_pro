<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
$did=intval($_GET['id']);// get doctor id
$calc_cost=0;
$db_room_id=mysqli_query($con,"select `room_id` from patient_room_mapping where `patient_id`='$did'");
$room_details = mysqli_fetch_array($db_room_id);

if(isset($_POST['submit']))
{
$fullName=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$contactno=$_POST['contactno'];
$emailid=$_POST['emailid'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
$room_id=$_POST['room_id'];
$admit_date=$_POST['admit_date'];
$discharge_date=$_POST['discharge_date'];
$past_history = $_POST['past_history'];
$doc_attend = @implode(",",$_POST['doc_attend']);
$petient_medical_test = @implode(",",$_POST['petient_medical_test']);
$medical_test_bill = $_POST['medical_test_bill'];
$billAmount = $_POST['billAmount'];
$sql=mysqli_query($con,"Update users set fullName = '$fullName',address = '$address',city = '$city',contactno = '$contactno',emailid = '$emailid',bloodgroup = '$bloodgroup',gender = '$gender',admit_date = '$admit_date',discharge_date = '$discharge_date',past_history = '$past_history',doc_attend = '$doc_attend',petient_medical_test='$petient_medical_test',medical_test_bill='$medical_test_bill', billAmount = '$billAmount' where id='$did'");

if(!empty($room_details)){
	$sql=mysqli_query($con,"Update patient_room_mapping set room_id = '$room_id' where patient_id='$did'");
}else{
	$sql=mysqli_query($con,"insert into patient_room_mapping(`patient_id`,`room_id`) values('$did','$room_id')");
}


if($sql)
{
$msg="Patient Details updated successfully";
}
}
$db_room_id=mysqli_query($con,"select `room_id` from patient_room_mapping where `patient_id`='$did'");
$room_details = mysqli_fetch_array($db_room_id);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Edit Patients Details</title>
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
									<h1 class="mainTitle">Admin | Edit Patients Details</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Edit Patients Details</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-8">
									<h5 style="color: green; font-size:18px; ">
<?php if($msg) { echo "<span='color:green;'>".htmlentities($msg)."</span>";}?> </h5>
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Patients Details</h5>
												</div>
												<div class="panel-body">
									<?php $sql=mysqli_query($con,"select * from users where id='$did'");
while($data=mysqli_fetch_array($sql))
{
?>
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														
<div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="Full Name" required value="<?php echo htmlentities($data['fullName']);?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required value="<?php echo htmlentities($data['address']);?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="City" required value="<?php echo htmlentities($data['city']);?>">
							</div>
							<div class="form-group">
								<input type="text" maxlength="10" class="form-control" name="contactno" placeholder="Contact No" required value="<?php echo htmlentities($data['contactno']);?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="emailid" placeholder="Email Id" required value="<?php echo htmlentities($data['emailid']);?>">
							</div>
							<div class="form-group">
								<select name="bloodgroup" id="bloodgroup" placeholder="Patient Blood Group">
								<option value="">Select Blood Group</option>
								<option value="A+" <?php echo $data['bloodgroup'] == "A+" ? 'selected' : ''; ?>>A+</option>
								<option value="A-" <?php echo $data['bloodgroup'] == "A-" ? 'selected' : ''; ?>>A-</option>
								<option value="B+" <?php echo $data['bloodgroup'] == "B+" ? 'selected' : ''; ?>>B+</option>
								<option value="B-" <?php echo $data['bloodgroup'] == "B-" ? 'selected' : ''; ?>>B-</option>
							</select>
							</div>
							<div class="form-group">
								<label class="block">
									Gender
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" <?php echo $data['gender'] == "female" ? 'checked' : ''; ?>>
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male" <?php echo $data['gender'] == "male" ? 'checked' : ''; ?>>
									<label for="rg-male">
										Male
									</label>
								</div>
							</div>
														
												</div>
											</div>
										</div>


										<div class="col-lg-6 col-md-12">
												
													<div class="panel panel-white">
														<div class="panel-heading">
															<h5 class="panel-title">Allocate room to Patient</h5>
														</div>
														<div class="panel-body">
														
<div class="form-group">
															
							<select name="room_id" class="form-control">
																<option value="">Select Rooms</option>
<?php $ret=mysqli_query($con,"select `id`, `room_type`,`room_cost` from rooms");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo $row['id'];?>" <?php echo @$room_details[0] == $row['id'] ? 'selected':''; ?>>
																	<?php echo htmlentities($row['room_type'].'  Rs.'.$row['room_cost'].'/-');?>
																</option>
																<?php } ?>
																
															</select>
														</div>
	<div class="form-group">
		<label>Admin Date</label>
								<input type="text" class="form-control datepicker1" name="admit_date" placeholder="Admit On" required value="<?php echo htmlentities($data['admit_date']);?>">
							</div>
						
<div class="form-group"><label>Discharge Date</label>
								<input type="text" class="form-control datepicker1" name="discharge_date" placeholder="Discharge Date" required value="<?php echo htmlentities($data['discharge_date']);?>">
							</div>
	<div class="form-group">
		<label>Patient Past History</label>
								<textarea class="form-control" name="past_history" placeholder="Patient Past History"><?php echo htmlentities($data['past_history']);?></textarea>
							</div>

														</div>	
													</div>
												
											</div>

											<div class="col-lg-6 col-md-12">
												
													<div class="panel panel-white">
														<div class="panel-heading">
															<h5 class="panel-title">Doctor Attended</h5>
														</div>
														<div class="panel-body">
															<div class="form-group">
																<select name="doc_attend[]" class="form-control" multiple> 
																<?php $sql=mysqli_query($con,"select * from doctors");
																	while($data1=mysqli_fetch_array($sql))
																	{ ?>
																<?php if (in_array($data1['id'], @explode(",",$data['doc_attend']))){ ?>
																	<option selected value="<?php echo $data1['id']; ?>"><?php echo $data1['doctorName']; ?></option>
																	<?php }else{ ?>
																	<option value="<?php echo $data1['id']; ?>"><?php echo $data1['doctorName']; ?></option>

																<?php } } ?>	
																</select>
															</div>
														</div>
													</div>

													<div class="panel panel-white">
														<div class="panel-heading">
															<h5 class="panel-title">Petient Medical Test</h5>
														</div>
														<div class="panel-body">
															<div class="form-group">
																<select name="petient_medical_test[]" class="form-control" id="petient_medical_test" multiple> 
																<?php $sql=mysqli_query($con,"select * from medical_test");
																	while($data1=mysqli_fetch_array($sql))
																	{ ?>
																<?php if (in_array($data1['id'], explode(",",$data['petient_medical_test']))){ ?>
																	<?php $calc_cost = $calc_cost + $data1['cost']; ?>
																	<option selected data-attr="<?php echo $data1['cost']; ?>" value="<?php echo $data1['id']; ?>"><?php echo $data1['medical_test_name']; ?></option>
																	<?php }else{ ?>
																	<option data-attr="<?php echo $data1['cost']; ?>" value="<?php echo $data1['id']; ?>"><?php echo $data1['medical_test_name']; ?></option>

																<?php } } ?>	
																</select>
															</div>
														</div>
													</div>
													<div class="form-group"><!--label>Medical Test Bill</label-->
								<input type="hidden" class="form-control"  id="medical_test_bill" name="medical_test_bill" placeholder="Bill Amount"  value="<?php echo $calc_cost;?>">
							</div>

							<div class="form-group"><label>Total Bill Paid By Patient</label>
								<input type="text" class="form-control"  id="billAmount" name="billAmount" placeholder="Bill Amount"  value="<?php echo htmlentities($data['billAmount']);?>">
							</div>
											</div>

											
											
											</div>
										</div>


																						
									</div>
									<a href="manage-users.php" class="btn btn-o btn-primary pull-left">
															Cancel
														</a> <span>&nbsp;</span>
									<button type="submit" name="submit" class="btn btn-o btn-primary pull-right">
															Update
														</button>
													</form>

								</div>
									</div>

						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
				<?php } ?>		
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
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
				$('.datepicker1').datepicker({
					    format: 'yyyy-mm-dd',
    					"setDate": new Date()
				});
				$('#petient_medical_test').change(function() {
        			var capacityValue = $('#petient_medical_test').find(':selected');
       				console.log(capacityValue);
    			});

			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
