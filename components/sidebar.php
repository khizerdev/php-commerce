<?php
$active_page = basename($_SERVER['PHP_SELF'], ".php");

?>


<div class="item1-links  mb-0">
    <a href="dashboard.php" class="<?php if ($active_page == "dashboard") {
                                        echo "active";
                                    } ?> d-flex border-bottom">
        <span class="icon1 mr-3"></span> Dashboard
    </a>

    <a href="orders.php" class="<?php if($active_page == "orders") { echo "active"; } ?> d-flex  border-bottom">
        <span class="icon1 mr-3"></span>
        Orders
    </a>
    <a href="account.php" class="<?php if($active_page == "account") { echo "active"; } ?> d-flex border-bottom">
        <span class="icon1 mr-3"></span> Account Details
    </a>
    <a href="logout.php" class="d-flex  border-bottom">
        <span class="icon1 mr-3"><i class="fas fa-sign-in-alt"></i></span> Logout
    </a>

</div>