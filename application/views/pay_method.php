<?php include_once('header.php')?>
<style>
    tab1 { padding-left: 8em; }
    tab2 { padding-left: 12em; }
</style>

<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Choose Payment Method</h3><br>
                   	    <?php form_open()?>
                                
                                <tab1><label for="payment_method"><br>Payment Method<br></label><br>
                                <tab2><input type="radio" name="payment_method" value="credit_debit"> Credit/Debit card<br>
                                <tab2><input type="radio" name="payment_method" value="paypal"> Paypal<br><br>
                                
                                <?php
                                    $pay_url = 'index.php/Product';
                                ?>
                                
                                <td><a href="<?php echo base_url($pay_url); ?>" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
                        <?php form_close()?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('footer.php')?>

