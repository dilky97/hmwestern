



<?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>

<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Login Now</h3>
                    <?php echo form_open('User_profile');?>
                        <fieldset class="p-4">
                            <input type="email" placeholder="Email"  name="email" class="border p-3 w-100 my-2">
							<?php echo form_error('email','<span class="help-block">','</span>'); ?>
                            <input type="password" placeholder="Password" name="password" class="border p-3 w-100 my-2">
                            <?php echo form_error('password','<span class="help-block">','</span>'); ?>
                            <?php echo form_submit(['name'=>'login', 'value'=>'Login','class'=>'d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3']);?>
                            
                            <!-- <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Log in</button> -->
                            <a class="mt-3 d-inline-block text-primary" <a href="<?php echo base_url(); ?>index.php/users/registration">Register Now</a>
                        </fieldset> 
                    <?php echo form_close('');?>
                </div>
            </div>
        </div>
    </div>
</section>



