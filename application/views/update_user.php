<?php include_once('header.php');?>
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<img src="<?php echo base_url('images/user/user-thumb.jpg');?>" alt="" class="img-fluid">
						</div>
						<!-- User Name -->
						<h5 class="text-center"><?php echo $user->first_name?></h5>
					</div>
					<!-- Dashboard Links -->
					<div class="widget dashboard-links">
						<ul>
							<li><a class="my-1 d-inline-block" href="">My Account</a></li>
							<li><a class="my-1 d-inline-block" href="">My Orders</a></li>
							<li><a class="my-1 d-inline-block" href="">My Payments</span></a></li>
							<li><a class="my-1 d-inline-block" href="">Settings</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Edit profile</h2>
					<p>You can make changes to your profile here</p>
				</div>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Edit Personal Information</h3>
							
							<?php echo form_open("welcome/update_user/{$user->id}",['class'=>'form-horizontal']);?>
								<!-- First Name -->
								<div class="form-group">
									<label for="first_name">First Name</label>
									<?php echo form_input(['name'=>'first_name','class'=>'form-control','value'=>set_value('first_name',$user->first_name)]);?>
									<?php echo form_error('first_name','<div class="text-danger">','</div>'); ?>
									<!-- <input type="text" class="form-control" id="first-name"> -->
								</div>
								<!-- Last Name -->
								<div class="form-group">
									<label for="last_name">Last Name</label>
									<?php echo form_input(['name'=>'last_name','class'=>'form-control','value'=>set_value('last_name',$user->last_name)]);?>
									<?php echo form_error('last_name','<div class="text-danger">','</div>'); ?>
									<!-- <input type="text" class="form-control" id="last_name"> -->
								</div>
								<!-- File chooser -->
								<div class="form-group choose-file d-inline-flex">
									<i class="fa fa-user text-center px-3"></i>
									<input type="file" class="form-control-file mt-2 pt-1" id="input-file">
                                 </div>
								
								<!-- Submit button -->
								<!-- <//?php echo form_submit(['name'=>'save_info', 'value'=>'Save Changes','class'=>'btn btn-transparent']);?> -->
								<!-- <button class="btn btn-transparent">Save Changes</button> -->
							
						</div>
                    </div>
                    <div class="col-lg-6 col-md-6">
						<!-- Shipping Info -->
						<div class="widget change-shipping-info">
							<h3 class="widget-header user">Edit Shipping Information</h3>
							
							<div class="form-group">
										<label for="address_line1">Address Line 1</label>
										<?php echo form_input(['name'=>'address_line1','class'=>'form-control','value'=>set_value('address_line1',$user->address_line1)]);?>
										<!-- <input type="text" class="form-control" id="address_line1" name="address_line1"> -->
									</div>
									<div class="form-group">
										<label for="address_line2">Address Line 2</label>
										<?php echo form_input(['name'=>'address_line2','class'=>'form-control','value'=>set_value('address_line2',$user->address_line2)]);?>
										<!-- <input type="text" class="form-control" id="address_line2" name="address_line2"> -->
									</div>
									<div class="form-group">
										<label for="city">City</label>
										<?php echo form_input(['name'=>'city','class'=>'form-control','value'=>set_value('city',$user->city)]);?>
										<!-- <input type="text" class="form-control" id="city" name="city"> -->
									</div>
									<div class="form-group">
										<label for="country">Country</label>
										<?php echo form_input(['name'=>'country','class'=>'form-control','value'=>set_value('country',$user->country)]);?>
										<!-- <input type="text" class="form-control" id="country" name="country"> -->
									</div>
									<div class="form-group">
										<label for="postal_code">Postal Code</label>
										<?php echo form_input(['name'=>'postal_code','class'=>'form-control','value'=>set_value('postal_code',$user->postal_code)]);?>
										<!-- <input type="text" class="form-control" id="postal_code" name="postal_code"> -->
									</div>
									<div class="form-group">
										<label for="telephone">Contact No</label>
										<?php echo form_input(['name'=>'telephone','class'=>'form-control','value'=>set_value('telephone',$user->telephone)]);?>
										<!-- <input type="text" class="form-control" id="telephone" name="telephone"> -->
									</div>
								<!-- Submit Button -->
								<?php echo form_submit(['name'=>'update_user', 'value'=>'Save Changes','class'=>'btn btn-transparent']);?>
								
								<!-- <button class="btn btn-transparent">Save Changes</button> -->
							<?php echo form_close();?>
						</div>
					</div>
					<?php include_once('edit_email.php');?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include_once('footer.php');?>