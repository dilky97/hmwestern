<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
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
</section>
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
            <div class="col-lg-9 col-md-8">
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
                </div>


    <div class="ad-listing-list mt-20">
    <?php if(!empty($products)){ foreach($products as $row){ ?>
        <div class="row p-lg-3 p-sm-5 p-4">
            <div class="col-lg-4 align-self-center">
                    <img src="<?php echo base_url('images/products/'.$row['product_img']); ?>" class="img-fluid"/>
                
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="ad-listing-content">
                            <div>
                                <h4 class="font-weight-bold"><?php echo $row['product_name']; ?></h4>
                            </div>
                            <!-- <ul class="list-inline mt-2 mb-3">
                                <li class="list-inline-item"><a href="category.html"> <i class="fa fa-folder-open-o"></i> Electronics</a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-calendar"></i>26th December</a></li>
                            </ul> -->
                            <h4 class="pull-right">$<?php echo $row['product_price']; ?> USD</h4>
                            <p><?php echo $row['description']; ?></p>
                            <!-- <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p> -->
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="atc">
                            <a href="<?php echo base_url('index.php/product/addToCart/'.$row['product_id']); ?>" class="btn btn-success">Place an order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?><p>Product(s) not found...</p><?php } ?>
    </div>

    </section>
