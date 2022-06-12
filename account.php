<?php

include __DIR__ . "/server/connection.php";

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<?php include('components/head.php'); ?>

<style>
    .profile-pic-img {
        position: relative;
      
        line-height: 5rem;
        font-size: 2rem;
        text-align: center;
        margin: 0 auto;
    }

    .profile-pic-img span {
        position: absolute;
        width: 1rem;
        height: 1rem;
        border-radius: 50px;
        right: -1px;
        top: 0.5rem;
        border: 2px solid #fff;
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        margin: 0;
        padding: 1.5rem 1.5rem;
        position: relative;
        height: 100%;
    }

    .brround {
        border-radius: 50%;
        max-width: 100%
    }

    .item1-links a.active {
        background: rgba(241, 238, 247, 0.6);
        color: #181818;
        border-right: 2px solid #fed880;
    }

    .item1-links a.active {
        font-weight: 400;
        font-size: 0.875rem;
    }

    .item1-links a {
        padding: 0.75rem 1.25rem;
        font-weight: 400;
        font-size: 0.875rem;
        color: #181818;
    }

    .card-header {
        background-color: rgb(24 24 24);
    }

    .card-header h5 {
        color: #fff;
    }
</style>

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
                        <div class="item1-links  mb-0">
                            <a href="https://nsfragrances.com/dashboard" class=" active  d-flex border-bottom">
                                <span class="icon1 mr-3"></span> Dashboard
                            </a>

                            <a href="https://nsfragrances.com/dashboard/orders" class="    d-flex  border-bottom">
                                <span class="icon1 mr-3"></span>
                                Orders
                            </a>
                            <a href="https://nsfragrances.com/dashboard/address" class="     d-flex  border-bottom">
                                <span class="icon1 mr-3"></span> Address
                            </a>
                            <a href="https://nsfragrances.com/dashboard/account" class="    d-flex border-bottom">
                                <span class="icon1 mr-3"></span> Account Details
                            </a>
                            <a href="https://nsfragrances.com/logout" class="   d-flex  border-bottom">
                                <span class="icon1 mr-3"><i class="fas fa-sign-in-alt"></i></span> Logout
                            </a>


                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Hello <?php echo $_SESSION['name']; ?>! </h5>
                        </div>
                        <div class="card-body">
                            <p>From your account dashboard. you can easily check &amp; view your <a href="https://nsfragrances.com/dashboard/orders">recent orders</a>, manage your <a href="https://nsfragrances.com/dashboard/address">billing addresses</a> and <a href="https://nsfragrances.com/dashboard/account">edit your password and account details.</a></p>
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