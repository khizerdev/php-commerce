<?php

include __DIR__ . "/server/connection.php";

session_start();

include __DIR__ . "/server/front/auth.php";

include __DIR__ . "/server/front/account.php";




?>


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<?php include('components/head.php'); ?>

<body>

    <?php include('components/header.php'); ?>

    <?php

    $title = 'Account';



    include('components/banner.php');
    ?>

    <div class="cart-area section-padding">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">

                        <div class="card-body text-center item-user border-bottom">
                            <div class="profile-pic">
                               
                                <a href="#" class="text-dark">
                                    <h4 class="mt-3 mb-0 font-weight-semibold">
                                        <?php echo $_SESSION['name']; ?>
                                    </h4>
                                </a>
                            </div>
                        </div>
                        <?php include('components/sidebar.php') ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Update your details </h5>
                        </div>
                        <form class="card-body" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_SESSION['name']; ?>" >
                                </div>
                                <div class="col">
                                    <input type="text" name="email"  class="form-control" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="password" name="old_password"  class="form-control" placeholder="Old Password" >
                                </div>
                                <div class="col">
                                    <input type="password" name="new_password"  class="form-control" placeholder="New Password" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="submit" class="theme-btn">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include('components/footer.php'); ?>

    <?php include('components/script.php'); ?>


</body>

</html>