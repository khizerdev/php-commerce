<?php 

include __DIR__ . "/../../connection.php";



$products = $conn->prepare("SELECT * FROM products LIMIT 4");

$products->execute();

$products = $products->get_result();
// var_dump($products);


?>