<?php

include __DIR__ . "/server/connection.php";

session_start();

if(isset($_POST['remove'])) {


    $product_id = $_POST['product_id'];

    unset($_SESSION['cart'][$product_id]);

} elseif(isset($_POST['qty'])) {


    $product_id = $_POST['product_id'];

    $product = $_SESSION['cart'][$product_id];

    $product['quantity'] = $_POST['qty'];

    $_SESSION['cart'][$product_id] = $product;

} elseif(isset($_SESSION['cart'])) {

    $ids = array_column($_SESSION['cart'],"product_id");

    if(!in_array($_POST['product_id'] , $ids)) {

        $product_id =  $_POST['product_id'];

        $product = $conn->prepare("SELECT * FROM products WHERE id ='$product_id'");

        $product->execute();

        $product = $product->get_result();

        $item = $product->fetch_assoc();

        if($item != null) {
            
            $cart = [
                'id' => $item['id'],
                'name' => $item['name'],
                'image' => $item['image'],
                'price' => $item['price'],
                'category' => $item['category'],
                'quantity' => $_POST['quantity']
            ];

            $_SESSION['cart'][$product_id] = $cart;
        }

    } else {
        
    }


} else {
    $product_id =  $_POST['product_id'];

    $product = $conn->prepare("SELECT * FROM products WHERE id ='$product_id'");

    $product->execute();

    $product = $product->get_result();

    $item = $product->fetch_assoc();

    if($item != null) {
        
        $cart = [
            'id' => $item['id'],
            'name' => $item['name'],
            'image' => $item['image'],
            'price' => $item['price'],
            'category' => $item['category'],
            'quantity' => $_POST['quantity']
        ];

        $_SESSION['cart'][$product_id] = $cart;
       
    }
}


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
                                            <?php 
                                                    $cart = $_SESSION['cart'];

                                                    if($cart) { 

                                                    foreach ($cart as $key => $item){
                                            ?>
                                            <tr>
                                                <td class="images"><img src="<?php echo $item['image'] ?>" alt=""></td>
                                                <td class="product">
                                                    <ul>
                                                        <li class="first-cart"><?php echo $item['name'] ?></li>
                                                        <li>Category : <?php echo $item['category'] ?></li>
                                               
                                                    </ul>
                                                </td>
                                                <td class="stock">
                                                    <form method="post" action="cart.php" class="input-style">
                                                    <input type="hidden" name="product_id" value="<?php echo $key ?>">
                                                        <li class="quantity cart-plus-minus">
                                                            <input class="qty" type="number" name="qty" value="<?php echo $item['quantity'] ?>" readonly>
                                                        <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></li>
                                                    </form>
                                                </td>
                                                <td class="ptice">$<?php echo $item['price'] ?></td>
                                                <td class="stock">$ <?php echo $item['price']*$item['quantity'] ?></td>
                                                <td class="action">
                                                    <form action="cart.php" method="post">
                                                        <input type="hidden" name="product_id" value="<?php echo $key ?>">
                                                        <input name="remove" title="Remove From Cart" class="btn btn-danger" type="submit" value="X">
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php } } ?>

                                         
                                        </tbody>
                                    </table>
                       
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

    <script>

$(document).ready(function () {
    
         


         $('.dec , .inc').click(function (e) {
             console.log('sds')
             var form = $(this).closest('form').submit();
        
            
         })
      });

    </script>

</body>
</html>