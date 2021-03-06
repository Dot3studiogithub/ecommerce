<?php 
include("assets/inc/db.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <title>www.Bazaarhunt.com</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/css/style.css">

<script src="assets/js/jquery-3.4.1.js"></script>    
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/all.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.bxslider.js"></script>
<style>
body{
    background:#000;
}

</style>
</head>
<body>
<section class="register-section">
<div class="container">
<div class="h3 text-center text-uppercase text-secondary pt-3">Please Register Your Account</div>
<div class="row">
<div class="col-md-8 offset-md-2 my-5 mycard1">
<div class="h6 text-danger">
<?php 

if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

?></div>
<form action="register_config.php" method="POST">
<div class="form-group">
<label for="name" class="text-light"> <i class="fas fa-user"></i>Name</label>
<input type="text" name="name" class="form-control" autocomplete="off" required>
</div>
<div class="form-group">
<label for="email" class="text-light"> <i class="fas fa-envelope"></i>E-mail</label>
<input type="text" name="email" class="form-control" autocomplete="off" required>
</div>
<div class="form-group">
<label for="password" class="text-light"> <i class="fas fa-key"></i>Password</label>
<input type="password" name="password" class="form-control" autocomplete="off" required>
</div>
<div class="form-group">
<label for="re-password" class="text-light"> <i class="fas fa-key"></i>Re-Password</label>
<input type="password" name="repassword" class="form-control" autocomplete="off" required>
</div>
<div class="form-group">
<label for="contact" class="text-light"> <i class="fas fa-phone"></i>Mobile-Number</label>
<input type="text" name="contactnumber" class="form-control" autocomplete="off" required>
</div>

<div class="text-center">
<button type="submit" name="register" class="btn btn-success">Register</button>

</div>


</form>

</div>
</div>
</div>
</section>




</body>
</html>