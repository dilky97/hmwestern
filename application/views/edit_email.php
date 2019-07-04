<div class="col-lg-6 col-md-6">
    <!-- Change Password -->
    <div class="widget change-password">
        <h3 class="widget-header user">Edit Password</h3>
        <form action="#">
            <!-- Current Password -->
            <div class="form-group">
                <label for="current-password">Current Password</label>
                <?php echo form_password(['name'=>'new_email','class'=>'form-control']);?>
                <!-- <input type="password" class="form-control" id="current-password"> -->
            </div>
            <!-- New Password -->
            <div class="form-group">
                <label for="new-password">New Password</label>
                <?php echo form_password(['name'=>'new_password','class'=>'form-control']);?>
                <!-- <input type="password" class="form-control" id="new_password"> -->
            </div>
            <!-- Confirm New Password -->
            <div class="form-group">
                <label for="confirm-password">Confirm New Password</label>
                <?php echo form_password(['name'=>'confirm_password','class'=>'form-control']);?>
                <!-- <input type="password" class="form-control" id="confirm_password"> -->
            </div>
            <!-- Submit Button -->
            <?php echo form_submit(['name'=>'submit_password', 'value'=>'Change Password','class'=>'btn btn-transparent']);?>
            <!-- <button class="btn btn-transparent">Change Password</button> -->
        </form>
    </div>
</div>
<div class="col-lg-6 col-md-6">
    <!-- Change Email Address -->
    <div class="widget change-email mb-0">
        <h3 class="widget-header user">Edit Email Address</h3>
        <form action="#">
            <!-- Current E-mail -->
            <div class="form-group">
                <label for="current-email">Current Email</label>
                <?php echo form_input(['name'=>'current_email','class'=>'form-control']);?>
                <!-- <input type="email" class="form-control" id="current-email"> -->
            </div>
            <!-- New email -->
            <div class="form-group">
                <label for="new-email">New email</label>
                <?php echo form_input(['name'=>'new_email','class'=>'form-control']);?>
                <!-- <input type="email" class="form-control" id="new_email"> -->
            </div>
            <!-- Submit Button -->
            <?php echo form_submit(['name'=>'submit_email', 'value'=>'Change email','class'=>'btn btn-transparent']);?>
            <!-- <button class="btn btn-transparent">Change email</button> -->
        </form>
    </div>
</div>