<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nabonk Bank</title>
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
        <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>/assets/img/logobank.png"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>

</nav>
<!--- form --->
<hr class="mb-4">
<div class="container">
    <form action="<?php echo base_url('nabonkBank/transfer'); ?>" method="post">
        <div class="mb-3">
            <label for="rek">Billing Account</label>
            <input type="text" class="form-control" id="rek" name="rek" value="<?php echo $rek ?>" autocomplete="off" required="">
            <div class="invalid-feedback">
                Please enter your billing account.
            </div>
        </div>
        <div class="mb-3">
            <label for="price">Transfer</label>
            <input type="text" class="form-control" id="price" name="price" autocomplete="off" required="">
            <div class="invalid-feedback">
                Please enter your payment.
            </div>
        </div>

        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Transfer">
        <hr class="mb-4">
    </form>
</div>
<hr class="mb-4">

</body>
</html>
