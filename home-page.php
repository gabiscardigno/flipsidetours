<?php
    /*
    Template Name: Home Page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid whybg">
        <div class="row">
            <div class="col-md-6 img-fluid ">
                <img class="responsive janeimage" alt="Jane Bree, Founder of Flipside Tours" width="600" src="<?php the_field('janebreeimage'); ?>">
            </div>
            <div class="container col-md-3 why">
                <h2 class="whyheader"><?php the_field('whyheader');?></h2>
                <p class="whytext"><?php the_field('whyparagraph');?></p>
                <a href= "http://206.189.45.97/~mesh21/sub/?page_id=1076" class="btn-orange" role="button">FIND THE TOUR FOR YOU</a>
            </div><!-- container-->
        </div>
    </section>

    <section class="container-fluid toursbg">
        <div class="container text-right">
            <h3 class="tourheading"><?php the_field('ourtourheading');?></h3>
        </div>
        <div class="container ghostly">
            <div class="container col-sm-2">
                <img class="responsive tourimg" alt="Prison Tour" width="300" src="<?php the_field('prisontour'); ?>">
            </div>
            <div class="container col-sm-7 ghostly-text">
                <h3 class="ghostlytitle"><?php the_field('ghostlytitle');?></h3>
                <p><?php the_field('ghostlyparagraph');?></p>
                <a href="http://206.189.45.97/~mesh21/sub/?page_id=1236" class="btn btn-tours" role="button">FIND OUT MORE</a>
            </div>
            <div class="container col-sm-3 ghostly-price">
                <p><?php the_field('ghostlyprice');?></p>
            </div>
        </div><!-- ghostly tours-->


        <div class="container evening">
            <div class="container col-sm-2 evening-image">
                <img class="responsive tourimg" alt="Food laid out on a table at a Fremantle restaurant" src="<?php the_field('eveningtourimage'); ?>">
            </div>
            <div class="container col-sm-7 evening-text">
                <h3 class="eveningtitle"><?php the_field('eveningtitle');?></h3>
                <p><?php the_field('eveningparagraph');?></p>
                     <a href="http://206.189.45.97/~mesh21/sub/?page_id=1278" class="btn btn-tours" role="button">FIND OUT MORE</a>
            </div>
            <div class="container col-sm-3 evening-price">
                <p><?php the_field('eveningprice');?></p>
            </div>
        </div><!-- evening food-->


        <div class="container market">
            <div class="container col-sm-2">
                <img class="responsive tourimg" alt="Looking up outside the Fremantle markets"  src="<?php the_field('markettourimage'); ?>">
            </div>
            <div class="container col-sm-7 market-text">
                <h3 class="markettitle"><?php the_field('markettitle');?></h3>
                <p><?php the_field('marketparagraph');?></p>
                <a href="http://206.189.45.97/~mesh21/sub/?page_id=1365" class="btn btn-tours" role="button">FIND OUT MORE</a>
            </div>
            <div class="container col-sm-3 market-price">
                <p><?php the_field('marketprice');?></p>
            </div>
        </div><!-- markettours-->
    </section>


    <div class="container-fluid">
        <div class="container">
            <p class="explore1"><?php the_field('explore1paragraph');?></p>
            <p class="explore2"><?php the_field('explore2paragraph');?></p>
            <div class="text-center">
                <a href="http://206.189.45.97/~mesh21/sub/?page_id=1530" class="btn btn-explore" role="button">BOOK NOW</a>
            </div>
            <div class="container exploreimgs text-center">
                <div class="col-md-6 ferriswheel">
                   <img class="responsive exploreimg1" alt="Ferris wheel in Fremantle"  width="500" src="<?php the_field('exploreimage1'); ?>">
                </div>
                <div class="col-md-6 graffiti">
                    <img class="responsive exploreimg2" alt="Graffiti down the alley ways in the heart of Fremantle" width="500" src="<?php the_field('exploreimage2'); ?>">
                </div>
            </div>
        </div><!-- container-->
    </div>

    <div class="container-fluid instasec">
        <div class="container instatop">
            <div class="col-md-2">
                <img alt="Instagram Logo" height="100" src="<?php the_field('instagramlogo'); ?>">
            </div>
            <div class="container instatext">
                <a class="instalink" href="http://instagram.com">@FLIPSIDE</a>
                <p><?php the_field('instasubheading');?></p>
            </div>
            <div class="row instafeed">
                <div class="column">
                    <img alt="Ferris Wheel" style="width:100%" src="<?php the_field('instagramimage1'); ?>">
                </div>
                <div class="column">
                   <img alt="Locals watching performers" style="width:100%" src="<?php the_field('instagramimage2'); ?>">
                </div>
                <div class="column">
                    <img alt="Children playing on the playground" style="width:100%" src="<?php the_field('instagramimage3'); ?>">
                </div>
                <div class="column">
                    <img alt="Visitors outside of Fremantle Prison" style="width:100%" src="<?php the_field('instagramimage4'); ?>">
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>