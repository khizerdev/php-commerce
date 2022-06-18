<?php


if(!empty($_POST)) {

    $name = $_POST['name'];
    
    $email = $_POST['email'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $validation_fail = false;

    if (empty($name)) {
        $_SESSION['toastr'] = array(
            'type'      => 'error', // or 'success' or 'info' or 'warning'
            'message' => 'Name cannot be empty',
            'title' =>'Error',
        );
    } elseif(empty($email)) {
        $_SESSION['toastr'] = array(
            'type'      => 'error', // or 'success' or 'info' or 'warning'
            'message' => 'Email cannot be empty',
            'title' =>'Error',
        );
    } else {

        $check_email = $conn->prepare("SELECT * FROM users WHERE (id NOT IN ('".$_SESSION['user_id']."') AND email='".$email."')");

        $check_email->execute();

        $check_email = $check_email->get_result();

        

        if($check_email->num_rows != 0) {
            $_SESSION['toastr'] = array(
                'type'      => 'error', // or 'success' or 'info' or 'warning'
                'message' => 'Email is already been used',
                'title' =>'Error',
            );
        } else {
            if(empty($old_password) && empty($new_password)) {
            
                $sql = "UPDATE users SET name='".$name."' , email='".$email."' WHERE id='".$_SESSION['user_id']."'";
               
                $stmt = $conn->prepare($sql);
            
                if(!$stmt){
    
                    echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
    
                }
    
                if($stmt->execute()) {
    
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
    
                    $_SESSION['toastr'] = array(
                        'type'      => 'success', // or 'success' or 'info' or 'warning'
                        'message' => 'Updated Successfully',
                        'title' =>'Success',
                    );
                }
    
    
            } else {  // if passwords found
    
               
    
                $sql = "SELECT id,name,email,password FROM users WHERE id = '" . $_SESSION['user_id'] . "' and password ='".md5($old_password)."'";
    
                $stat = $conn->prepare($sql);
            
                if(!$stat){
    
                    echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
    
                } elseif($stat->execute()) {
    
                  
                    $stat->bind_result($id,$name,$email,$password);
                    $stat->store_result();
    
                   
                
                    if($stat->num_rows == 1) {
    
    
                        $row = $stat->fetch();
    
                     
                        $update_user = "UPDATE users SET name='".$_POST['name']."' , email='".$email."' , password='".md5($new_password)."' WHERE id='".$_SESSION['user_id']."'";
               
                        $update = $conn->prepare($update_user);
                    
                        if(!$update){
    
                            echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
    
                        }
    
                        
                   
    
                        if($update->execute()) {
    
                            $_SESSION['name'] = $_POST['name'];
                            $_SESSION['email'] = $email;
                            
                            $_SESSION['toastr'] = array(
                                'type'      => 'success', // or 'success' or 'info' or 'warning'
                                'message' => 'Updated Successfully',
                                'title' =>'Success',
                            );
                
                         
                        }
                    
                    
            
                
                    } 
                    else {
            
                        $_SESSION['toastr'] = array(
                            'type'      => 'error', // or 'success' or 'info' or 'warning'
                            'message' => 'Password Incorrect',
                            'title' =>'OK',
                        );
            
                        header('location: account.php');
                        exit();
                
                    }
    
                }
                
    
            }
        }

        
        
        
    }
    

}

?>