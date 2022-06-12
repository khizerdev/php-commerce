<?php

include __DIR__ . "/server/connection.php";

include __DIR__ . "/server/front/login.php";

?>


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
  <?php include('components/head.php'); ?>
<body>
    
    <?php include('components/header.php'); ?>

    <?php 
   
     $title = 'Login';
      
          
 
      include('components/banner.php'); 
    ?>


    <div class="container">
        <div class="row justify-content-center my-md-5 my-3">
					<div class="col-lg-6">
						<div class="wpo-section-title">
							<h2>Login</h2>
						</div>
					</div>
        </div>
        <div class="row justify-content-center mb-md-5 mb-3">
            <div class="col-md-6">

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" required>
           
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
            
        
                <button type="submit" class="theme-btn">Submit</button>
            </form>

            </div>
        </div>
        
    </div>
  

  

    <?php include('components/footer.php'); ?>

    <?php include('components/script.php'); ?>

</body>
</html>