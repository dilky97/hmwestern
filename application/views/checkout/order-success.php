<br>
<div class="container">
<h2>Order Status</h2>
<p class="ord-succ" style="color:#66cc00;">Your order has been placed successfully.</p>

<!-- Order status & shipping info -->
<div class="row col-lg-12 ord-addr-info">
    <div class="col-sm-6 adr">
        <div class="hdr">Shipping Address</div>
        <p><?php echo $order['name']; ?></p>
        <p><?php echo $order['email']; ?></p>
        <p><?php echo $order['phone']; ?></p>
        <p><?php echo $order['address']; ?></p>
    </div>
    
    <div class="col-sm-6 info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID</b> #<?php echo $order['order_id']; ?></p>
        <p><b>Total</b> <?php echo '$'.$order['grand_total'].' USD'; ?></p>
    </div>
</div>

<!-- Order items -->
<div class="row ord-items">
    <h4>Ordered Products</h4>
    <?php if(!empty($order['items'])){ foreach($order['items'] as $item){ ?>
    <div class="col-lg-12 item">
        <div class="col-sm-4">
            <p><b><?php echo $item["product_name"]; ?></b></p>
            <p><?php echo '$'.$item["product_price"].' USD'; ?></p>
            <p>QTY: <?php echo $item["quantity"]; ?></p>
        </div>
        <div class="col-sm-2">
            <p><b><?php echo '$'.$item["sub_total"].' USD'; ?></b></p>
        </div>
    </div>
    <?php } } ?>
</div>
</div>
<div class="col-lg-5 col-md-8 align-item-center">
<td><a href="<?php echo base_url('index.php/payment/'); ?>" class="btn btn-success btn-block">Choose Payment method <i class="glyphicon glyphicon-menu-right"></i></a></td>
</div>
<br><br>