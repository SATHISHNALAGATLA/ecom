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

     <br>
     <br>
     <h1 class="text-center" class="ms-3 h1-far fs-1">
          CALL<span class="h1-far-span"> CENTER</span>
     </h1>
<br>
<br>
<br>

     <div class="container d-flex align-item-center justify-content-between">
          <div class="card" style="width: 18rem;">
               <div class="card-header text-center" style="background-color: #A0D8B3;">
                    <h2>SMS System</h2>
               </div>
               <ul class="list-group list-group-flush">
                    <li class="list-group-item">You Can Upload Sms by using Following Syntax</li>
               </ul>
          </div>


          
               <div class="card" style="width: 18rem;">
                    <div class="card-header text-center" style="background-color: #A0D8B3;">
                         <h2>Insert Product</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                         <li class="list-group-item">*#*,insert,password,product title,product category , product type ,
                              product stock ,MRP,Base Price, product keywords , product description ,product
                              delivery</li>
                    </ul>
               </div>
         

          <div class="card" style="width: 18rem;">
               <div class="card-header text-center" style="background-color: #A0D8B3;">
                    <h2>Update Product</h2>
               </div>
               <ul class="list-group list-group-flush">
                    <li class="list-group-item">*#*,update,password,product title,product category , product type ,
                         product stock ,MRP,Base Price, product keywords , product description ,product
                         delivery</li>
               </ul>
          </div>

          <div class="card" style="width: 18rem;">
               <div class="card-header text-center" style="background-color: #A0D8B3;">
                    <h2>Delete Product</h2>
               </div>
               <ul class="list-group list-group-flush">
                    <li class="list-group-item">*#*,delete,password,product title,MRP</li>
               </ul>
          </div>
     </div>

     <br>
     <br>

     <div style="display:block;">

          <div class="text-center content_item ms-3 h1-far fs-1"><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Call Center ,
                         Location's & Langauges</b></label></div>

          <br>

          <br>
          <h4 align="center " class="ms-3 h1-far fs-2">Toll Free Number : 1800564999</h4>
          <br>
          <table class="table">
               <thead align="center" class=tableyhead>
                    <th class=thy>SR NO.</th>
                    <th class=thy>LOCATION</th>
                    <th class=thy>STATES</th>
                    <th class=thy>LANGUAGES</th>


               </thead>
               <tr align="center" class=trow>
                    <th align="center">1</th>
                    <th align="center">Hyderabad</th>
                    <th align="center">Andhra Pradesh</th>
                    <th align="center">Telugu</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">2</th>
                    <th align="center">Patna</th>
                    <th align="center">Bihar | Jharkhand</th>
                    <th align="center">Hindi</th>


               </tr>
               <tr align="center" class=trow>
                    <th align="center">3</th>
                    <th align="center">Jaipur</th>
                    <th align="center">Delhi | Rajasthan</th>
                    <th align="center">Hindi</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">4</th>
                    <th align="center">Ahmadabad/Anand</th>
                    <th align="center">Gujarat | Dadra & Nagar Haveli | Daman & Diu</th>
                    <th align="center">Gujarati | Goan</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">5</th>
                    <th align="center">Chandigarh</th>
                    <th align="center">Haryana | Punjab | Chandigarh | Himachal Pradesh</th>
                    <th align="center">Hindi/Haryanvi | Punjabi | Hindi</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">6</th>
                    <th align="center">Jammu</th>
                    <th align="center">Jammu and Kashmir</th>
                    <th align="center">Dogri, Kashmiri, Ladakh</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">7</th>
                    <th align="center">Bangalore</th>
                    <th align="center">Karnataka | Kerala | Lakshadweep</th>
                    <th align="center">Kannada | Malayalam</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">8</th>
                    <th align="center">Jabalpur</th>
                    <th align="center">Madhya Pradesh | Chhattisgarh</th>
                    <th align="center">Hindi</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">9</th>
                    <th align="center">Nagpur/Pune</th>
                    <th align="center">Maharashtra | Goa</th>
                    <th align="center">Marathi | Goan</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">10</th>
                    <th align="center">Coimbatore</th>
                    <th align="center">Tamil Nadu | Puducherry | Andaman & Nicobar</th>
                    <th align="center">Tamil</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">11</th>
                    <th align="center">Kanpur</th>
                    <th align="center">Uttar Pradesh | Uttarakhand</th>
                    <th align="center">Hindi</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">12</th>
                    <th align="center">Kolkata</th>
                    <th align="center">West Bengal | Sikkim</th>
                    <th align="center">Bengali | Sikkimese</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">13</th>
                    <th align="center">Bhubaneshwar</th>
                    <th align="center">Orissa</th>
                    <th align="center">Oriya</th>

               </tr>
               <tr align="center" class=trow>
                    <th align="center">14</th>
                    <th align="center">Guwahati</th>
                    <th align="center">Arunachal Pradesh | Assam | Manipur | Meghalaya | Mizoram | Nagaland | Tripura
                    </th>
                    <th align="center">Adi | Assamese | Manipuri | Khasi | Mizo | Nagamese | Bengali</th>

               </tr>

          </table>
     </div>


     <br> <br>
     <section id="footer" class="myfooter">
          <div class="container">
               <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col aligncenter">
                         <br>
                         <h5>Payment Option</h5>
                         <img src="../Images/Website/paytm1.jpg" alt="paytm">
                         <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                    </div>
               </div>


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
              
          </div>
     </section>

</body>

</html>