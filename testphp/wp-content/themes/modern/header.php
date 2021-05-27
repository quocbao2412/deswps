<!DOCTYPE html>
<html <?php language_attributes(); ?>lang="en">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Modern Template | Home Page Style 1</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/loader.min.css">       
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/fontawesome/css/font-awesome.min.css" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/magnific-popup.min.css">
 
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
    <!-- REVOLUTION SLIDER 4 STYLE -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/rev-slider-4.css"> 
    
    <!-- REVOLUTION SLIDER CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">-->
    <!-- REVOLUTION NAVIGATION STYLE -->
    <!-- <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css"> -->
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet"> 

</head>

<body>

	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
        <header class="site-header header-style-1  nav-wide">
            
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white p-t10">
                    <div class="container">
                        <div class="logo-header">
                        	<div class="logo-header-inner logo-header-one">
                            	<a href="index.php">
                                <img src="<?php bloginfo('template_directory'); ?>/images/logo-dark.png" width="171" height="49" alt="" />
                            </a>
                            </div>
                        </div>
                        <!-- ETRA Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="javascript:;"  class="vnav-btn">
                                    <span class="fa fa-bars"></span>
                                </a>
                            </div>
                         </div>                         
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>
                         </div>
 
                        <div class="extra-nav header-top-info">
                            <div class="extra-cell">
                            	<div class="wt-topbar-right clearfix top-bar">
                                        <ul class="social-bx list-inline pull-right">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline e-p-bx pull-right">
                                            <li><i class="fa fa-envelope"></i>Info@gmail.com</li>
                                            <li><i class="fa fa-phone"></i>(654) 123-4567</li>
                                        </ul>
                                    </div>
                            </div>
                         </div>  
                                                
                         <!-- ETRA Nav -->
						<div class="extra-nav">
                            <div class="extra-cell">
                                <div class="dropdown share-icon-btn2">
                                     <a href="javascript:;" class="site-search-btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></a>
                                     <div class="dropdown-menu bg-white">
                                        <div class="top-bar">
                                            <ul class="social-bx list-inline">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                                 
                            </div>
                         </div>  
                                              
                        <!-- SITE Search -->
                        <div id="search"> 
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>   
                            </form>
                        </div>
                        
                        <!-- STYLE SWITCHER  ======= --> 
                        <div class="nav-sidebar">
                            <a href="javascript:;" class="vnav-close"></a>
                            <div class="nav-siderbar-scroll">
                            	<div class="vertical-content-wrap">
                                    <div class="vertical-content-area vertical-centered">
                                        <!-- MAIN Vav -->
                                        <div class="vertical-nav">
                                            <ul class=" nav navbar-nav">
                                                <li class="active">
                                                    <a href="javascript:;">Home</a>
                                                    <ul class="sub-menu v-sub-menu">
                                                        <li>
                                                            <a href="index.php">Home-1</a>
                                                        </li>
                                                   <!--     <li>
                                                            <a href="index-2.php">Home-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="index-3.php">Home-3</a>
                                                        </li>
                                                        <li>
                                                            <a href="index-4.php">Home-4</a>
                                                        </li>
                                                        <li>
                                                            <a href="index-5.php">Home-5</a>
                                                        </li>        -->                                                                                                                                                                   
                                                    </ul>                                                    
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Pages</a>
                                                    <ul class="sub-menu v-sub-menu">
                                                        <li>
                                                            <a href="about-1.php" target="_blank">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="contact-1.php">Contact us</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">News</a>
                                                    <ul class="sub-menu v-sub-menu">
                                                        <li><a href="news-grid.php">Grid</a></li>
                                                        <li><a href="news-listing.php">Listing</a></li>
                                                        <li><a href="news-masonry.php">Masonry</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Works</a>
                                                    <ul class="sub-menu v-sub-menu">
                                                        <li><a href="work-grid.php">Grid</a></li>
                                                        <li><a href="work-masonry.php">Masonry</a></li>
                                                        <li><a href="work-carousel.php">Carousel</a></li>
                                                        <li><a href="project-detail.php">Project Detail</a></li>                                        
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Post detail</a>
                                                    <ul class="sub-menu v-sub-menu">
                                                        <li><a href="post-image.php">Image</a></li>
                                                        <li><a href="post-gallery.php">Gallery</a></li>
                                                        <li><a href="post-video.php">Video</a></li>
                                                        <li><a href="post-right-sidebar.php">Right Sidebar</a></li>                                        
                                                    </ul>                                    
                                                </li>
                                                <li class="submenu-direction">
                                                    <a href="javascript:;">Shortcodes</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="accordian.php">All Elements</a></li>
                                                    </ul>                                    
                                                </li>                                   
                                            </ul>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!-- STYLE SWITCHER END ==== -->                        

                    </div>
                </div>
            </div>
            
        </header>