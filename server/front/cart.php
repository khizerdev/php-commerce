<?php

include __DIR__ . "/../connection.php";

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

        addProduct($_POST['product_id']);

    } else {
        
    }


} else {
    addProduct($_POST['product_id']);
}


function addProduct($id){

    include __DIR__ . "/../connection.php";

    $product_id =  $id;

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