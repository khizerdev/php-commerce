<?php

include __DIR__ . "/server/connection.php";

include __DIR__ . "/server/front/register.php";


?>


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
  <?php include('components/head.php'); ?>
<body>
    
    <?php include('components/header.php'); ?>

    <?php 
   
     $title = 'Register';
      
          
 
      include('components/banner.php'); 
    ?>


    <div class="container">
        <div class="row justify-content-center my-md-5 my-3">
					<div class="col-lg-6">
						<div class="wpo-section-title">
							<h2>Sign Up</h2>
						</div>
					</div>
        </div>
        <div class="row justify-content-center mb-md-5 mb-3">
            <div class="col-md-6">

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" required>
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" required>
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