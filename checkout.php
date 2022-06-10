<?php

include __DIR__ . "/server/connection.php";

session_start();

$cart = $_SESSION['cart'];


if(count($cart) < 0) {
    header('location: index.php');
}

if(!empty($_POST)) {

    $name = $_POST['name'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $notes = $_POST['notes'];
    $user_id = 1;
 
    $delivery_charges = 10;
    $total = $delivery_charges;

    foreach ($cart as $key => $item){
        $total += $item['price']*$item['quantity'];
    }
    
    $sql = "INSERT INTO orders(user_id,name,phone,city,address,total,notes) VALUES(?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param('isissis' , $user_id,$name,$phone,$city,$address,$total,$notes);

    if(!$stmt){
        echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
     }
    $stmt->execute();

    $order_id = $stmt->insert_id ? $stmt->insert_id : 1;


    $cart = $_SESSION['cart'];

    foreach($cart as $key => $value) {
        
        $product = $cart[$key];

        $id = $product['id'];
        // $name = $product['name'];
        // $image = $product['image'];
        $price = $product['price'];
        // $category = $product['category'];
        $qty = $product['quantity'];

        $total = $price*$qty;

        $sql = "INSERT into order_items(order_id,product_id,qty,price,total) VALUES(?,?,?,?,?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param('iiiii' , $order_id,$id,$qty,$price,$total);

        $stmt->execute();

    }

    unset($_SESSION['cart']);

}


?>


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
  <?php include('components/head.php'); ?>
<body>
    
    <?php include('components/header.php'); ?>

    <?php 
   
     $title = 'Checkout';
      
          
 
      include('components/banner.php'); 
    ?>

<div class="checkout-area section-padding">
            <div class="container">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="checkout-wrap">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                
                                <div class="caupon-wrap s2">
                                    <div class="biling-item">
                                        <div class="coupon coupon-3">
                                            <label id="toggle2">Billing Address</label>
                                        </div>
                                        <div class="billing-adress" id="open2">
                                            <div class="contact-form form-style">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <label for="fname1">First Name</label>
                                                        <input type="text" placeholder="" name="name" required>
                                                    </div>
                                                   
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <label for="City">City</label>
                                                        <input type="text" placeholder="" name="city" required>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12">
                                                        <label for="Adress">Address</label>
                                                        <input type="text" placeholder="" name="address" required>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-12">
                                                        <label for="Post2">Phone</label>
                                                        <input type="text" placeholder="" name="phone" required>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="biling-item-2">
                                                
                                                <div class="note-area">
                                                    <p>Order Notes </p>
                                                    <textarea name="notes" placeholder="Note about your order"></textarea>
                                                </div>
                                                <div class="submit-btn-area">
                                                    <ul>
                                                        <li><button class="theme-btn" type="submit">Checkout</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caupon-wrap s3">
                                    <div class="payment-area">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="coupon coupon-3">
                                                    <label id="toggle4">Payment Method</label>
                                                </div>
                                                <div class="payment-option" id="open4">
                                                    <div class="payment-select">
                                                        <ul>

                                                            <li class="removeToggle">
                                                                <input id="remove" type="radio" name="payment" value="30" checked="checked" >
                                                                <label for="remove">Cash On delivery</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                             
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="cout-order-area">
                                    <div class="oreder-item ">
                                        <ul>
                                            <li class="o-header">Your Order<span></span></li>

                                            <?php 
                                                    $cart = $_SESSION['cart'];

                                                    if($cart) { 

                                                    $sub_price = 0;
                                                    $delivery_charges = 10;         
                                                    $total_price = $delivery_charges;

                                                    foreach ($cart as $key => $item){

                                                    $sub_price += $item['price']*$item['quantity'];
                                                    $total_price += $item['price']*$item['quantity'];
                                            ?>

                                            <li><?php echo $item['name']; ?> x <?php echo $item['quantity']; ?><span><?php echo '$'.$item['quantity']*$item['price']; ?></span></li>
                                            <?php } } ?>
                                            <li class="s-total">Sub Total<span><?php echo '$'.$sub_price; ?></span></li>
                                           
                                            <li>Delivery Charges<span><?php echo '$'.$delivery_charges; ?></span></li>
                                            <li class="o-bottom">Total price <span><?php echo '$'.$total_price ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

  

    <?php include('components/footer.php'); ?>

    <?php include('components/script.php'); ?>

  

</body>
</html>