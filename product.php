<?php

include __DIR__ . "/server/connection.php";

if(isset($_GET['title'])) {

    $slug = $_GET['title'];

    $product = $conn->prepare("SELECT * FROM products WHERE slug like '".$slug."%'");

    // $product->bind_param("i" , $slug);

    $product->execute();

    $product = $product->get_result();

    // var_dump($product->fetch_assoc());

}  else {
    header('location: index.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
  <?php include('components/head.php'); ?>
<body>
    
    <?php include('components/header.php'); ?>

    <?php 
   
     $title = isset($row['name']) ? $row['name'] : 'Product';
      
          
 
      include('components/banner.php'); 
    ?>

    <!-- product-single-section  start-->

    <div class="product-single-section section-padding">
            <div class="container">

            <?php while($row = $product->fetch_assoc()) {  ?>
                <form action="cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">

                    <div class="product-details">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="product-single-img">
                                    <div class="product-active owl-carousel">
                                        <div class="item">
                                            <img src="<?php echo $row['image']; ?>" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="assets/images/product-details/2.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="assets/images/product-details/3.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="assets/images/product-details/1.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="assets/images/product-details/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="product-thumbnil-active  owl-carousel">
                                        <div class="item">
                                            <img src="<?php echo $row['image']; ?>" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="assets/images/product-details/2.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="assets/images/product-details/3.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="assets/images/product-details/1.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="assets/images/product-details/2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-single-content">
                                    <h5><?php echo $row['name']; ?></h5>
                                    <h6><?php echo '$'.$row['price']; ?></h6>
                                    <ul class="rating">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                    <p> <b>Category</b>: <?php echo $row['category']; ?>
                                    </p>
                                    <p><?php echo $row['description']; ?>
                                    </p>
                                
                                    <div class="pro-single-btn">
                                        <div class="quantity cart-plus-minus">
                                            <input name="quantity" type="number" value="1">
                                            <div class="dec qtybutton"></div>
                                            <div class="inc qtybutton"></div>
                                        </div>
                                        <button type="submit" class="theme-btn">Add to cart</button>
                                    </div>
                                    <div class="social-share">
                                        <span>Share with : </span>
                                        <ul class="socialLinks">
                                            <li><a href='https://www.facebook.com/sharer.php?u=<?php echo $_SERVER['REQUEST_URI'] ?>'><i class="fa fa-facebook"></i></a></li>
                                    
                                            <li><a href='#'><i class="fa fa-twitter"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab-area">
                        <ul class="nav nav-mb-3 main-tab" id="tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="descripton-tab" data-bs-toggle="pill"
                                    data-bs-target="#descripton" type="button" role="tab" aria-controls="descripton"
                                    aria-selected="true">Description</button>
                            </li>
                        
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Ratings-tab" data-bs-toggle="pill" data-bs-target="#Ratings"
                                    type="button" role="tab" aria-controls="Ratings" aria-selected="false">Ratings</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="descripton" role="tabpanel"
                                aria-labelledby="descripton-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="Descriptions-item">
                                                <p><?php echo '$'.$row['description']; ?></p>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Ratings" role="tabpanel" aria-labelledby="Ratings-tab">
                                <div class="container">
                                    <div class="rating-section">
                                        <div class="row">
                                            <div class="col-lg-10 offset-lg-2">
                                                <div class="rating-top">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="rating-sub">
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                </ul>
                                                                <span>( Based on 45.86K reviews)</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="rating-right">
                                                                <div class="rating-right-item">
                                                                    <ul>
                                                                        <li>
                                                                            <ul>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <div class="progress">
                                                                                <div class="bar" style="width:70%">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>70% ( 32.10k)</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="rating-right-item">
                                                                    <ul>
                                                                        <li>
                                                                            <ul>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <div class="progress">
                                                                                <div class="bar" style="width:60%">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>15% ( 6.88k)</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="rating-right-item">
                                                                    <ul>
                                                                        <li>
                                                                            <ul>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <div class="progress">
                                                                                <div class="bar" style="width:40%">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>10% ( 4.55k)</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="rating-right-item">
                                                                    <ul>
                                                                        <li>
                                                                            <ul>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <div class="progress">
                                                                                <div class="bar" style="width:20%">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>5% ( 2.29k)</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="rating-right-item">
                                                                    <ul>
                                                                        <li>
                                                                            <ul>
                                                                                <li><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                                <li><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <div class="progress">
                                                                                <div class="bar" style="width:0">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>0% ( 0.00)</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="rating-bottom">

                                                    <div class="write-review-btn">
                                                        <button class="theme-btn">Write A Review</button>
                                                    </div>

                                                    <div class="rating-give-section-items">
                                                        <div class="review-btn-btn">
                                                            <button class="theme-btn s2">Cancel Review</button>
                                                        </div>

                                                        <div class="rating-give-section">
                                                            <div class="rating-give-section-wrap">
                                                                <form>
                                                                    <span>Give A Review</span>
                                                                    <div class="give-rating">
                                                                        <label>
                                                                            <input type="radio" name="stars" value="1" />
                                                                            <span class="icon">★</span>
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" name="stars" value="2" />
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" name="stars" value="3" />
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" name="stars" value="4" />
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" name="stars" value="5" />
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                            <span class="icon">★</span>
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input type="text" placeholder="Your Name...">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" placeholder="Your Email...">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea name="rv" id="rv" cols="30" rows="10"
                                                                            placeholder="Your Review..."></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="button" class="theme-btn">Submit
                                                                            Review</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="review-rating-wrap">
                                                        <div class="rating-review">
                                                            <div class="rating-review-author">
                                                                <div class="rating-review-author-img">
                                                                    <img src="assets/images/product-details/author.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="rating-review-author-text">
                                                                    <div class="rating-review-author-text-inner">
                                                                        <ul class="ratting">
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                        </ul>
                                                                        <span>06/18/22</span>
                                                                    </div>
                                                                    <p>Ema Aliana</p>
                                                                </div>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam hendrerit sem porta dolor congue sagittis Lorem
                                                                ipsum dolor sit amet consectetur.</p>
                                                        </div>
                                                        <div class="rating-review">
                                                            <div class="rating-review-author">
                                                                <div class="rating-review-author-img">
                                                                    <img src="assets/images/product-details/author2.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="rating-review-author-text">
                                                                    <div class="rating-review-author-text-inner">
                                                                        <ul class="ratting">
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                        </ul>
                                                                        <span>06/18/22</span>
                                                                    </div>
                                                                    <p>John Clyne</p>
                                                                </div>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam hendrerit sem porta dolor congue sagittis Lorem
                                                                ipsum dolor sit amet consectetur.</p>
                                                        </div>
                                                        <div class="rating-review">
                                                            <div class="rating-review-author">
                                                                <div class="rating-review-author-img">
                                                                    <img src="assets/images/product-details/author3.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="rating-review-author-text">
                                                                    <div class="rating-review-author-text-inner">
                                                                        <ul class="ratting">
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star"
                                                                                    aria-hidden="true"></i></li>
                                                                            <li><i class="fa fa-star-o"
                                                                                    aria-hidden="true"></i></li>
                                                                        </ul>
                                                                        <span>06/18/22</span>
                                                                    </div>
                                                                    <p>Lily Jameson</p>
                                                                </div>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam hendrerit sem porta dolor congue sagittis Lorem
                                                                ipsum dolor sit amet consectetur.</p>
                                                        </div>
                                                        <div class="rating-review">
                                                            <a href="#">Load More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </form>
               

                <?php } ?>
            </div>
  
        </div>
        <!-- product-single-section  end-->

  

    <?php include('components/footer.php'); ?>

    <?php include('components/script.php'); ?>


    
</body>
</html>