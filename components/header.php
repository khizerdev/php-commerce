<!-- Start header -->
<header id="header">
	
    <div class="wpo-site-header">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                        <div class="mobail-menu">
                            <button type="button" class="navbar-toggler open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar first-angle"></span>
                                <span class="icon-bar middle-angle"></span>
                                <span class="icon-bar last-angle"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-5">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.svg"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>

                            <?php 
                                  
                                $logged_in = isset($_SESSION['logged_in']) ? true : false;
                            ?>

                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#"><?php echo !$logged_in ? 'Login/Register' : 'My Account'; ?></a>
                                    <ul class="sub-menu">
                                        
                                        <?php if(!$logged_in) { ?>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="register.php">Register</a></li>
                                        <?php } else { ?>
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                            <a href="logout.php">Logout</a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end of nav-collapse -->
                    </div>
                    <div class="col-lg-2 col-md-4 col-2">
                        <div class="header-right">
                            <div class="header-search-form-wrapper">
                                <div class="cart-search-contact">
                                    <button class="search-toggle-btn"><i class="fi flaticon-loupe"></i></button>
                                    <div class="header-search-form">
                                        <form>
                                            <div>
                                                <input type="text" class="form-control"
                                                    placeholder="Search here...">
                                                <button type="submit"><i class="fi flaticon-loupe"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="header-wishlist-form-wrapper mini-cart">
                                <button class="wishlist-toggle-btn"> <i class="fa fa-heart"
                                        aria-hidden="true"></i><span class="cart-count">03</span></button>
                                <div class="mini-wislist-content">
                                    <button class="mini-cart-close"><i class="ti-close"></i></button>
                                    <div class="mini-cart-items">
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="shop.html"><img
                                                        src="assets/images/shop/mini-cart/img-1.jpg" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="shop.html">Bright Side Vegetarianism.</a>
                                                <span class="mini-cart-item-price">$20.15 x 1</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i
                                                            class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="shop.html"><img
                                                        src="assets/images/shop/mini-cart/img-2.jpg" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="shop.html">Eco Vegetable.</a>
                                                <span class="mini-cart-item-price">$13.25 x 2</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i
                                                            class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="shop.html"><img
                                                        src="assets/images/shop/mini-cart/img-1.jpg" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="shop.html">House of Veggies</a>
                                                <span class="mini-cart-item-price">$20.15 x 1</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i
                                                            class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart-action clearfix">
                                        <span class="mini-checkout-price">Subtotal: <span>$215.14</span></span>
                                        <div class="mini-btn">
                                            <a href="checkout.html" class="view-cart-btn s1">Checkout</a>
                                            <a href="cart.html" class="view-cart-btn">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mini-cart">
                                <button class="cart-toggle-btn nt"> <i class="fi flaticon-shopping-cart"
                                        aria-hidden="true"></i> <span class="cart-count">02</span></button>
                                <div class="mini-cart-content">
                                    <button class="mini-cart-close"><i class="ti-close"></i></button>
                                    <div class="mini-cart-items">
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="shop.html"><img
                                                        src="assets/images/shop/mini-cart/img-1.jpg" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="shop.html">Modern Food Trends</a>
                                                <span class="mini-cart-item-price">$20.15 x 1</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i
                                                            class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="shop.html"><img
                                                        src="assets/images/shop/mini-cart/img-3.jpg" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="shop.html">Rocky Mountain Vegetarian</a>
                                                <span class="mini-cart-item-price">$13.25 x 2</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i
                                                            class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart-action clearfix">
                                        <span class="mini-checkout-price">Subtotal: <span>$215.14</span></span>
                                        <div class="mini-btn">
                                            <a href="checkout.php" class="view-cart-btn s1">Checkout</a>
                                            <a href="cart.php" class="view-cart-btn">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </div>
</header>
<!-- end of header -->