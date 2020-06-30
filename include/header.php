<?php
$page_link = pathinfo(curPageURL(),PATHINFO_FILENAME);
function curPageURL() {
    $pageURL = 'http';
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
?>
<?php require_once("dbconnect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HOUSEHOLD MAID &amp;</title>
    <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- CSS Style -->
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .required,.error{
            color: red;
        }
    </style>
</head>

<body class="cms-index-index cms-home-page" style="background-image: url('images/page-background.png')">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="page">

    <!-- Header -->
    <header id="header">
        <div class="header-container" style="background-color: #9932CC">
            <div class="header-top"style="background-color: #9932CC">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-6 hidden-xs">
                            <div class="slider-items-products">
                                <div id="offer-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                
            </div>
        </div>
        <!-- End Header Logo -->
        <nav>
            <!-- Start Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-menu">
                                <div class="mm-toggle-wrap hidden-lg hidden-md hidden-sm">
                                    <div class="mm-toggle"> <i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                                </div>
                                <ul class="hidden-xs">
                                    <li class="<?php if($page_link != '' && $page_link == 'index'){echo 'active';}?>"><a href="index">Home</a></li>
                                    <li class="<?php if($page_link != '' && $page_link == 'about_us'){echo 'active';}?>"><a href="about_us">About us </a></li>
                                    <li class="<?php if($page_link != '' && $page_link == 'household_management'){echo 'active';}?>"><a href="household_management">Household Management </a></li>
                                    
                                   
                                    <li class="<?php if($page_link != '' && $page_link == 'news_events'){echo 'active';}?>"><a href="news_events">News & Events</a></li>
                                    <li class="<?php if($page_link != '' && $page_link == 'contact_us'){echo 'active';}?>"><a href="contact_us">Contact</a></li>
                                    <li class="<?php if($page_link != '' && $page_link == 'login'){echo 'active';}?>"><a href="login">Log In</a></li>
                                    <li class="custom-menu<?php //if($page_link != '' && $page_link == 'child_care'){echo 'active';}?>"><a>Register <i class="glyphicon glyphicon-chevron-down"></i></a>
                                        <ul class="dropdown">
                                            <li > <a href="register.php">Register as Agency</a></li>
                                            <li> <a href="maid_registration.php">Register as Maid</a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                </ul>
                                
                                </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>