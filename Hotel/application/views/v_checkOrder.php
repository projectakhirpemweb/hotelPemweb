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
        <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>/assets/img/logo.png"> </a>
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
                    <a class="nav-link" href="<?php echo base_url('hotel/aboutUs'); ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('hotel/checkOrder'); ?>">Check Order</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--- Image Slider -->
<hr class="mb-4">
<div class="container">
    <form action="<?php echo base_url('hotel/do_login'); ?>" method="post">
        <div class="mb-3">
            <label for="address">NIK</label>
            <input type="number" class="form-control" id="nik" name='nik' autocomplete="off" required="">
            <div class="invalid-feedback">
                Please enter your NIK.
            </div>
        </div>
        <div class="mb-3">
            <label for="pin">PIN</label>
            <input type="password" class="form-control" id="pin" name = "pin" autocomplete="off" required="">
            <div class="invalid-feedback">
                Please enter your PIN.
            </div>
        </div>

        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Continue to checkout">
        <hr class="mb-4">
    </form>
</div>
<hr class="mb-4">
<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="">
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
