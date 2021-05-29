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
        <nav class="navbar justify-content-center">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="#"><img src="images/Flipside%20Logo.png" alt="Flipside Logo" width="90" /></a> -->
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="ourtours.html">Our Tours</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><button type="button" class="btn-nav">BOOK NOW</button></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid flipsidebg">
            <div class="container header-text">
                <div class="container">
                    <p class="preheader">WELCOME TO...</p>
                    <h1>Flipside Tours</h1>
                </div>
                <div class="container headerpara">
                    <div class="container">
                        <p>Where we provide safe, fun, and unforgettable experiences that creates memories and smiles that last a lifetime
                        </p>
                    </div>
                    <div class="container">
                        <div class="col-md-2">
                            <button type="button" class="btn-home1">LEARN MORE</button>
                        </div>
                        <div class="col-md-3">
                            <a href="ourtours.html" class="btn-home2" role="button">FIND OUT MORE</a>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->
        </div>
    </header>