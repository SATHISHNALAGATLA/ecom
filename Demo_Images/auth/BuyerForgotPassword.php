<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="../images/fav.png" type="image/x-icon">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/6288d58b22.js" crossorigin="anonymous"></script>

    <!-- font style -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Teko:wght@300&display=swap"
        rel="stylesheet">


    <title>Forgot Password</title>
    <link rel="stylesheet" href="../Styles/styles.css">

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/fav.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                kISAN E-SEVA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <div class="back d-flex align-items-center container mt-4">

        <a href="../auth/BuyerLogin.php ">
            <button class="btn fs-1">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
        </a>

        <h3 class="ms-3 h1-far fs-1">Log in To <span class="h1-far-span " style="color:#f1a61a;">Farmer</span></h3>
    </div>






    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="fg-img col-md-9 col-lg-6 col-xl-5">
            <img src="../images/logimage.jpg" class="img-fluid" alt="Sample image">

        </div>

        <div class="fg-form">

            <form action="BuyerForgotPassword.php" method="post">
                <h3 class="h1-far ">FORGOT PASSWORD</h3>
                <br>
                <div class="form-floating mb-2">
                    <input type="phonenumber" class="form-control border border-dark" name="phonenumber"
                        placeholder="Phone Number">
                    <label for="floatingPassword">Phone Number</label>
                </div>

                <div class="form-floating mb-2">
                    <input type="text" class="form-control border border-dark" name="pan" placeholder="Pan Number">
                    <label for="floatingPassword">Pan Number</label>

                </div>

                <div class="form-floating mb-2">

                    <input type="password" class="form-control border border-dark" name="password"
                        placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating mb-2">
                    <input type="password" class="form-control border border-dark" name="confirmpassword"
                        placeholder="Confirm Password" required>
                    <label for="floatingPassword">Confirm Password</label>
                </div>

                <span style=" display:block;  margin-bottom: .75em; "></span>

                <input type="submit" name="register" value="Update Password" class="bn53-1">
            </form>
        </div>
    </div>


<!-- kkk -->

    
</body>

</html>

<?php
include("../Includes/db.php");
if (isset($_POST['register'])) {
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_pan = '$pan'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    if (strcmp($password, $confirmpassword) == 0) {
        if ($count_rows != 0) {
            $update_query = "update buyerregistration set buyer_password = '$encryption' 
                                    where buyer_phone = '$phonenumber' and buyer_pan = '$pan' ";

            $run_query = mysqli_query($con, $update_query);

            echo "<script>alert('Password Updated Successfully');</script>";
            echo "<script>window.open('BuyerLogin.php','_self')</script>";
        } else if ($count_rows == 0) {
            echo "<script>alert('Please Enter Valid Details');</script>";
        }
    } else {
        echo "<script>alert('Please Enter Valid Details');</script>";
    }
}

?>