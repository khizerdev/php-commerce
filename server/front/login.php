<?php

include __DIR__ . "/../connection.php";

session_start();



if(!empty($_POST)) {

    $errors = [];
  
    $email = $_POST['email'];

    if (empty($email)) {
  
        $_SESSION['toastr'] = array(
            'type'      => 'error', // or 'success' or 'info' or 'warning'
            'message' => 'Email cannot be empty',
            'title' =>'Error',
        );

    } else {
       
        $email = $_POST['email'];
        $password = $_POST['password'];

      
        $sql = "SELECT id,name,email,password FROM users WHERE email = '" . $email . "' and password ='".md5($password)."'";

        $stmt = $conn->prepare($sql);
    
        if(!$stmt){

            echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";

        } elseif($stmt->execute()) {

            $stmt->bind_result($id,$name,$email,$password);
            $stmt->store_result();
         
            if($stmt->num_rows == 1) {

                $row = $stmt->fetch();
            
            
                $_SESSION['toastr'] = array(
                    'type'      => 'success', // or 'success' or 'info' or 'warning'
                    'message' => 'Successfully logged in',
                    'title' =>'Success',
                );
    
                $_SESSION['user_id'] = $id;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['logged_in'] = true;
    
                header('location: account.php');
                exit();
    
        
            } else {
    
                $_SESSION['toastr'] = array(
                    'type'      => 'error', // or 'success' or 'info' or 'warning'
                    'message' => 'Email or password incorrect',
                    'title' =>'OK',
                );
    
                header('location: login.php');
                exit();
        
            }

        }
    
    }



} elseif(isset($_SESSION['logged_in'])) {
    header('location: account.php');
}



?>