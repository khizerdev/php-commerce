<?php

include __DIR__ . "/../connection.php";

session_start(); 

// var_dump($_SESSION);
// die;

unset($_SESSION['user_id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['logged_in']);


$_SESSION['toastr'] = array(
    'type'      => 'success', // or 'success' or 'info' or 'warning'
    'message' => 'Logged out successfully',
    'title' =>'OK',
);

header('location: login.php');
exit();
?>