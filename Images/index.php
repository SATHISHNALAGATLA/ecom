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
        <link rel="shortcut icon" href="./image/fav.png" type="image/x-icon">

        <!-- icons -->
        <script src="https://kit.fontawesome.com/6288d58b22.js" crossorigin="anonymous"></script>
        
    <!-- font style -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Teko:wght@300&display=swap"
        rel="stylesheet">


    <title>kISAN E-SEVA</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>

<body>
    <div id="wrapper">

        <div class="main-container">
            <img src="./image/bg.jpg" class="background">
            <img src="./image/frg.png" class="foreground" width="auto" height="400px">
            <h1 class="main-h1">kISAN E-SEVA</h1>
            <p class="text-white fs-2">Transforming the Future of Farmers</p>
        </div>
        <!-- farmer- section -->
        <section>
            <div class="farmer-main">

                <h1 class="h1-far">I am <span class="h1-far-span">Farmer</span></h1>
                <p class="text-center">We Feed The World</p>
                <div class="container d-flex align-items-center justify-content-around flex-wrap">

                    <div class="i-farmer">

                        <img src="./image/farmer.gif" alt="" width="550px" height="550px">
                    </div>

                    <div class="farmer-btn">
                        <button type="button" class="bn53"> <a id = "link" href="auth/farmerlogin.php" class="text-decoration-none text-black"><i class="fa-solid fa-right-to-bracket"></i> Log In to Farmer</a>  </button>


                    </div>
                </div>




            </div>



        </section>

        <!-- buyer-section -->

        <section style="background-color: #f4f4ea;">
            <div class="farmer-main">

                <h1 class="h1-far">I am <span class="h1-far-span" style="color: #f1a61a;">BUYER</span></h1>
                <p class="text-center">Agriculture Needs Support, Not Just Love</p>
                <div class="container d-flex align-items-center justify-content-around flex-wrap">



                    <div class="farmer-btn">
                        <button type="button" class="bn53-1"><a id = "link" href="auth/buyerlogin.php" class="text-decoration-none text-white "><i class="fa-solid fa-right-to-bracket"></i> Log In to Buyer</a></button>
                    </div>

                    <div class="i-farmer">

                        <img src="./image/buyer.webp" alt="" width="550px" height="550px">
                    </div>
                </div>




            </div>






        </section>


        <!-- about-us section-->

        <section class="about-section">
            <h1 class="text-white fs-1 fw-bold" style=" font-family: Verdana, Geneva, Tahoma, sans-serif;">WHO  <span> <u>WE ARE </u>  </span> 
            </h1>
            <div class="container mt-4">
                <p class="text-white">We are passionate about revolutionizing the way farmers and agricultural
                    enthusiasts access the tools, products, and knowledge they need to thrive in the modern farming
                    landscape. With our user-friendly platform, we aim to create a seamless online shopping experience
                    that caters specifically to the needs of the agricultural community.
                <p class="text-white">At our core, we understand that agriculture is not just a profession; it's a way
                    of life. We recognize the hard work, dedication, and expertise that goes into every aspect of
                    farming, and we are committed to supporting farmers every step of the way. Whether you're a
                    small-scale farmer, a seasoned agriculturalist, or someone who simply enjoys gardening as a hobby,
                    we have everything you need to nurture your crops and maximize your yields.</p>
                </p>
                <p class="text-white">We are proud to be part of the agricultural community and contribute to the growth
                    and success of farmers worldwide. Join us on our mission to empower farmers, promote sustainable
                    agriculture, and cultivate a brighter future for our planet. Explore our website today and
                    experience the convenience, reliability, and expertise that sets us apart as the leading agriculture
                    ecommerce platform <a href="#" class="text-decoration-none">Read more</a></p>
            </div>

        </section>

        <!-- footer -->
        <section style="background-color: #f4f4ea;">

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


    </div>
</body>

</html>