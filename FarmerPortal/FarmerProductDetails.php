<?php
include("../Functions/functions.php");
?>

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
     

     <!--  -->


     <?php
     include("../Includes/db.php");
     $sess_phone_number = $_SESSION['phonenumber'];
     // getFarmerProductDetails();
     global $con;
     if (isset($_GET['id'])) {
          $prod_id = $_GET['id'];
          $query = "select * from products where product_id=" . $prod_id;
          $run_query = mysqli_query($con, $query);
          $resultCheck = mysqli_num_rows($run_query);
          if ($resultCheck > 0) {
               while ($rows = mysqli_fetch_array($run_query)) {
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_type = $rows['product_type'];
                    $product_stock = $rows['product_stock'];
                    $product_description = $rows['product_desc'];
                    $product_price = $rows['product_price'];
                    $product_base_price = $rows['product_price'];
                    $product_delivery = $rows['product_delivery'];
                    $product_cat = $rows['product_cat'];

                    // echo "<div class='row'>
                    //         <div class='col col-md-6'>
                    //             <img src='../Admin/product_images/$product_image' class='rounded mx-auto d-block bord' style='float:left;' height='250px' width='300px' >
                    //             <h4>$product_type</h4>
                    //         </div>
                    //         <div class='col col-md-6'><br>
                    //           <h3 style='font-weight:bold;'>" . $product_title."</h3><br>"  
                    //             . " product type  :  " . $product_type."<br>" 
                    //             . " product stock  :  " . $product_stock."<br>"
                    //             . " product Description  :  " . $product_description."<br>" 
                    //             . " product price  :  " . $product_price."<br>" 
                    //             . " product Delivery  :  " . $product_delivery."<br>"
                    //             . " product category  :  " . $product_cat ."<br>".
                    //         "</div> </div>";
                    if ($product_stock == 0) {
                         $str = "Not In Stock";
                    } else {
                         $str = "In Stock";
                    }
                    if ($product_delivery == "no") {
                         $del = "Not Applicable";
                    } else {
                         $del = "Yes,Applicable";
                    }

                    $space = "....";
                    echo "<div class='container'>
                                   <div class='row mt-4'>
                                        <div class='col-md-6' style='padding:7px; margin-top:15px;'>


                                             <div class='card' style='width: 18rem; margin: auto;margin-top: 58px;'>
                                                  <img src='../Admin/product_images/$product_image' class='card-img-top' height='250px' width='300px' alt= 'Image Not Available' onerror=this.src='../Images/Website/noimage.jpg'>
                                                  
                                                  <div class='card-body'>
                                                       <h3 class='text-center card-title' style='font-weight:bold;'>$product_type</h3>
                              
                                                  </div>
                                                </div>
                                            
                                        </div>
                                        <div class='col-md-6 blackgoldie ' style='border: 2px solid #A0D8B3;border-radius: 20px;text-align: center;'>
                                             <div class='row'>
                                                  <div class='col-md-12 bottom-rule aligncenter'>
                                                       <h1 style='color:#A0D8B3;' class='text-center'>$product_title</h1>
                                                  </div>
                                             </div>
                                             <h3  style='color:black;padding:7px;'  class='text-center'>Rs. " . $product_price . ".00 per Kg</h3>
                                             <hr/>
                                             <div class='row'>
                                                  <div class='col-md-12 text-center'>
                                                       <h3 style='color:green;padding:7px;'>$str<h3>
                                                  </div>
                                             </div>
                                             <div class='row'>
                                                  <div class='col-md-12 text-center'>
                                                       <h3 style='color:black;padding:7px;'><span class='monospaced'>product stock  : " . $product_stock . " Kgs" . "</span><h3>
                                                  </div>
                                             </div>
                                             <div class='row' style='padding:7px;'>
                                                  <div class='row text-center ml-4 mt-3' >
                                                       <i class='fa fa-truck fa-2x' aria-hidden='true' style='color:#A0D8B3;'> </i>
                                                       <h3 style='color:black;'>   Product Delivery : " . $del . "<h3>
                                                  </div>
                                             </div>

                                             <div class='row text-center' style='padding:7px; margin-bottom:15px;' >
                                                  <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 aligncenter'> <a href='EditProduct.php?id=$prod_id' class='btn  border-secondary' style='color:black; background-color: #A0D8B3;'><b>Edit Product</b></a></div>
                                                  <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 aligncenter'> <a href='Transactions.php' class='btn  border-secondary' style='color:black; background-color: #A0D8B3;'><b>My Transaction</b></a></div>
                                             </div>
                                        </div>         
                                   </div>
                              </div>
                              <div class='container'>
                                   <div class='desc'>
                                        <div class='row'>
                                             <div class='col-md-12'>

                                                  <table class='table'>
                                                  
                                                       <tbody>
                                                         <tr>
                                                           <th scope='row'>Product Description:-</th>
                                        
                                                         </tr>
                                                         <tr>
                                                           
                                                           <td>" . $space . $product_description . "</td>
                                                         </tr>
                                                         
                                                       </tbody>
                                                     </table>

                                             </div>
                                        </div>
                                       
                                   </div>
                              </div>";
               }
          }
     } else {
          echo "<br><br><hr><h1 align = center>Product Not Uploaded !</h1><br><br><hr>";
     }
     ?>



     <br>
     <section id="footer" class="myfooter">
          <div class="container">
               <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col aligncenter">
                         <br>
                         <h3>Payment Option</h3>
                         <br>
                         <img src="../Images/Website/paytm1.jpg" alt="paytm">
                         <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                    </div>
               </div>
                 
               </div>
          </div>
     </section>

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