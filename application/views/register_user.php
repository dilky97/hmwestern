<?php include_once('header.php')?>
<section class="login py-5 border-top-1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 align-item-center">
            <div class="border border">
                <h3 class="bg-gray p-4">Register Now</h3>
                <?php echo form_open('register/register_user');?>
                    <fieldset class="p-4">
                        <!-- <input type="email" placeholder="Email*" class="border p-3 w-100 my-2"> -->
                        <?php echo form_input(['name'=>'email','class'=>'border p-3 w-100 my-2','placeholder'=>'E-mail*']);?>
                        <?php echo form_error('email','<div class="text-danger">','</div>'); ?>

                        <!-- <input type="password" placeholder="Password*" class="border p-3 w-100 my-2"> -->
                        <?php echo form_password(['name'=>'password','class'=>'border p-3 w-100 my-2','placeholder'=>'Password*']);?>
                        <?php echo form_error('password','<div class="text-danger">','</div>'); ?>


                        <!-- <input type="password" placeholder="Confirm Password*" class="border p-3 w-100 my-2"> -->
                        <?php echo form_password(['name'=>'password_confirm','class'=>'border p-3 w-100 my-2','placeholder'=>'Confirm Password*']);?>
                        <?php echo form_error('password_confirm','<div class="text-danger">','</div>'); ?>


                        <div class="loggedin-forgot d-inline-flex my-3">
                                <input type="checkbox" id="registering" class="mt-1">
                                <label for="registering" class="px-2">By registering, you accept our <a class="text-primary font-weight-bold" href="terms-condition.html">Terms & Conditions</a></label>
                        </div>
                        <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Register Now</button>
                    </fieldset>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
</section>
<?php include_once('footer.php')?>