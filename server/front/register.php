<?php

include __DIR__ . "/../connection.php";

session_start();

if(!empty($_POST)) {

    $errors = [];
  
    $name = $_POST['name'];

    if (empty($name)) {
  
        $_SESSION['toastr'] = array(
            'type'      => 'error', // or 'success' or 'info' or 'warning'
            'message' => 'Name cannot be empty',
            'title' =>'Error',
        );

    } else {
       
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $validation_fail = false;
    

        if($password != $confirm_password) {
         
      
            $_SESSION['toastr'] = array(
                'type'      => 'error', // or 'success' or 'info' or 'warning'
                'message' => 'Password does not match',
                'title' =>'Error',
            );

            $validation_fail = true;

 
        }
    
        if(strlen($password) < 1) {

   
            $_SESSION['toastr'] = array(
                'type'      => 'error', // or 'success' or 'info' or 'warning'
                'message' => 'Password length should be greater than 7',
                'title' =>'Error',
            );

            $validation_fail = true;
         
        }

        if(!$validation_fail) {

            $check_user = $conn->prepare("SELECT count(*) FROM users WHERE email=?");
    
            $check_user->bind_param('s' , $email);
        
            if(!$check_user){
                echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
            }
        
            $check_user->execute();
            $num_rows = 0;
            $check_user->bind_result($num_rows);
            $check_user->store_result();
            $check_user->fetch();
        
         
            if($num_rows != 0) {
           
                $_SESSION['toastr'] = array(
                    'type'      => 'error', // or 'success' or 'info' or 'warning'
                    'message' => 'User name already registered',
                    'title' =>'Error',
                );
    
       
            } else {

                $sql = "INSERT INTO users(name,email,password) VALUES(?,?,?)";
        
                $stmt = $conn->prepare($sql);
            
            
                $password = md5($_POST['password']);
                $stmt->bind_param('sss' , $name,$email,$password);
            
                if(!$stmt){
                    echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
                 }
                 
                if($stmt->execute()) {
        
                    $_SESSION['toastr'] = array(
                        'type'      => 'success', // or 'success' or 'info' or 'warning'
                        'message' => 'Registration Successfull',
                        'title' =>'OK',
                    );
        
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['logged_in'] = true;
        
                    header('location: dashboard.php');
        
        
                } 
                else {

                    $_SESSION['toastr'] = array(
                        'type'      => 'error', // or 'success' or 'info' or 'warning'
                        'message' => 'Something went wrong',
                        'title' =>'error',
                    );

                }
            }


        }
    
        
       
    
    
     
    }



} elseif(isset($_SESSION['logged_in'])) {
    header('location: account.php');
}

?>