<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Sekawan </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../Hotel/assets/img/logo.png"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('hotel/book'); ?>">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('hotel/aboutUs'); ?>">Contact Us</a>
                </li>	<li class="nav-item">
                    <a class="nav-link" href="#">Check Order</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride='carousel'>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?PHP echo base_url();?>/assets/img/background.png" alt="">
            <div class="carousel-caption">
                <h3>Thank you for choosing us!</h3>
                <p>scan this qr code to check your payment status</p>
                <img src="" alt="">
            </div>
        </div>
    </div>

</div>



<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="<?PHP echo base_url();?>/assets/img/logo.png" alt="">
                <hr class="light">
                <p>085395706447</p>
                <p>muhammadyusufazari@gmail.com</p>
                <p>jl. kertopamuji no.10</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hotel</h5>
                <hr class="light">
                <p>085395706447</p>
                <p>muhammadyusufazari@gmail.com</p>
                <p>jl. kertopamuji no.10</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Branch</h5>
                <hr class="light">
                <p>085395706447</p>
                <p>muhammadyusufazari@gmail.com</p>
                <p>jl. kertopamuji no.10</p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h5>Hotel Sekawan</h5>

            </div>
        </div>
</footer>



</body>
</html>
