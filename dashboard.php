<?php

include __DIR__ . "/server/connection.php";

session_start();

include __DIR__ . "/server/front/auth.php";

?>


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<?php include('components/head.php'); ?>

<body>

    <?php include('components/header.php'); ?>

    <?php

    $title = 'Dashboard';



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
                            <h5 class="mb-0">Hello <?php echo $_SESSION['name']; ?>! </h5>
                        </div>
                        <div class="card-body">
                            <p>From your account dashboard. you can easily check &amp; view your <a href="https://nsfragrances.com/dashboard/orders">recent orders</a>, manage your <a href="https://nsfragrances.com/dashboard/address">billing addresses</a> and <a href="account.php">edit your password and account details.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include('components/footer.php'); ?>

    <?php include('components/script.php'); ?>


</body>

</html>