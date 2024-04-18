<!-- <?php
     include("../Functions/functions.php");
     ?> -->

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
<style>
   .btn-cart{
     background-color: #A0D8B3;
   }
</style>
<body>





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


     

          <div class="text-center">
               <label style="font-size :30px; text-shadow: 1px 1px 1px gray; " ><b>All Products</b></label>
               <?php
               include("../Includes/db.php");
               if (isset($_SESSION['phonenumber'])) {

                    echo "<a href='InsertProduct.php'>
                    <button class='btn btn-cart btn-lg p-3 m-3 font-weight-bold'>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
               } else {
                    echo "<a href='../auth/FarmerLogin.php'>
                    <button class='btn btn-cart btn-lg p-3 m-3 font-weight-bold'>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
               }
               ?>

          </div>

          <br>
          <main>
               <div class="container" style="display: flex;justify-content: space-around; flex-wrap: wrap;">
                    <?php
                    include("../Includes/db.php");
                    if (isset($_SESSION['phonenumber'])) {
                         $sess_phone_number = $_SESSION['phonenumber'];
                         getFarmerProducts();
                    } else {
                         echo "<br><br><h1 align = center>Please Login!</h1><br><br><hr>";
                    }
                    ?>
               </div>
          </main>


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
                         <li class="nav-item"><a href="../index.html" class="nav-link px-2 text-body-secondary">Home</a>
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