<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid whybg">
    <div class="row">
        <div class="col-md-6 img-fluid janeimage">
            <img src="images/Jane_Bree_Founder.png" alt="Jane Bree, Founder of Flipside Tours in Fremantle" width=400>
        </div>
        <div class="container col-md-3 whytext">
            <h2 class="whyheader"> WHY FLIPSIDE </h2>
            <p> Since our humble beginnings we’ve been leading tourists on tours of arty neighbourhoods, street art, food and ghosts throughout Fremantle. We understand the complexities in our communities, work to find our place in it, and utilize our team’s diversity to continuously shape <span class=whyorange>the tours to best tell the story of Fremantle.</span></p>
            <a href="ourtours.html" class="btn-orange" role="button">FIND THE TOUR FOR YOU</a>
        </div><!-- container-->
    </div>
</section>

<section class="container-fluid toursbg">
    <div class="container text-right">
        <h3 class="tourheading">OUR TOURS</h3>
    </div>
    <div class="container ghostly">
        <div class="container col-sm-2">
            <img class="tourimg" src=images/prisontour.jpg alt="Prison Tour" height=200>
        </div>
        <div class="container col-sm-7 ghostly-text">
            <h3 class="ghostlytitle"> GHOSTLY TOURS </h3>
            <p> An immersive, hands-on paranormal ghostly tour, where you’ll hunt for real ghosts in known haunted places around Fremantle.</p>
            <a href="ghostlytours.html" class="btn btn-tours" role="button">FIND OUT MORE</a>
        </div>
        <div class="container col-sm-3 ghostly-price">
            <p> $59</p>
        </div>
    </div><!-- ghostly tours-->


    <div class="container evening">
        <div class="container col-sm-2 evening-image">
            <img class="tourimg" src=images/eveningfood.jpg alt="Prison Tour" height=200>
        </div>
        <div class="container col-sm-7 evening-text">
            <h3 class="eveningtitle"> EVENING FOOD </h3>
            <p> An exciting stroll through our beautiful city filled with delicious food and drinks that locals crave for in the late afternoon/early evening.</p>
            <button type="button" class="btn btn-tours">FIND OUT MORE</button>
        </div>
        <div class="container col-sm-3 evening-price">
            <p> $79</p>
        </div>
    </div><!-- evening food-->


    <div class="container market">
        <div class="container col-sm-2">
            <img class="tourimg" src=images/prisontour.jpg alt="Prison Tour" height=200>
        </div>
        <div class="container col-sm-7 market-text">
            <h3 class="markettitle"> MARKET TOUR </h3>
            <p> Explore and support the local traders and musicians down at the markets and immerse yourself in the culture of Fremantle. </p>
            <button type="button" class="btn btn-tours">FIND OUT MORE</button>
        </div>
        <div class="container col-sm-3 market-price">
            <p> $35</p>
        </div>
    </div><!-- markettours-->
</section>


<div class="container-fluid">
    <div class="container">
        <p class="explore1"> LIKE WHAT YOU SEE? BOOK NOW TO GET STARTED ON YOUR OWN </p>
        <p class="explore2">FREMANTLE FLIPSIDE JOURNEY</p>
        <div class="text-center">
            <button type="button" class="btn btn-explore">BOOK NOW</button>
        </div>
        <div class="container exploreimgs text-center">
            <div class="col-md-6 exploreimg1">
                <img src=images/explore1.png alt="Prison Tour" height="500">
            </div>
            <div class="col-md-6 explorimg2">
                <img src=images/explore2.jpg alt="Prison Tour" height="500">
            </div>
        </div>
    </div><!-- container-->
</div>

<div class="container-fluid instasec">
    <div class="container instatop">
        <div class="col-md-2">
            <img src="images/instalogo.png" alt="Instagram Logo" height="100">
        </div>
        <div class="container instatext">
            <a class="instalink" href="http://instagram.com">@FLIPSIDE</a>
            <p>Find us on Instagram and get lost in the many photos available of the tours.</p>
        </div>
        <div class="row instafeed">
            <div class="column">
                <img src="images/instaimg1.jpg" alt="Snow" style="width:100%">
            </div>
            <div class="column">
                <img src="images/instaimg2.jpg" alt="Snow" style="width:100%">
            </div>
            <div class="column">
                <img src="images/instaimg3.jpg" alt="Snow" style="width:100%">
            </div>
            <div class="column">
                <img src="images/instaimg4.jpg" alt="Snow" style="width:100%">
            </div>
        </div>
    </div>
</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>