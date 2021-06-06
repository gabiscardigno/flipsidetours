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
    <link rel="stylesheet" href="responsive.css" />
    <link href="https://fonts.adobe.com/fonts/azo-sans" rel="stylesheet">
    <?php wp_head(); ?>


</head>

<body>

    <header class="container-fluid ourtours">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php wp_nav_menu(array(
        'menu' => 'Top menu',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link",
        )); ?>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="container toursheader-text">
            <h1><?php the_field('tourtitle');?></h1>
            <div class="col-md-6">
                <div class="row">
                    <p><?php the_field('tourdescription');?></p>
                </div>
                <div class="col-md-4">
                    <a href="http://206.189.45.97/~mesh21/sub/?page_id=1106" class="btn-book" role="button">BOOK NOW</a>
                </div>
                <div class="row icons">
                    <div class="col-md-2">
                        <img alt="Adventure Symbol" width=50 src="<?php the_field('adventuresymbol'); ?>">
                    </div>
                    <div class="col-md-2">
                        <img alt="Food Symbol" width=50 src="<?php the_field('foodsymbol'); ?>">
                    </div>
                    <div class="col-md-2">
                        <img alt="Love Symbol" width=50 src="<?php the_field('lovesymbol'); ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2><?php the_field('tourprice');?></h2>
            </div>

        </section> <!-- container -->

        <div class="container-fluid">
        </div>

    </header>