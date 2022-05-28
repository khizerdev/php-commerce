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