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
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/img/logoNew.png"> </a>
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
<div id="slides" class="carousel slide" data-ride='carousel'>
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../Hotel/assets/img/backgroundNew.jpg" alt="">
            <div class="carousel-caption">
                <h1>Hotel Sekawan </h1>
                <h3>The only place you will never visit again</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../Hotel/assets/img/backgroundNew2.jpg" alt="">
        </div>
        <div class="carousel-item">
            <img src="../Hotel/assets/img/backgroundNew3.jpg" alt="">
        </div>
    </div>

</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Welcome to Hotel Sekawan</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">the only hotel in the world with 6-star service</p>

        </div>
    </div>

</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs col-sm-6 col-md-4">
            <i class="fas fa-coffee"></i>
            <h3>Food</h3>
            <p>mouth watering 6-star food</p>
        </div>
        <div class="col-xs col-sm-6 col-md-4">
            <i class="fas fa-bed"></i>
            <h3>Room</h3>
            <p>mouth watering 6-star room</p>
        </div>
        <div class="col-xs col-sm-6 col-md-4">
            <i class="fas fa-bell"></i>
            <h3>Service</h3>
            <p>mouth watering 6-star service</p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2> Why Must Sekawan Hotel? </h2>
            <p>Sekawan Hotel offers a urban vibe, artful style, and warm hospitality. Our hotel offers everything you need – beautifully modern rooms and suites, luxury lifestyle and stellar service. It all starts the moment you walk in, when you're greeted with a welcome beverage from our exceptional staff.</p>
        </div>
        <div class="col-lg-6">
            <img src="../Hotel/assets/img/desk.png" class="img-fluid">

        </div>

    </div>

</div>
<hr class="my-4">

<!--- Meet the team -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Review from our customer</h1>
        </div>
        <hr>
    </div>

</div>

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="../Hotel/assets/img/team1.png">
                <div class="card-body">
                    <h4 class="card-title">Robertus Dwi Ari Utomo</h4>
                    <p>Excelent, what a great hotel. Such a wonderful place to stay during your trip. My kids really love this place. Comfortable rooms, superb service, and beautiful scenery we have from the balcony. Great design and  theme. Cant wait to come here again</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="../Hotel/assets/img/team2.png">
                <div class="card-body">
                    <h4 class="card-title">Muhammad Yusuf Azari</h4>
                    <p>Great view and beautiful room. The service is beyond my expectation, and all of the staff is really friendly. Always love all the facilities, such a beautiful pool, and cheap restaurant and coffee shop price. Best place to relax and rest in my holiday.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="../Hotel/assets/img/team3.png">
                <div class="card-body">
                    <h4 class="card-title">Afgani Fajar Rizky</h4>
                    <p>Great view and beautiful room. The service is beyond my expectation, and all of the staff is really friendly. Always love all the facilities, such a beautiful pool, and cheap restaurant and coffee shop price. Best place to relax and rest in my holiday.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2>Your Happiness is our priority </h2>
            <p>What we prioritize here is your happiness. We know that what you want is a valuable experience that is not easily forgotten. With a variety of promising facilities and services. Hotel Sekawan is ready to accompany you to bring happiness in your relaxing experience</p>

        </div>
        <div class="col-lg-6">
            <img src="../Hotel/assets/img/desk.png" class="img-fluid">
        </div>

    </div>

</div>

<!--- Connect -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Find Us</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"> <i class="fab fa-facebook"></i> </a>
            <a href="#"> <i class="fab fa-twitter"></i> </a>
            <a href="#"> <i class="fab fa-instagram"></i> </a>
        </div>

    </div>
    <hr class="my-4">
</div>

<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="<?php echo base_url(); ?>/assets/img/logoNew.png" alt="">
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
                <p>robertus.dwi.ari.utomo@gmail.com</p>
                <p>Jl. Sigura-gura V</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Branch</h5>
                <hr class="light">
                <p>085395706447</p>
                <p>newafgani97@gmail.com</p>
                <p>Singosari</p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h5>Hotel Sekawan</h5>

            </div>
        </div>
</footer>



</body>
</html>









<!--- Check out my course on Udemy! -->
