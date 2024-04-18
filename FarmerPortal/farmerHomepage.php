<?php
     include("../Functions/functions.php");
     ?>

<!DOCTYPE html>

<html>


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

     <title>kISAN E-SEVA</title>
     <link rel="stylesheet" href="../Styles/styles.css">
</head>

<body>

     <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
               <a class="navbar-brand" href="#">
                    <img src="../images/fav.png" alt="Logo" width="30" height="24"
                         class="d-inline-block align-text-top">
                    kISAN E-SEVA
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="farmerHomepage.php">Home</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="MyProducts.php">MyProducts</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="Transactions.php">Transactions</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="CallCenter.php">Call Center</a>
                         </li>
                         <li class="nav-item" style="margin-top: 9px;">
                              <div class="dropdown p-2 settings ">
                                   <button class="btn  dropdown-toggle " style="margin-top:-20px;" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Settings
                                   </button>
                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php
                                   if (isset($_SESSION['phonenumber'])) {
                                        echo "<a href='FarmerProfile.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                                        echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
                                        echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                                   } else {
                                        echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                                   }
                                   ?>
                                   </div>
                              </div>
                         </li>
                    </ul>

                    <div class='loginz'>
                         <?php getFarmerUsername(); ?>
                    </div>
               </div>

          </div>
          </div>
     </nav>

     <div id="carouselExampleFade" class="carousel slide carousel-fade">
          <div class="carousel-inner">
               <div class="carousel-item active">
                    <img src="../Images/farmer-banner-1.jpg" class="d-block w-100" alt="..." height="500px">
               </div>
               <div class="carousel-item">
                    <img src="../Images/farmer-banner-3.jpg" class="d-block w-100" alt="..." height="500px">
               </div>
               <div class="carousel-item">
                    <img src="../Images/farming-banner-2.jpg" class="d-block w-100 " alt="..." height="500px">
               </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
               data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
               data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
          </button>
     </div>


     <br><br>

     <div class="features-container">

          <h1 class="text-center" class="ms-3 h1-far fs-1">
               Standout  <span class="h1-far-span">Features</span>
          </h1>

          <div class="container d-flex align-items-center justify-content-around flex-wrap">

               <div class="card mt-3" style="width: 18rem;">
                    <img src="../Images/Homepage/sms.png" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title">Sms System </h5>
                         <p class="card-text">Upload and Edit Your Products via SMS</p>
                    </div>
               </div>
               <div class="card mt-3" style="width: 18rem;">
                    <img src="../Images/Homepage/handshake.png" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title">Buyer Connection</h5>
                         <p class="card-text">Get in direct touch with the buyer to satisfy its need </p>
                    </div>
               </div>
               <div class="card mt-3" style="width: 18rem;">
                    <img src="../Images/Homepage/farmer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title">Farmer Group Formation</h5>
                         <p class="card-text">Get in touch with other farmers making your own community where you can
                              ask for help</p>
                    </div>
               </div>
          </div>
     </div>



     <!-- footer -->
     <section>

          <div class="container ">
               <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

                    <a href="/"
                         class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                         <svg class="bi me-2" width="40" height="32">
                              <use xlink:href="#bootstrap"></use>
                         </svg>
                    </a>

                    <ul class="nav col-md-4 justify-content-end">
                         <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Home</a>
                         </li>
                         <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                         <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                         <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                         <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
                    </ul>
               </footer>
          </div>
     </section>
</body>

</html>