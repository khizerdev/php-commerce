<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="wpOceans">
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
	<title>Organtio - Organic Food Shop HTML5 Template</title>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/flaticon.css" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/owl.theme.css" rel="stylesheet">
	<link href="assets/css/slick.css" rel="stylesheet">
	<link href="assets/css/slick-theme.css" rel="stylesheet">
	<link href="assets/css/swiper.min.css" rel="stylesheet">
	<link href="assets/css/owl.transitions.css" rel="stylesheet">
	<link href="assets/css/jquery.fancybox.css" rel="stylesheet">
	<link href="assets/css/odometer-theme-default.css" rel="stylesheet">
	<link href="assets/sass/style.css" rel="stylesheet">
</head>
<body>
    
    <?php include('components/header.php'); ?>

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
                  <div class="wpo-category-single">
                      <div class="wpo-category-img">
                          <img src="<?php echo $row['image']; ?>" alt="">
                          <ul class="wpo-category-link">
                              <li><a href="wishlist.html" data-bs-toggle="tooltip"
                                  data-bs-html="true" title="Add To Wishlist"><i class="fa fa-heart"
                                          aria-hidden="true"></i></a></li>
                              <li><a href="cart.html" data-bs-toggle="tooltip"
                                      data-bs-html="true" title="Add To Cart"><i
                                          class="fi flaticon-shopping-cart"
                                          aria-hidden="true"></i></a>
                              </li>
                              <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                  <button data-bs-toggle="tooltip" data-bs-html="true"
                                      title="Quick View"><i class="fi ti-eye"></i></button>
                              </li>
                          </ul>
  
                      </div>
                      <div class="wpo-category-text">
                          <div class="category-reting">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                          </div>
                          <h2><a href="product-single.html"><?php echo $row['name']; ?></a></h2>
                          <div class="product-price">
                              <ul>
                                
                                <?php if($row['discount_price'] != null) {  ?>

                                <li>  
                                  <?php  echo '$'.$row['discount_price']; ?>
                                </li>

                                <li> 
                                  <?php echo '$'.$row['price']; ?>
                                </li>

                                <?php } else { ?>

                                <li>  
                                 
                                </li>

                                <li> 
                                  <?php echo '$'.$row['price']; ?>
                                </li>

                                <?php }  ?>

                                 
                                  
                             
                                
                              </ul>
                          </div>
                      </div>
                  </div>
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