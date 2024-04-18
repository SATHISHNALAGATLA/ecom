<!-- <?php
include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
$sql = "select * from farmerregistration where farmer_phone = '$sessphonenumber' ";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $name = $row['farmer_name'];
    $phone = $row['farmer_phone'];
    $address = $row['farmer_address'];
    $pan = $row['farmer_pan'];
    $bank = $row['farmer_bank'];
    $state = $row['farmer_state'];
    $district = $row['farmer_district'];
}


?> -->



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
     <link rel="shortcut icon" href="../Images/fav.png" type="image/x-icon">

     <!-- icons -->
     <script src="https://kit.fontawesome.com/6288d58b22.js" crossorigin="anonymous"></script>

     <!-- font style -->

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Teko:wght@300&display=swap"
          rel="stylesheet">
     <!-- js files -->

     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <title>Farmer Profile</title>
     <link rel="stylesheet" href="../Styles/styles.css">
</head>

<body>

<div class="back d-flex align-items-center container ">

<a href="../FarmerPortal/farmerHomepage.php ">
  <button class="btn fs-1">
	<i class="fa-solid fa-arrow-left"></i>
  </button>
</a>

<h3 class="ms-3 h1-far fs-1">Log in To <span class="h1-far-span">Farmer</span></h3>
</div>


    
    <div class="container-fluid" style="max-width:520px">
        <form action="EditProfile.php" method="post">
            <table align="center">
                <tr colspan=2>

                    <h1 class="ms-3 h1-far fs-1"> FARMER'S PROFILE</h1>
                </tr>
                <tr align="center">
                    <td><label><b>Name :</b></label></td>
                    <td>
                        <!-- <textarea rows="2" column="10" disabled> <?php echo $name ?> </textarea> -->
                        <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $name?>">
                    <br></td>
                </tr>
                <tr align="center">
                    <td><label><b>Phone Number :</b></label></td>
                    

                    <td><input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $phone ?>">  <br></td>
                     </tr>
                <tr align="center">
                    <td><label><b>Address :</b></label></td>
                    
                    <td><input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $address ?>">  <br></td>
                </tr>

                <tr align="center">
                    <td><label><b>State :</b></label></td>
                   
                    <td> <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $state ?>"> <br></td>
                </tr>
                <tr align="center">
                    <td><label><b>District :</b></label></td>
                   
                    <td> <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $district ?>"> <br></td>
                    
                </tr>

                <tr align="center">
                    <td><label><b>Pan Number :</b></label></td>
                    
                    <td><input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $pan ?>"> <br></td>
                </tr>
                <tr align="center">
                    <td><label><b>Account Number :</b></label></td>
                    
                    <td><input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $bank ?>"> <br></td>
                </tr>

                <td colspan=2><input type="submit" name="editProf" class="bn53" value="Edit Profile"></td>
                </tr>
            </table>



        </form>

    </div>

</body>

</html>