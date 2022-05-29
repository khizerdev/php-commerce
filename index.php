<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
  <?php include('components/head.php'); ?>
<body>
    
    <?php include('components/header.php'); ?>

    <?php 
      $title = 'Home';
 
      include('components/banner.php'); 
    ?>

    <div class="wpo-product-section section-padding">
    <div class="container">
    <div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="wpo-section-title">
							<span>-- Organic Products --</span>
							<h2>All Organic Products</h2>
						</div>
					</div>
				</div>
      <div class="product-wrap">
          <div class="row align-items-center">
              <?php include('server/front/products/index.php') ?>

              <?php while($row = $products->fetch_assoc()) { ?>
              <div class="col-xl-3 col-lg-6 col-md-4 col-sm-12 col-12">

                <?php include('components/product.php') ?>

              </div>
              <?php } ?>
             
            
          </div>
      </div>

    </div>
    </div>
    
    

    <?php include('components/footer.php'); ?>


    <!-- All JavaScript files
            ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>
</html>