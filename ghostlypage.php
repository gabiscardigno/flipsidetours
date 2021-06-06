<?php
    /*
    Template Name: Ghostly Information
    */
    ?>

<?php include (TEMPLATEPATH . '/tourheader.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-3 img1">
                    <img class="responsive" alt="Outside of Fremantle Prison" width="440" src="<?php the_field('prisonimage1'); ?>">
                </div>
                <div class="col-md-7 img2">
                    <img class="responsive" alt="Inside Fremantle Prison" width="638" src="<?php the_field('prisonimage2'); ?>">
                </div>
                <div class="col-md-2 img3">
                    <img class="responsive" alt="Inside Fremantle Prison" width="220" src="<?php the_field('prisonimage3'); ?>">
                </div>
            </div>
        </div>

        <div class="container intro">
            <p class="text-bold"><?php the_field('introductionparagraph');?></p>
            <div class="col-md-6">
               <p><?php the_field('tourinformation1');?></p>
                <ul>
                    <li>
                        <p><?php the_field('listitem1');?></p>
                    </li>
                    <li>
                        <p><?php the_field('listitem2');?></p>
                    </li>
                    <li>
                        <p><?php the_field('listitem3');?></p>
                    </li>
                    <li>
                        <p><?php the_field('listitem4');?></p>
                    </li>
                    <li>
                        <p><?php the_field('listitem5');?></p>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <p><?php the_field('tourinformation2');?></p>

                <p><?php the_field('tourinformation3');?></p>
            </div>
        </div>
    </div>

    <section class="container-fluid tourdetails">
        <h3><?php the_field('tourdetailsheading');?></h3>
        <div class="container schedule">
            <p><?php the_field('tourdetails1');?></p>
            <p><?php the_field('tourdetails2');?></p>
            <p><?php the_field('tourdetails3');?></p>
            <p><?php the_field('tourdetails4');?></p>

            <p class="font-italic"><?php the_field('tourfineprint');?></p>
        </div>

    </section>

    <div class="container-fluid statsbg">
        <div class="container">
            <div class="col-md-6">
                <p class="statstext"><?php the_field('statisticsheader');?></p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <p class="statsnumber"><?php the_field('statisticsnumber');?></p>
                </div>
                <div class="row">
                    <img class="statsimg" alt="Infographical image of a group of people" width="445" src="<?php the_field('statisticsimage'); ?>">
                </div>
                <div class="row">
                    <p class="whohave"><?php the_field('statisticstext');?></p>
                </div>
            </div>
        </div>
    </div>

    <section class="container reviews">
        <h4><?php the_field('reviewsheader');?></h4>
        <div class="container row reviewone">
            <div class="col-md-4 stars">
                <span class="fa fa-star checked" data-width="10%"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-md-2">
                <p class="reviewname1"><?php the_field('reviewname1');?></p>
            </div>
        </div>
        <div class="container reviewtext">
            <p class="reviewtext"><?php the_field('reviewtext1');?></p>
        </div>

        <div class="container reviewtwo">
            <div class="col-md-4 stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <div class="col-md-2">
                <p class="reviewname2"><?php the_field('reviewname2');?></p>
            </div>
        </div>
        <div class="container reviewtext">
            <p class="reviewtext"><?php the_field('reviewtext2');?></p>
        </div>

    </section>

    <div class="container-fluid instasec">
        <div class="container instatop">
            <div class="col-md-2">
               <img alt="Instagram Logo" height="100" src="<?php the_field('instagramlogo'); ?>">
            </div>
            <div class="container instatext">
                <a class="instalink" href="http://instagram.com">@FLIPSIDE</a>
                <p><?php the_field('instagramhashtag');?></p>
            </div>
            <div class="container row instaimages">
                <div class="col-md-3">
                    <img src="http://206.189.45.97/~mesh21/sub/wp-content/uploads/2021/06/instaimg1.jpg" alt="Fremantle ferris wheel" width="255">
                </div>
                <div class="col-md-3">
                    <img src="http://206.189.45.97/~mesh21/sub/wp-content/uploads/2021/06/instaimg2.jpg" alt="People sitting on the grass listening to live music" width="255">
                </div>
                <div class="col-md-3">
                    <img src="http://206.189.45.97/~mesh21/sub/wp-content/uploads/2021/06/instaimg3.jpg" alt="Kids playing at a locla Fremantle playground" width="255">
                </div>
                <div class="col-md-3">
                    <img src="http://206.189.45.97/~mesh21/sub/wp-content/uploads/2021/06/instaimg4.jpg" alt="Visitors outside Fremantle Prison" width="255">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container col-md-7 booking">
            <div class="row">
                <p class="booktext1"><?php the_field('bookingtext1');?></p>
            </div>
            <div class="row">
                <p class="booktext2"><?php the_field('bookingtext2');?></p>
            </div>
        </div>

        <div class="container co-md-5">
            <a href="http://206.189.45.97/~mesh21/sub/?page_id=1530" class="btn-bookend text-center" role="button">BOOK NOW</a>
        </div>
    </div>
<?php get_footer(); ?>  