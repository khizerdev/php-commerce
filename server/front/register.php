<?php

include __DIR__ . "/../connection.php";

if(!empty($_POST)) {

    $errors = [];
  
    $name = $_POST['name'];

    if (empty($name)) {

        session_start();
        $_SESSION['toastr'] = array(
            'type'      => 'error', // or 'success' or 'info' or 'warning'
            'message' => 'Name cannot be empty',
            'title' =>'Error',
        );

    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
    
        if($password != $confirm_password) {
            header('location: register.php');
        }
    
        if(strlen($password) < 1) {
            header('location: register.php');
        }
    
        
        // $check_user = $conn->prepare("SELECT count(*) from users where email=?");
    
        // $check_user->bind_param('s' , $email);
    
        // if(!$check_user){
        //     echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
        // }
    
        // $check_user->execute();
        // $check_user->bind_result($num_rows);
        // $check_user->fetch();
    
        // if($num_rows != 0) {
        //     header('location: register.php');
        // }
    
    
        $sql = "INSERT INTO users(name,email,password) VALUES(?,?,?)";
    
        $stmt = $conn->prepare($sql);
    
    
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bind_param('sss' , $name,$email,$password);
    
        if(!$stmt){
            echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
         }
        $stmt->execute();

        session_start();
        $_SESSION['toastr'] = array(
            'type'      => 'success', // or 'success' or 'info' or 'warning'
            'message' => 'Registration Successfull',
            'title' =>'OK',
        );
    }



}

?>