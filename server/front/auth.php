<?php

if(!isset($_SESSION['user_id'])) {

    $_SESSION['toastr'] = array(
        'type'      => 'error', // or 'success' or 'info' or 'warning'
        'message' => 'Please login first',
        'title' =>'OK',
    );
    
    header('location: index.php');
 

}

?>