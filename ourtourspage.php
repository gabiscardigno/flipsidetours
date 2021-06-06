<?php
    /*
    Template Name: Our Tours
    */
    ?>

<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
    <section class="container-fluid">
        <div class="container toursghostly">
            <div class="container ghostlyheading">
                <h3><?php the_field('ghostlyheading');?></h3>
            </div>
            <div class="column col-md-4 ghostlyinfo">

                <!-- Ghostly Tours Section -->
                <div class="row-md-3">
                    <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=38');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>    

                </div>
                <div class="row-md-3">
                    <a href="http://206.189.45.97/~mesh21/sub/?page_id=1236" class="btn-ghostlyfind" role="button">FIND OUT MORE</a>
                </div>
                <div class="row-md-3">
                    <a href="http://206.189.45.97/~mesh21/sub/?page_id=1530" class="btn-ghostlybook" role="button">BOOK TOUR</a>
                </div>
                <div class="col-md-2">
                    <img class="responsive" alt="Adventure Symbol" width="50" src="<?php the_field('gadventuresymbol'); ?>">
                </div>
                <div class="col-md-2">
                    <img class="responsive" alt="Food Symbol" width="50" src="<?php the_field('gfoodsymbol'); ?>">
                </div>
                <div class="col-md-2">
                    <img class="responsive" alt="Love Symbol" width="50" src="<?php the_field('glovesymbol'); ?>">
                </div>
                <div class="col-md-5">
                    <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=40');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="price"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>    

                </div>
            </div>
            <div class="col-md-4">
                <img class="responsive" alt="Fremantle Prison at night" width="630" src="<?php the_field('gimage'); ?>">
            </div>
        </div>

        <!-- Evening Food Section -->
        <div class="container ourevening">
        <div class="container eveningheading">
            <h3><?php the_field('eveningheading');?></h3>
        </div>
        <div class="column col-md-4 ghostlyinfo">
            <div class="row-md-3">
                    <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=41');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>  
            </div>
            <div class="row-md-3">
                <a href="http://206.189.45.97/~mesh21/sub/?page_id=1278" class="btn-ghostlyfind" role="button">FIND OUT MORE</a>
            </div>
            <div class="row-md-3">
                <a href="http://206.189.45.97/~mesh21/sub/?page_id=1530" class="btn-ghostlybook" role="button">BOOK TOUR</a>
            </div>
            <div class="col-md-2">
                <img class="responsive" alt="Adventure Symbol" width="50" src="<?php the_field('eadventuresymbol'); ?>">
            </div>
            <div class="col-md-2">
                <img class="responsive" alt="Food Symbol" width="50" src="<?php the_field('efoodsymbol'); ?>">
            </div>
            <div class="col-md-2">
                <img class="responsive" alt="Love Symbol" width="50" src="<?php the_field('elovesymbol'); ?>">
            </div>
            <div class="col-md-5">
                                    <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=45');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?> 
            <div><p class="price"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?> 
            </div>
        </div>
        <div class="col-md-4">
            <img class="responsive" alt="Fremantle Prison at night" width="630" src="<?php the_field('eimage'); ?>">
        </div>
            </div>

        <!-- Market Tours Section -->
        <div class="container ourmarket">
        <div class="container ghostlyheading">
            <h3><?php the_field('marketheading');?></h3>
        </div>
        <div class="column col-md-4 ghostlyinfo">
            <div class="row-md-3">
                                    <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=42');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
            </div>
            <div class="row-md-3">
                <a href="markettour.html" class="btn-ghostlyfind" role="button">FIND OUT MORE</a>
            </div>
            <div class="row-md-3">
                <a href="http://206.189.45.97/~mesh21/sub/?page_id=1530" class="btn-ghostlybook" role="button">BOOK TOUR</a>
            </div>
            <div>
            <div class="col-md-2">
                <img class="responsive" alt="Adventure Symbol" width="50" src="<?php the_field('madventuresymbol'); ?>">
            </div>
            <div class="col-md-2">
                <img class="responsive" alt="Food Symbol" width="50" src="<?php the_field('mfoodsymbol'); ?>">
            </div>
            <div class="col-md-2">
                <img class="responsive" alt="Love Symbol" width="50" src="<?php the_field('mlovesymbol'); ?>">
                </div>
            </div>
            <div class="col-md-5">
                <?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=46');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?> 
            <div><p class="price"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
            </div>
        </div>
        <div class="col-md-4">
            <img class="responsive" alt="Fremantle Prison at night" width="630" src="<?php the_field('mimage'); ?>">
        </div>
            </div>
    </section>
<?php get_footer(); ?>