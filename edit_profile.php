<?php 
ob_start();
$page = "edit";
$active = "edit";

	include("include/header2 copy.php");
	
	$success = "";
	
	if(isset($_POST['save'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$state = $_POST['state'];
		$address = $_POST['address'];
		$about_me = $_POST['about_me'];
		
		$sql_save = "UPDATE user SET
						first_name = '".$first_name."',
						last_name = '".$last_name."',
						phone = '".$phone."',
						email = '".$email."',
						gender = '".$gender."',
						state = '".$state."',
						address = '".$address."',
						about_me = '".$about_me."'
					WHERE username = '".$login_session."'
					";
					
		$query_save = main_query($sql_save);
		if($query_save = true ){
			$success =  '<div class="alert alert-success" style="background: #29aafe; color: #fff; font-size: 18px;">
					  <strong>&#10004; &nbsp; </strong> Your Profile Has Been Updated Successfully.
					</div>';
		}
				//header("Location: edit_profile.php");
			
		
	}
	

?>
	<section class="job-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7 co-xs-12 text-left">
					<h3><?= $edit['page_title']?></h3>
				</div>
				<div class="col-md-6 col-sm-5 co-xs-12 text-right">
					<div class="bread">
						<ol class="breadcrumb">
							<li class="active">You Are Logged in</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
        </section>	
		
        <section class="dashboard-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
					
					<?php 
					
						// Including Navigation side bar
						include("include/aside.php");
					
					?>
					
                        <div class="col-md-8 col-sm-8 col-xs-12">
						<?php echo $success; ?>
                            <div class="heading-inner first-heading">
                                <p class="title">Edit Profile</p>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="profile-edit row">
                                    <form action="" method="POST">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>First Name <span class="required"></span></label>
                                                <input type="text" placeholder="" name="first_name" value="<?= $first_name ?>" style="font-weight: bold;" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Last Name <span class="required"></span></label>
                                                <input type="text" name="last_name" value="<?= $last_name ?>" style="font-weight: bold;" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Phone <span class="required"></span></label>
                                                <input type="text" placeholder="" name="phone" value="<?= $phone ?>" style="font-weight: bold;" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Email <span class="required"></span></label>
                                                <input type="email" placeholder="" name="email" value="<?= $email ?>" style="font-weight: bold;" class="form-control">
                                            </div>
                                        </div>
										 <div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label >Gender </label>
												<select class="questions-category form-control" name="gender">
													<option value="Select" style="font-weight: bold;">Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label >State Of Origin </label>
											<select class="questions-category form-control" name="state">
    <option value="<?= $state ?>" style="font-weight: bold;"><?= $state ?></option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
    <option value="Delhi">Delhi</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Ladakh">Ladakh</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value="Puducherry">Puducherry</option>
</select>

										</div>
										</div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Address <span class="required"></span></label>
                                                <input type="text" style="font-weight: bold;" name="address" value="<?= $address ?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>About yourSelf <span class="required"></span></label>
                                                <textarea cols="6" rows="8" style="font-weight: bold;" name="about_me"  placeholder="" class="form-control"><?= $about_me ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <button class="btn btn-default pull-right" type="submit" name="save" > Save Profile <i class="fa fa-angle-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		
        <?php include("include/footer.php"); ?>