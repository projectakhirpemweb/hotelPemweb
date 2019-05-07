<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Sekawan</title>
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
		<a class="navbar-brand" href="#"><img src="<?PHP echo base_url();?>/assets/img/logo.png"> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Book</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>	<li class="nav-item">
					<a class="nav-link" href="#">Contact Us</a>
				</li>	<li class="nav-item">
					<a class="nav-link" href="#">Check Order</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
    <!---checkout--->
    <div class="container">
  <div class="py-5 text-center">
    <h2>Checkout form</h2>
    <p class="lead">Below is an example form built entirely with
Bootstrap’s form controls. Each required form group has a validation
state that can be triggered by attempting to submit the form without
completing it.</p>
  </div>

  <div class="row">
    <div class="col-md-8 order-md-4">
      <h4 class="mb-3">Billing address</h4>
        <FORM action ="<?php echo base_url('hotel/reserve');?>" method = 'post' name='register' onsubmit="return CheckInput()">
            <INPUT type="hidden" name="regist" value=<?php echo $dataRoom; ?>>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="f-name" autocomplete="off" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="l-name" autocomplete="off" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="nik">NIK</label>
              <input type="number" class="form-control" id="nik" name="nik" autocomplete="off" required >
              <div class="invalid-feedback">
                Please enter a valid NIK.
              </div>
            </div>

            <div class="mb-3">
              <label for="email">PIN</label>
              <input type="password" class="form-control" id="email" name="pin" autocomplete="off" required>
              <div class="invalid-feedback">
                Please enter a valid PIN.
              </div>
            </div>

            <div class="mb-3">
              <label for="conf-pin">PIN confirmation</label>
              <input type="password" class="form-control" id="conf-pin" name="conf-pin" autocomplete="off" required="">
              <div class="invalid-feedback">
                Please enter your PIN.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" id="address" name="address" autocomplete="off" required>
            </div>

            <div class="mb-3">
              <label for="telephone">Telepon</label>
              <input type="number" class="form-control" id="telephone" name="telephone" autocomplete="off" required="">
              <div class="invalid-feedback">
                Please enter your telephone.
              </div>
            </div>

              <div class="row">
                  <div class="col-md-5 mb-3">
                      <label for="firstOrder">First Order</label>
                      <INPUT type='date' class="custom-select d-block w-100" id="firstOrder" name="firstDate" autocomplete="off" required>
                      <div class="invalid-feedback">
                          Please select a valid date.
                      </div>
                  </div>
                  <div class="col-md-5 mb-3">
                      <label for="lastOrder">Last Stay</label>
                      <INPUT type='date' class="custom-select d-block w-100" id="lastOrder" name="lastDate" autocomplete="off" required>
                      <div class="invalid-feedback">
                          Please provide a valid date.
                      </div>
                  </div>
              </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                  <label for="roomNumber">Room Number</label>
                  <select class="custom-select d-block w-100" id="roomNumber" name="room_number" autocomplete="off" required="">
                    <option value="" selected="selected">Choose...</option>
                    <?php
                    for ($i = 1; $i<=5 ;$i++) {
                        if(strpos($availableRoom,"$i") !== false) echo "<option value='".$i."'> $i </option>";
                    }
                    ?>
                  </select>
                <div class="invalid-feedback">
                  Please select a valid room number.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="roomQuota">Room Quota</label>
                <select class="custom-select d-block w-100" id="roomQuota" name="quota" autocomplete="off" required="">
                    <option value="" selected="selected">Choose...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid input.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Continue to checkout" name="Register"></input>
            <hr class="mb-4">
      </form>
    </div>
  </div>
</div>
<BR>
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



<SCRIPT>
    function CheckInput()
    {
        var pin = document.forms["register"]["pin"].value;
        var confPin = document.forms["register"]["conf-pin"].value;

        var firstDate = document.forms["register"]["firstDate"].value;
        var lastDate = document.forms["register"]["lastDate"].value;

        var diff =  Math.floor(( Date.parse(lastDate) - Date.parse(firstDate) ) / 86400000);

        var date,validate,nowDate;

        if (diff > 0) {
            date = true;
        } else {
            alert("Tidak bisa mengambil hari sebelumnya");
            date = false;
        }

        diff =  Math.floor(( Date.parse(firstDate) - Date.parse(CheckDate()) ) / 86400000);

        if (diff >= 0) {
            nowDate = true;
        } else {
            alert("Tidak bisa mengambil hari sebelumnya");
            nowDate = false;
        }

        if (pin == confPin) {
            validate = true;
        } else {
            alert("Mohon perhatikan PIN dan Confirmation PIN, Transaction PIN dan Confirmation Transaction PIN");
            validate = false;
        }

        return validate && date && nowDate;
    }

    function CheckDate(){
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        return yyyy + '/' + mm + '/' + dd;
    }
</SCRIPT>
</body></html>









  <!--- Check out my course on Udemy! -->
