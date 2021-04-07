


<!DOCTYPE html>
<html lang="en">
    @include('includes.front-head')

    <body data-spy="scroll" data-offset="71" data-target="#navbarRestaurant">
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div><!--/preloader-->
        <header class="header-main header-transparent">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ml-auto">
                            <div class="float-right clearfix top-socials">
                                <a href="#" class="social-icon-sm si-dark si-dark-round si-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon-sm si-dark si-dark-round si-twitter ">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon-sm si-dark si-dark-round si-instagram">
                                    <i class="fa fa-instagram"></i>
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#" class="social-icon-sm si-dark si-dark-round si-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-faded">           
                <div class="container">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarRestaurant" aria-controls="navbarRestaurant" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img class='logo logo-light hidden-md-down' src="images/logo-light.png" alt="">
                    </a>
                    <div  id="navbarRestaurant" class="navbar-collapse collapse">
                        <ul class="navbar-nav  ml-auto">
                            <li class="nav-item"><a data-scroll class="nav-link active" href="#home"> Home</a></li>
                            <li class="nav-item"><a data-scroll class="nav-link" href="#about"> About</a></li>

                            <li class="nav-item"><a data-scroll class="nav-link" href="#foods"> Our food</a></li>
                            <li class="nav-item"><a data-scroll class="nav-link" href="#services"> Services</a></li>
                            <li class="nav-item"><a data-scroll class="nav-link" href="#menu"> Menu</a></li>
                            <li class="nav-item"><a data-scroll class="nav-link" href="#chefs"> Chefs</a></li>
                            <li class="nav-item"><a data-scroll class="nav-link" href="#gallery"> Gallery</a></li>
                            <li class="nav-item"><a data-scroll class="nav-link" href="#contact"> Contact</a></li>
                            <li class="nav-item"><a data-scroll class="nav-link btn btn-primary" href="classic-restaurant-reservation.html"> Book a table</a></li>
                        </ul>   
                    </div>
                </div>
            </nav>
        </header><!--/header-->

        @include('includes.slider')

        <div class="bg-white" id="about">
            <div class="container pt90 pb60">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb30">
                        <h3 class=" h1 font300 mb30">Our History</h3>
                        <p>
                            In volutpat vehicula iaculis. Nullam dapibus velit vel suscipit malesuada. Morbi tincidunt, dui tristique tincidunt faucibus, purus sapien consectetur libero, vitae venenatis eros lacus vitae erat. Mauris tristique pretium tristique. Integer at nulla at eros suscipit suscipit vitae nec diam. Nullam dictum sed metus nec mollis.
                        </p>
                        <p>
                            In volutpat vehicula iaculis. Nullam dapibus velit vel suscipit malesuada. Morbi tincidunt, dui tristique tincidunt faucibus, purus sapien consectetur libero, vitae venenatis eros lacus vitae erat. Mauris tristique pretium tristique. Integer at nulla at eros suscipit suscipit vitae nec diam. Nullam dictum sed metus nec mollis.
                        </p><br>
                        <a href="resto-about.html" class="btn btn-dark">Read more</a>
                    </div>
                    <div class="col-lg-6 mb30">
                        <img src="images/resto/about.png" alt="" class="img-fluid">
                    </div>              
                </div>
            </div>
        </div><!--intro-->

        <div class="bg-primary pt90 pb90" id="foods">
            <div class="container">
                <div class="center-title">
                    <h2 class="text-white">seasonal offers</h2>
                    <p class="text-white-gray">Checkout the latest offers in menu</p>
                </div>

                <div class="row">
                    <div class="owl-carousel owl-theme carousel-cards">
                        <div class="item">
                            <a class="card-image" href="#">
                                <img src="images/resto/food1.jpg" alt="" class="img-fluid">
                                <span class="float-right lead">$9</span>
                                <h4>Soft drink</h4>
                            </a>
                        </div><!--item-->
                        <div class="item">
                            <a class="card-image" href="#">
                                <img src="images/resto/food2.jpg" alt="" class="img-fluid">
                                <span class="float-right lead">$14</span>
                                <h4>Red wine</h4>
                            </a>
                        </div><!--item-->
                        <div class="item">
                            <a class="card-image" href="#">
                                <img src="images/resto/food3.jpg" alt="" class="img-fluid">
                                <span class="float-right lead">$5</span>
                                <h4>Pizza Lorem</h4>
                            </a>
                        </div><!--item-->
                        <div class="item">
                            <a class="card-image" href="#">
                                <img src="images/resto/food4.jpg" alt="" class="img-fluid">
                                <span class="float-right lead">$9</span>
                                <h4>Pizza roll</h4>
                            </a>
                        </div><!--item-->
                        <div class="item">
                            <a class="card-image" href="#">
                                <img src="images/resto/food5.jpg" alt="" class="img-fluid">
                                <span class="float-right lead">$13</span>
                                <h4>Pure veg</h4>
                            </a>
                        </div><!--item-->
                        <div class="item">
                            <a class="card-image" href="#">
                                <img src="images/resto/food6.jpg" alt="" class="img-fluid">
                                <span class="float-right lead">$11</span>
                                <h4>Chikan Salad</h4>
                            </a>
                        </div><!--item-->
                    </div>
                </div>
            </div>
        </div><!--foods-->
        <div class="half-image-content bg-faded">
            <div class="content-img bg-parallax pos-left" data-jarallax='{"speed": 0.2}' style="background:url(images/resto/chef-l1.jpg) no-repeat;">
            </div>
            <img src="images/resto/chef-l1.jpg" class="visible-lg-down hidden-lg-up img-fluid" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 ml-auto  pt80 pb80">
                        <h2 class="mb40">
                            Whay choose assan restaurant?
                        </h2>
                        <div class="clearfix">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p><br>
                            <a href="classic-restaurant-menu.html" class="btn btn-outline-primary">Explore menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--half image section-->


        <!-- MENU -->

        @include('includes.menu')

        



        <!-- WHY CHOOSE US -->

        <div class="bg-dark pt90 pb60" id="services">
            <div class="container">
                <div class="center-title">
                    <h2 class="text-white">Why choose us?</h2>
                    <p class="text-white-gray">Our services</p>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 mb30">
                        <img src="images/resto/vector1.png" alt="" class="img-fluid">
                        <h4 class="text-white">Award winners</h4>
                        <p>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-md-4 mb30">
                        <img src="images/resto/vector2.png" alt="" class="img-fluid">
                        <h4 class="text-white">Catering</h4>
                        <p>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-md-4 mb30">
                        <img src="images/resto/vector3.png" alt="" class="img-fluid">
                        <h4 class="text-white">Best chefs</h4>
                        <p>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-md-4 mb30">
                        <img src="images/resto/vector4.png" alt="" class="img-fluid">
                        <h4 class="text-white">Music events</h4>
                        <p>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-md-4 mb30">
                        <img src="images/resto/vector5.png" alt="" class="img-fluid">
                        <h4 class="text-white">Game zone</h4>
                        <p>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-md-4 mb30">
                        <img src="images/resto/vector7.png" alt="" class="img-fluid">
                        <h4 class="text-white">Event managament</h4>
                        <p>
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        

              
        <div id='contact'>
            <div id="markermap" style="width: 100%;height: 350px;"></div>
        </div>
        <footer class='footer pt50 pb20'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-4 mb30'>
                        <a href='#home' data-scroll class='h6'>
                            <img src='images/logo.png' alt='' class="mb30">
                        </a>
                        <p>
                           Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        </p>
                    </div>
                     <div class='col-lg-4 mb30'>
                         <h4 class="mb30">Opening Time</h4>
                        <ul class='list-unstyled opening-time'>
                            <li class='clearfix'>
                                <span class='day'>
                                    Monday
                                </span>
                                <span class='float-right time'>
                                    9:AM - 10PM
                                </span> 
                            </li>
                             <li class='clearfix'>
                                <span class='day'>
                                    Tuesday
                                </span>
                                <span class='float-right time'>
                                    9:AM - 10PM
                                </span> 
                            </li>
                             <li class='clearfix'>
                                <span class='day'>
                                    Wednesday
                                </span>
                                <span class='float-right time'>
                                    9:AM - 10PM
                                </span> 
                            </li>
                             <li class='clearfix'>
                                <span class='day'>
                                    Thursday
                                </span>
                                <span class='float-right time'>
                                    9:AM - 10PM
                                </span> 
                            </li>
                             <li class='clearfix'>
                                <span class='day'>
                                    Friday
                                </span>
                                <span class='float-right time'>
                                    9:AM - 10PM
                                </span> 
                            </li>
                            <li class='clearfix'>
                                <span class='day'>
                                    Saturday - Sunday
                                </span>
                                <span class='float-right time'>
                                    11:AM - 12PM
                                </span> 
                            </li>
                     </ul>
                    </div>
                    <div class='col-lg-4 mb30'>
                        <h4 class="mb30">Follow us</h4>
                        <span class='clearfix'>
                            <a href="#" class="social-icon-sm si-dark si-dark-round si-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon-sm si-dark si-dark-round si-twitter ">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon-sm si-dark si-dark-round si-instagram">
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#" class="social-icon-sm si-dark si-dark-round si-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>  
                        </span>
                         <div class='pt30'>
                             <span>Support</span>
                             <p class="lead">support@domain.com</p>
                             <span>Phone</span>
                             <p class="lead">1800 394 4933</p>
                    &copy; Copyright 2017. All Right Reserved. 
                </div>
                    </div>
                
                </div>
               
            </div>
        </footer>
        <!--back to top  -->
        <a href="#" class="back-to-top" id="back-to-top"><i class="ti-angle-up"></i></a>
       @include('includes.front-script')
    </body>
</html>
