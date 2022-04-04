<!DOCTYPE html>

    <html>


        <head>
            
            <title>Cake Flair</title>
            <meta name="viewport" content="width=device-width,initial-scale=1"/>
            <link rel="shortcut icon" href="Images/Untitled-1-_2_.ico">
            <link rel="stylesheet" href="Css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
            <script src="JavaScript/index.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        </head>
   


        <body>
            
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;
                    <div class="overlay-content">
                        <a href="index.html">Home</a>
                        <a href="shop.html">Products</a>
                        <a href="#">Contact</a>
                        <a href="cart.html">Cart</a>
                </a>
            </div>
            </div>

            <!--This is the small navigation at the top-->
            <div class="nav-bar_small">
                <a href="tel:+254 712 876 900" class="left">+254 712 876 900</a>
                <a href="mailto:rosemuthoni2020@yahoo.com"class="right">rose@yahoo.com</a>
            </div>

            <!--this will be a sticky navigation bar with a js feature that moves it up slightly when scrolled-->
            <nav id="navbar" class="nav-bar">
                <a class="nav-bar_icon" href="index.html">
                    <img src="Images/Untitled-1 (2).png" alt="" height="50" width="50">
                </a>

            <!--This was so the icon was to float to the right after the links-->
                <a href="javascript:void(0);" class="icon" onclick="openNav()">
                    <img src="Images/buttons (2).png" alt="" height="25" width="25"></img>  
                </a>

            <!---->
                <div class="nav-bar_link" id="mylinks">
                    <a href="cart.html" class="pink">Cart<img src="Images/cart.svg"></a>
                    <a href="#">Contact</a>
                    <a href="shop.html">Products</a>
                    <a href="index.html">Home</a>
                </div>
            </nav>

            <div class="first-div">
                <h1 class="first-div_content ">Quality Cakes</h1>
                <h2 class="first-div_subcontent ">Something Something Something Something</h2>
                <p>
                    <a href="#" class="my-button animate__animated animate__bounce">
                        Learn More
                    </a>
                </p>
            </div>

            
            <section>
               @yield('content')
            </section>
        </body>



        <footer>

                <div class="row" style="width: 90%; margin-left: 5%; margin-right: 5%;">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="footer-place">
                            <h1 class="footer-place-header">
                                <a class="nav-bar_icon" href="index.php">
                                    <img src="Images/logo.jpg" alt="" height="60" width="120">
                                </a>
                            </h1>
                            <p>Far far away, behind the word mountains, far from the countries Kenya and another Kenya. Something Something Something Something Something Something</p>
                            <ul class="footer-social">
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="footer-place">
                            <h1 class="footer-place-header">Menu</h1>
                            <ul class="footer-list">
                                <li>
                                    <p><a href="index.html">Home</a></p>
                                </li>
                                <li>
                                    <p><a href="shop.html">Products</a></p>
                                </li>
                                <li>
                                    <p><a href="#">Contact</a></p>
                                </li>
                                <li>
                                    <p><a href="#">Cart</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="footer-place">
                            <h1 class="footer-place-header">Have any Questions?</h1>
                            <ul class="footer-list">
                                <li>
                                    <p><i class="fa fa-phone"></i><i>  </i><a href="tel:+254 712 876 900">+254 712 876 900</a></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-envelope"></i><i>  </i><a href="mailto:muthonirose2020@yahoo.com">muthonirose2020@yahoo.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="footer-copyright">Copyright &#169; <script>document.write(new Date().getFullYear());</script> All rights reserved</p>

        </footer>


    </html>