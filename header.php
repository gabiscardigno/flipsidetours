<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">

    <title>
        <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>

    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- add icon link -->
    <link rel="icon" href="images/flipsidelogoicon.png" type="image/icontype">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.adobe.com/fonts/azo-sans" rel="stylesheet">
    <?php wp_head(); ?>


</head>

<body>

    <header class="container-fluid header flipside-nav">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/Flipside%20Logo.png" alt="Flipside Logo" width="70" /></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="ourtours.html">OUR TOURS</a></li>
                        <li><a href="#">GALLERY</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><button type="button" class="btn-nav">BOOK NOW</button></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container-fluid flipsidebg">
            <div class="container col-md-6 header-text">
                <!--<p class="preheader">WELCOME TO...</p>-->
                <h1>Flipside Tours</h1>
            </div>
            <div class="container col-md-6 headerpara">
                <p>Explore Fremantle in the most unique way possible with Flipside Tours. Our unforgetable tour experiences guarantee you will leave with memories and smiles that will last a lifetime
                </p>
                <div>
                    <button type="button" class="btn-home1">LEARN MORE</button>
                </div>
                <div>
                    <a href="ourtours.html" class="btn-home2" role="button">FIND OUT MORE</a>
                </div>
            </div>
        </div>
    </header>