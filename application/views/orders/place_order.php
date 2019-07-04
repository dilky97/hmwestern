<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
/* Update item quantity */
function updateCartItem(obj, rowid){
	$.get("<?php echo base_url('order/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
		if(resp == 'ok'){
			location.reload();
		}else{
			alert('Cart update failed, please try again.');
		}
	});
}
</script>
<!-- <section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				Advance Search -->
				<!-- <div class="advance-search">
					<form>
						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="What are you looking for">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputCategory4" placeholder="Category">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Location">
							</div>
							<div class="form-group col-md-2">

								<button type="submit" class="btn btn-primary">Search Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section> --> 
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Available Products</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="category-sidebar">

            <div class="widget category-list">
                <h4 class="widget-header">Categories</h4>
                <ul class="category-list">
                    <li><a href="category.html">Fresh Fish <span>93</span></a></li>
                    <li><a href="category.html">Canned Fish <span>233</span></a></li>
                    <li><a href="category.html">Shellfish <span>183</span></a></li>
                    <li><a href="category.html">Catch of the Day <span>15</span></a></li>

                </ul>
            </div>

            <div class="widget filter">
                <h4 class="widget-header">Show Produts</h4>
                <select>
                    <option>Popularity</option>
                    <option value="1">Top rated</option>
                    <option value="2">Lowest Price</option>
                    <option value="4">Highest Price</option>
                </select>
            </div>

            <div class="widget price-range w-100">
                <h4 class="widget-header">Price Range</h4>
                <div class="block">
                    <input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5" data-slider-value="[0,5000]">
                    <div class="d-flex justify-content-between mt-2">
                            <span class="value">$10 - $5000</span>
                    </div>
                </div>
            </div>

            

                </div>
            </div>
            <!-- <div class="col-lg-9 col-md-8">
                <div class="category-search-filter">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Short</strong>
                            <select>
                                <option>Most Recent</option>
                                <option value="1">Most Popular</option>
                                <option value="2">Lowest Price</option>
                                <option value="4">Highest Price</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="view">
                                <strong>Views</strong>
                                <ul class="list-inline view-switcher">
                                    <li class="list-inline-item">
                                        <a href="category.html"><i class="fa fa-th-large"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="category.html" class="text-info"><i class="fa fa-reorder"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->

    <div class="col-lg-9 col-md-8"> 
        <div class="row">
            <table class="table">
            <thead>
                <tr>
                    <th width="10%"></th>
                    <th width="30%">Product</th>
                    <th width="15%">Price</th>
                    <th width="13%">Quantity</th>
                    <th width="20%">Subtotal</th>
                    <th width="12%"></th>
                </tr>
            </thead>
            <tbody>
                <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
                <tr>
                    <td>
                        <?php $imageURL = !empty($item["image"])?base_url('images/products/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                        <img src="<?php echo $imageURL; ?>" width="50"/>
                    </td>
                    <td><?php echo $item["name"]; ?></td>
                    <td><?php echo '$'.$item["price"].' USD'; ?></td>
                    <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                    <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
                    <td>
                        <a href="<?php echo base_url('order/removeItem/'.$item["rowid"]); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Remove</a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="6"><p>Your cart is empty.....</p></td>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td><a href="<?php echo base_url('index.php/Product/'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
                    <td colspan="3"></td>
                    <?php if($this->cart->total_items() > 0){ ?>
                    <td class="text-left">Grand Total: <b><?php echo '$'.$this->cart->total().' USD'; ?></b></td>
                    <td><a href="<?php echo base_url('index.php/checkout/'); ?>" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
                    <?php } ?>
                </tr>
            </tfoot>
            </table>
        </div>
    </div>
</div>
