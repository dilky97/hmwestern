<?php include_once('header.php');?>
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
            <?php if($msg = $this->session->flashdata('msg')):?>
				<?php echo $msg; ?>
			<?php endif;?>
			</div>
			<div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address Line 1</th>
                    <th scope="col">Address Line 2</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">Telephone</th>

                    </tr>
                </thead>
                <tbody>
                <?php if(count($customers)>0):?>
                    <?php foreach($customers as $customer): ?>
                    
                    <tr>
                    <td><?php echo $customer->first_name; ?></td>
                    <td><?php echo $customer->last_name; ?></td>
                    <td><?php echo $customer->address_line1; ?></td>
                    <td><?php echo $customer->address_line2; ?></td>
                    <td><?php echo $customer->city; ?></td>
                    <td><?php echo $customer->country; ?></td>
                    <td><?php echo $customer->postal_code; ?></td>
                    <td><?php echo $customer->telephone; ?></td>
                    <td>
                        <div class="btn-group btn-group-sm">
                        <?php echo anchor("Welcome/view_a_user/{$customer->id}",'View', ['class'=>'btn btn-primary']); ?>
                        <?php echo anchor("Welcome/edit_user/{$customer->id}",'Update', ['class'=>'btn btn-success']); ?>
                        <?php echo anchor("Welcome/delete_user/{$customer->id}",'Delete', ['class'=>'btn btn-danger']); ?></td>
                        </div>
                    </tr>
                <?php endforeach; ?>
                <?php else:?>
                    <tr>
                        <td>No Records found</td>
                    </tr>
                <?php endif;?>

                </tbody>
                </table>
				
			</div>
		</div>
	</div>
</section>

<?php include_once('footer.php');?>