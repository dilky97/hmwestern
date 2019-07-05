



<section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border">
                        <h3 class="bg-gray p-4">Register Now</h3>
						<?php echo form_open('users/registration');?>
						    <fieldset class="p-4">
							<input type="text" class="border p-3 w-100 my-2" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          						<?php echo form_error('name','<span class="help-block">','</span>'); ?>
		  					<input type="email" class="border p-3 w-100 my-2" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          						<?php echo form_error('email','<span class="help-block">','</span>'); ?>
							<input type="text" class="border p-3 w-100 my-2" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
							<input type="password" class="border p-3 w-100 my-2" name="password" placeholder="Password" required="">
          						<?php echo form_error('password','<span class="help-block">','</span>'); ?>
							<input type="password" class="border p-3 w-100 my-2" name="conf_password" placeholder="Confirm password" required="">
         						 <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>

							<div class="form-group">
            					<?php
            					if(!empty($user['gender']) && $user['gender'] == 'Female'){
                					$fcheck = 'checked="checked"';
                					$mcheck = '';
            					}else{
               						$mcheck = 'checked="checked"';
                					$fcheck = '';
            					}
            					?>
            					<div class="radio">
                					<label>
                						<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
                						Male
                					</label>
            					</div>
            					<div class="radio">
                					<label>
                  						<input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                  						Female
                					</label>
            					</div>
        					</div>	  
                                <div class="loggedin-forgot d-inline-flex my-3">
                                        <input type="checkbox" id="registering" class="mt-1">
                                        <label for="registering" class="px-2">By registering, you accept our <a class="text-primary font-weight-bold" href="terms-condition.html">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Register Now</button>
                            </fieldset>
                        <?php echo form_close('');?>
						<p class="footInfo">  Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


