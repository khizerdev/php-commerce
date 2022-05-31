<?php



?>


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
  <?php include('components/head.php'); ?>
<body>
    
    <?php include('components/header.php'); ?>

    <?php 
   
     $title = 'Cart';
      
          
 
      include('components/banner.php'); 
    ?>

<div class="cart-area section-padding">
            <div class="container">
                <div class="form">
                    <div class="cart-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <form action="https://wpocean.com/html/tf/organtio/cart">
                                    <table class="table-responsive cart-wrap">
                                        <thead>
                                            <tr>
                                                <th class="images images-b">Image</th>
                                                <th class="product-2">Product Name</th>
                                                <th class="pr">Quantity</th>
                                                <th class="ptice">Price</th>
                                                <th class="stock">Total Price</th>
                                                <th class="remove remove-b">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="images"><img src="assets/images/category/1.png" alt=""></td>
                                                <td class="product">
                                                    <ul>
                                                        <li class="first-cart">Key Lime</li>
                                                        <li>Brand : Lumi fruits</li>
                                                        <li>Size : 3KG</li>
                                                    </ul>
                                                </td>
                                                <td class="stock">
                                                    <ul class="input-style">
                                                        <li class="quantity cart-plus-minus">
                                                            <input type="text" value="1">
                                                        <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></li>
                                                    </ul>
                                                </td>
                                                <td class="ptice">$ 250</td>
                                                <td class="stock">$ 250</td>
                                                <td class="action">
                                                    <ul>
                                                        <li class="w-btn"><a data-bs-toggle="tooltip" data-bs-html="true" title="" href="#" data-bs-original-title="Remove to Cart" aria-label="Remove to Cart"><img src="assets/images/ft-icon/delete-icon.svg" alt=""></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                </form>
                                <div class="submit-btn-area">
                                    <ul>
                                        <li><a class="theme-btn" href="shop.html">Continue Shopping <i class="fa fa-angle-double-right"></i></a></li>
                                        <li><button type="submit">Update Cart</button></li>
                                    </ul>
                                </div>
                                <div class="cart-product-list">
                                    <ul>
                                        <li>Total product<span>( 05 )</span></li>
                                        <li>Sub Price<span>$2250</span></li>
                                        <li>Vat<span>$50</span></li>
                                        <li>Eco Tax<span>$100</span></li>
                                        <li>Delivery Charge<span>$100</span></li>
                                        <li class="cart-b">Total Price<span>$2500</span></li>
                                    </ul>
                                </div>

                                <div class="submit-btn-area">
                                    <ul>
                                        <li><a class="theme-btn" href="checkout.html">Proceed to Checkout <i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  

    <?php include('components/footer.php'); ?>

    <?php include('components/script.php'); ?>


    
</body>
</html>