<?php
session_start();
?>





<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Decorators - Design Studio HTML Template | Portfolio Fullwidth</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
     
    
     <!-- Main Header-->
     <header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="row clearfix">
                    
                    <!--Top Right-->
                    <div class="top-right pull-right">
                    
                        <!--social-icon-->
                        <div class="social-icon">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-dribbble"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                        
                        <ul>
                            <li><span class="fa fa-envelope-o"></span><a href="mailto:sushanthp48@gmail.com">interiorrsupport@gmail.com</a></li>
                            <li><span class="fa fa-phone"></span><a href="tel:+918892280202">+91-8892280202</a>,<a href="tel:+918310116574">+91-8310116574</a></li>
                            <li><span class="fa fa-clock-o"></span>Mon - Fri : 9:00 -1700</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Header Top End -->
        
     
    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">

                                <li ><a href="index.php">Home</a>
                                
                                    <li ><a href="about-us.php">About Us</a></li>

                                    <li class="current"><a href="portfolio-fullwidth.php">Projects</a></li>
                                            
                                    <li ><a href="quotation.php">Free Quotation</a> </li>

                                    <li><a href="shop.php">Shop</a></li>
                                    
                                    <li><a href="contact.php">Contact</a></li>

                                    <?php include 'header.php'; ?>
                
                            
                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                                        <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                                        </div><!-- / Hidden Nav Toggler -->
                                        
                        <!--End Main Header -->
                </div>    
            </div>
        </div>
    </header>   

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
            
            <div class="hidden-bar-closer">
                <button class="btn"><i class="fa fa-close"></i></button>
            </div>
            
            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">
            
                <!-- .logo -->
                <div class="logo text-center">
                    <a href="index.php"><img src="images/logo-2.png" alt=""></a>			
                </div><!-- /.logo -->
                
                <!-- .Side-menu -->
                <div class="side-menu">
                    <!-- .navigation -->
                    <ul class="navigation">
                        <li><a href="index.php">Home</a>
                                
                        <li><a href="about-us.php">About Us</a></li>

                        <li class="current" ><a href="portfolio-fullwidth.php">Projects</a></li>

                        <li ><a href="quotation.php">Free Quotation</a> </li>

                        <li><a href="shop.php">Shop</a> </li>
                        
                        <li><a href="contact.php">Contact</a></li>

                        <?php include 'header.php'; ?>
                    </ul>
            </div><!-- / Hidden Bar Wrapper -->
        </section>

        <!-- / Hidden Bar -->

    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Our Projects</h1>
        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h2>Projects Fullwidth</h2></div>

        </div>
    </section>
    
    
    <!--Gallery Section-->
    <section class="gallery-section fullwidth">
            
        <!--Mixituo Gallery-->
        <div class="mixitup-gallery">
            <!--Filter-->
            <div class="filters text-center">
            <div class="icon-box"><span class="fa fa-picture-o"></span></div>
            
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All Projects</li>          
                    <li class="filter" data-role="button" data-filter=".painting">Painting</li>
                    <li class="filter" data-role="button" data-filter=".flooring">Flooring</li>
                    <li class="filter" data-role="button" data-filter=".tile-marble">Tile &amp; Marble</li>
                    <li class="filter" data-role="button" data-filter=".furniture">Furniture</li>
                    <li class="filter" data-role="button" data-filter=".lighting">Lighting</li>
                </ul>
            </div>
            
            
            <div class="filter-list clearfix">
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all tile-marble furniture">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/14.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">White Elegant Dining Set</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all tile-marble painting lighting">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/15.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Interior make over</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a> , <a href="#">Lighting</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all painting flooring">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/16.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Wooden Sofa</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all painting lighting">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/17.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Fabric Sofa </a></h3>
                            <div class="cat-links"><a href="#">Furniture</a> , <a href="#">Flooring</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all tile-marble furniture flooring">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/18.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Space saving storage stand</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all painting lighting tile-marble">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/19.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Customised office come bed</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a> , <a href="#">Lighting</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all furniture painting flooring lighting">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/20.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Custom Sofa</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a> , <a href="#">Lighting</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all flooring lighting">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/21.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Balck Nylon sofa</a></h3>
                            <div class="cat-links"><a href="#">Lighting</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all painting lighting">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/22.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Designer Cycle</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all tile-marble">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/23.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">White Sofa with elegant plant</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a> , <a href="#">Lighting</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all furniture flooring">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/24.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Complete Interior</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a> , <a href="#">Lighting</a>, <a href="#">Painting</a></div>
                        </div>
                    </div>
                </div>
                
                <!--Default Portfolio Item-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all tile-marble furniture lighting">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/gallery/25.jpg" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <!-- <a href="" class="proj-link"><span class="fa fa-link"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="">Full Dinig Set with Chairs</a></h3>
                            <div class="cat-links"><a href="#">Furniture</a></div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div><!--End Mixituo Gallery-->
        
        <br><br> 
    
    
    
        <!--Project Details Section-->
    <section class="project-details">
    	<div class="auto-container">
            
            <!--Project Images-->
            <div class="project-images">
            	<div class="row clearfix">
                	<!--Image Column-->
                    <div class="image-column col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    	<figure class="image-box"><a href="images/resource/service-image-11.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/gallery/8.jpg" alt=""></a></figure>
                    </div>
                    <!--Image Column-->
                    <div class="image-column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    	<figure class="image-box"><a href="images/gallery/9.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/gallery/9.jpg" alt=""></a></figure>
                    </div>
                    
                    <!--Image Column-->
                    <div class="image-column col-md-4 col-sm-6 col-xs-12">
                    	<figure class="image-box"><a href="images/gallery/10.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/gallery/10.jpg" alt=""></a></figure>
                    </div>
                    
                    <!--Image Column-->
                    <div class="image-column col-md-4 col-sm-6 col-xs-12">
                    	<figure class="image-box"><a href="images/gallery/11.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/gallery/11.jpg" alt=""></a></figure>
                    </div>
                    
                    <!--Image Column-->
                    <div class="image-column col-md-4 col-sm-6 col-xs-12">
                    	<figure class="image-box"><a href="images/gallery/12.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/gallery/12.jpg" alt=""></a></figure>
                    </div>
                    
                </div>
            </div>
            
            <!--Project Content-->
            <div class="project-content">
            	<h2>Mid Century Modern Wooden Sofa</h2>
            	<div class="row clearfix">
                	<!--Content Column-->
                    <div class="content-column col-lg-12 col-md-8 col-sm-12 col-xs-12">
                    	<div class="text">This is our best wooden sofa collection. Many customers as ordered this mid-century
modern wooden sofa. This sofa as 3 different style and different seatings.
3-seater, 2-seater and single seater.</div>
                        <div class="social-links">
                        	<a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-dribbble"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-skype"></span></a>
                        </div>
                    </div>
                    
                    <!-- Info Column
                    <div class="info-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    	<ul class="proj-info">
                        	<li><strong>Category :</strong>  WordPress, HTML</li>
                            <li><strong>Client :</strong>  Envato PVT LMD</li>
                            <li><strong>Date :</strong>  21st August, 2015</li>
                            <li><strong>Link :</strong>  www.steelthemes.com</li>
                            <li class="rating"><strong>Rating :</strong>  <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </li>
                        </ul>
                    </div> -->
                </div>
            </div>
            
        </div>
    </section>
    
    </section>
    
    <!-- footer -->
    <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">
        <div class="auto-container centered">
            <!--Footer Bottom-->
        <div class="footer-bottom centered">
            <div class="auto-container centered">
                <div class="clearfix">
                    <div class="pull-left"> All Copyrights are reserved INTERIORR 2021 <i class="fa fa-copyright" aria-hidden="true"></i> </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>


</html>