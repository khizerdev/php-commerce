<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="wpOceans">
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
	<title>Organtio - Organic Food Shop HTML5 Template</title>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/flaticon.css" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/owl.theme.css" rel="stylesheet">
	<link href="assets/css/slick.css" rel="stylesheet">
	<link href="assets/css/slick-theme.css" rel="stylesheet">
	<link href="assets/css/swiper.min.css" rel="stylesheet">
	<link href="assets/css/owl.transitions.css" rel="stylesheet">
	<link href="assets/css/jquery.fancybox.css" rel="stylesheet">
	<link href="assets/css/odometer-theme-default.css" rel="stylesheet">
	<link href="assets/sass/style.css" rel="stylesheet">

	
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

	<script src="assets/js/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
		$(function(){
			<?php
			
			if(isset($_SESSION['toastr']))
			{
				echo 'iziToast.'.$_SESSION['toastr']['type'].'({
						message: '.'"'.$_SESSION['toastr']['message'].'"'.',
						position: "topRight", 
				})';
				unset($_SESSION['toastr']);	
			}
			?>          
		});
	</script>
</head>