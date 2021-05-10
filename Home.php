<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Easily Accessible &amp; Secure, Data Visualization, High availability infrastructure, Hosting Datacenter">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.13.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- FLICKTY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="flickity.css">
    
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "url": "index.html",
    "logo": "images/pngaaa.com-1697352.png"
}</script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body">
    <header class="u-black u-clearfix u-header u-sticky u-header" id="sec-05fe"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Home.php" data-page-id="41315128" class="u-align-left u-image u-logo u-image-1" data-image-width="952" data-image-height="952">
          <img src="images/pngaaa.com-1697352.png" class="u-logo-image u-logo-image-1" data-image-width="190">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <!--NAVIGATION BAR -->
        <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-15 u-unstyled u-nav-1">
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 25px;">Home
                </a>
              </li>
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Dashboard.php" style="padding: 10px 25px;">Dashboard
               </a>
              </li>
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Anime_list.php" style="padding: 10px 25px;">Anime List
                </a>
              <div class="u-nav-popup">
                <ul class="u-border-2 u-border-grey-80 u-custom-font u-font-lobster u-h-spacing-40 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                  <li class="u-nav-item">
                    <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white">Type
                    </a>
                    <div class="u-nav-popup">
                      <ul class="u-border-2 u-border-grey-80 u-custom-font u-font-lobster u-h-spacing-40 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                        <li class="u-nav-item">
                          <!-- Display all the type -->
                          <?php
                            require_once("Dbconnect.php");
                            $query = "SELECT type,COUNT(type) AS 'count' FROM anime GROUP BY type";
                            $result = mysqli_query($con,$query);
                            while ($row = mysqli_fetch_array($result)) {
                            
                            ?>
                          <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white" href="Anime_list_type.php?type=<?=$row['type']?>"><?=$row['type']?> (<?=$row['count']?>)
                          </a>
                        <?php } ?>
                    </li>
                  </ul>
              </div>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white">Genre
              </a>
              
              <div class="u-nav-popup">
                <ul class="u-border-2 u-border-grey-80 u-custom-font u-font-lobster u-h-spacing-40 u-nav u-unstyled u-v-spacing-10 u-nav-4" style="overflow: auto;height: 500px;">
                  <li class="u-nav-item">
                    <!--DISPLAY THE GENRE-->
                    <?php
                      require_once("Dbconnect.php");
                      $query = "SELECT * FROM genre_list";
                      $result = mysqli_query($con,$query);
                      while ($row = mysqli_fetch_array($result)) {

                      ?>
                    <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white" href="Anime_list_genre.php?genre=<?=$row['genre']?>"><?=$row['genre']?>
                    </a>
                 <?php } ?>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
    </li>
    <li class="u-nav-item">
      <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 25px;" href="Popular.php">Popular
      </a>
    </li>
  </ul>
          </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <!--END OF NAVBAR -->
      </div></header> 
    <section class="u-align-center u-black u-clearfix u-section-1" id="sec-f60b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-absolute-hcenter-xs u-expanded-height-xs u-palette-2-base u-shape u-shape-rectangle u-shape-1"></div>
        <img class="u-image u-image-1" src="images/449-4499616_fairy-tail-anime-and-gray-image-doodle-art.png" data-image-width="860" data-image-height="807">
        <div class="u-align-left u-container-style u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-palette-2-base u-text-1" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down">WATCH !</h1>
            <p class="u-text u-text-2" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">New series, classic favorites and everything in between. Start your own collection!</p>
            <a href="Home.html#sec-f968" data-page-id="41315128" class="u-active-white u-btn u-btn-round u-button-style u-palette-2-base u-radius-50 u-text-active-white u-text-white u-btn-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="X">WATCH NOW</a>
          </div>
        </div>
        <div class="u-border-6 u-border-palette-2-base u-shape u-shape-bottom u-shape-right u-shape-2"></div>
        <div class="u-border-6 u-border-palette-2-base u-shape u-shape-right u-shape-top u-shape-3"></div>
        <div class="u-border-6 u-border-palette-2-base u-shape u-shape-bottom u-shape-left u-shape-4"></div>
        <div alt="" class="u-image u-image-circle u-image-2" data-image-width="700" data-image-height="525" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"></div>
        <div alt="" class="u-image u-image-circle u-image-3" data-image-width="1920" data-image-height="1080" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""></div>
        <div alt="" class="u-image u-image-circle u-image-4" data-image-width="1200" data-image-height="630" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""></div>
        <div alt="" class="u-image u-image-circle u-image-5" data-image-width="1400" data-image-height="900" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0"></div>
        <div class="u-border-1 u-border-grey-75 u-shape u-shape-svg u-text-palette-1-base u-shape-5">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 80" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d37c"></use></svg>
          <svg class="u-svg-content" viewBox="-0.5 -0.5 161 81" x="0px" y="0px" id="svg-d37c"><path d="M34.9,0H0c0,44.3,35.7,80,80,80s80-35.7,80-80h-34.9c0,25-20.1,45.1-45.1,45.1S34.9,25,34.9,0z"></path></svg>
        </div>
        <div class="u-shape u-shape-svg u-text-palette-1-base u-shape-6" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-554b"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-554b" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
  s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
      </div>
    </section>
    <section class="u-black u-clearfix u-section-2" id="sec-9241">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-carousel u-expanded-width u-gallery u-layout-carousel u-lightbox u-no-transition u-product-zoom u-show-text-always u-gallery-1" id="carousel-a49b" data-interval="4250" data-u-ride="carousel" data-pause="false">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-a49b" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a49b" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a49b" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a49b" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a49b" data-u-slide-to="4" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-a49b" data-u-slide-to="5" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner u-gallery-inner u-gallery-inner-1" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item">
              <div class="u-back-slide" data-image-width="1920" data-image-height="1080">
                <img class="u-back-image u-expanded" src="images/anime-pokemon-5a191e1789eacc00372449e8-512c78337fbe42b2b6cd6280bb7a23f6.jpg">
              </div>
              <div class="u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item">
              <div class="u-back-slide" data-image-width="640" data-image-height="960">
                <img class="u-back-image u-expanded" src="images/MV5BNzQ1MmJjZDUtMmI5OC00ZDk2LThkODQtODgwYmU0MTIzNDhmXkEyXkFqcGdeQXVyNDgyODgxNjE._V1_.jpg">
              </div>
              <div class="u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item" data-image-width="1400" data-image-height="900">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/Tanjiro__Demon_Slayer_.0.png">
              </div>
              <div class="u-over-slide u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item" data-image-width="1200" data-image-height="630">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/flatten.png">
              </div>
              <div class="u-over-slide u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item" data-image-width="1200" data-image-height="674">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/phpT5ZiOo.jpg">
              </div>
              <div class="u-over-slide u-over-slide-5">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item" data-image-width="800" data-image-height="450">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/lelouchdecember.jpg">
              </div>
              <div class="u-over-slide u-over-slide-6">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-a49b" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-a49b" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-black u-clearfix u-lightbox u-section-3" id="sec-f968">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-custom-font u-font-arial u-text u-text-1">FILMS </h4>
        <a href="Anime_list.php" class="u-btn u-button-style u-none u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Explore all &gt;</a>
        <h3 class="u-custom-font u-font-lobster u-text u-text-2">Anime </h3>
        <div class="carousel"
           data-flickity='{ "contain": true }' style="background-color: black;">
           <?php
            require_once("Dbconnect.php");
            $query = "SELECT * FROM anime LIMIT 10";
            $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)) {
              
            ?>
           <div class="carousel-cell">
              <a href="Anime_display.php?anime_id=<?=$row['anime_id']?>"><img src="<?=$row['image']?>" style = "padding: 10px;height: 400px;width: 300px;border-radius: 30px;"><center><h6><?=$row['name']?><br>Type: <?=$row['type']?><br>Episodes: <?=$row['episodes']?> </h6></center></a>
          </div>
         <?php } ?>
        </div>
        <br><br>
        <a href="Anime_list_type.php?type=Movie" class="u-btn u-button-style u-none u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Explore all &gt;</a>
        <h3 class="u-custom-font u-font-lobster u-text u-text-2">Movie</h3>
        <div class="carousel"
           data-flickity='{ "contain": true }' style="background-color: black;">
           <?php
            require_once("Dbconnect.php");
            $query = "SELECT * FROM anime WHERE type LIKE '%Movie%' ORDER BY rating ASC LIMIT 10";
            $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)) {
              
            ?>
           <div class="carousel-cell">
              <a href="Anime_display.php?anime_id=<?=$row['anime_id']?>"><img src="<?=$row['image']?>" style = "padding: 10px;height: 400px;width: 300px;border-radius: 30px;"><center><h6><?=$row['name']?><br>Type: <?=$row['type']?><br>Episodes: <?=$row['episodes']?> </h6></center></a>
          </div>
         <?php } ?>
        </div>
        <br><br>
        <a href="Anime_list_type.php?type=Music" class="u-btn u-button-style u-none u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Explore all &gt;</a>
        <h3 class="u-custom-font u-font-lobster u-text u-text-2">Music</h3>
        <div class="carousel"
           data-flickity='{ "contain": true }' style="background-color: black;">
           <?php
            require_once("Dbconnect.php");
            $query = "SELECT * FROM anime WHERE type LIKE '%Music%' ORDER BY rating LIMIT 10";
            $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)) {
              
            ?>
           <div class="carousel-cell">
              <a href="Anime_display.php?anime_id=<?=$row['anime_id']?>"><img src="<?=$row['image']?>" style = "padding: 10px;height: 400px;width: 300px;border-radius: 30px;"><center><h6><?=$row['name']?><br>Type: <?=$row['type']?><br>Episodes: <?=$row['episodes']?> </h6></center></a>
          </div>
         <?php } ?>
        </div>
        <br><br>
        <a href="Anime_list_type.php?type=ONA" class="u-btn u-button-style u-none u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Explore all &gt;</a>
        <h3 class="u-custom-font u-font-lobster u-text u-text-2">ONA</h3>
        <div class="carousel"
           data-flickity='{ "contain": true }' style="background-color: black;">
           <?php
            require_once("Dbconnect.php");
            $query = "SELECT * FROM anime WHERE type LIKE '%ONA%' LIMIT 10";
            $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)) {
              
            ?>
           <div class="carousel-cell">
              <a href="Anime_display.php?anime_id=<?=$row['anime_id']?>"><img src="<?=$row['image']?>" style = "padding: 10px;height: 400px;width: 300px;border-radius: 30px;"><center><h6><?=$row['name']?><br>Type: <?=$row['type']?><br>Episodes: <?=$row['episodes']?> </h6></center></a>
          </div>
         <?php } ?>
        </div>
        <br><br>
        <a href="Anime_list_type.php?type=OVA" class="u-btn u-button-style u-none u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Explore all &gt;</a>
        <h3 class="u-custom-font u-font-lobster u-text u-text-2">OVA</h3>
        <div class="carousel"
           data-flickity='{ "contain": true }' style="background-color: black;">
           <?php
            require_once("Dbconnect.php");
            $query = "SELECT * FROM anime WHERE type LIKE '%OVA%' ORDER BY rating LIMIT 10";
            $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)) {
              
            ?>
           <div class="carousel-cell">
              <a href="Anime_display.php?anime_id=<?=$row['anime_id']?>"><img src="<?=$row['image']?>" style = "padding: 10px;height: 400px;width: 300px;border-radius: 30px;"><center><h6><?=$row['name']?><br>Type: <?=$row['type']?><br>Episodes: <?=$row['episodes']?> </h6></center></a>
          </div>
         <?php } ?>
        </div>
        <br><br>
         <a href="Anime_list_type.php?type=Special" class="u-btn u-button-style u-none u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Explore all &gt;</a>
        <h3 class="u-custom-font u-font-lobster u-text u-text-2">Special</h3>
        <div class="carousel"
           data-flickity='{ "contain": true }' style="background-color: black;">
           <?php
            require_once("Dbconnect.php");
            $query = "SELECT * FROM anime WHERE type LIKE '%Special%' LIMIT 10";
            $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)) {
              
            ?>
           <div class="carousel-cell">
              <a href="Anime_display.php?anime_id=<?=$row['anime_id']?>"><img src="<?=$row['image']?>" style = "padding: 10px;height: 400px;width: 300px;border-radius: 30px;"><center><h6><?=$row['name']?><br>Type: <?=$row['type']?><br>Episodes: <?=$row['episodes']?> </h6></center></a>
          </div>
         <?php } ?>
        </div>
        <br><br>
         <a href="Anime_list_type.php?type=TV" class="u-btn u-button-style u-none u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Explore all &gt;</a>
        <h3 class="u-custom-font u-font-lobster u-text u-text-2">TV</h3>
        <div class="carousel"
           data-flickity='{ "contain": true }' style="background-color: black;">
           <?php
            require_once("Dbconnect.php");
            $query = "SELECT * FROM anime WHERE type LIKE '%TV%' LIMIT 10";
            $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)) {
              
            ?>
           <div class="carousel-cell">
              <a href="Anime_display.php?anime_id=<?=$row['anime_id']?>"><img src="<?=$row['image']?>" style = "padding: 10px;height: 400px;width: 300px;border-radius: 30px;"><center><h6><?=$row['name']?><br>Type: <?=$row['type']?><br>Episodes: <?=$row['episodes']?> </h6></center></a>
          </div>
         <?php } ?>
        </div>

        <br><br><br>

    </section>
    <section class="u-clearfix u-grey-80 u-section-4" id="sec-242b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h5 class="u-text u-text-1">A - Z List</h5>
        <h5 class="u-text u-text-2">|</h5>
        <h5 class="u-text u-text-3">Searching anime order by alphabet name A to Z.</h5>
        <a href="Anime_list_order.php?name=A" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-1">A</a>
        <a href="Anime_list_order.php?name=B" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-2">B</a>
        <a href="Anime_list_order.php?name=C" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-3">C</a>
        <a href="Anime_list_order.php?name=D" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-4">D</a>
        <a href="Anime_list_order.php?name=E" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-5">E</a>
        <a href="Anime_list_order.php?name=F" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-6">F</a>
        <a href="Anime_list_order.php?name=G" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-7">G</a>
        <a href="Anime_list_order.php?name=H" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-8">H</a>
        <a href="Anime_list_order.php?name=I" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-9">I</a>
        <a href="Anime_list_order.php?name=J" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-10">J</a>
        <a href="Anime_list_order.php?name=K" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-11">K</a>
        <a href="Anime_list_order.php?name=L" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-12">L</a>
        <a href="Anime_list_order.php?name=M" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-13">M</a>
        <a href="Anime_list_order.php?name=N" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-14">N</a>
        <a href="Anime_list_order.php?name=O" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-15">O</a>
        <a href="Anime_list_order.php?name=P" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-16">P</a>
        <a href="Anime_list_order.php?name=Q" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-17">Q</a>
        <div alt="" class="u-image u-image-circle u-1" data-image-width="840" data-image-height="859"></div>
        <a href="Anime_list_order.php?name=R" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-18">R</a>
          <div alt="" class="u-image u-image-circle u-image-1" data-image-width="840" data-image-height="859"></div>
        <a href="Anime_list_order.php?name=S" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-20">S</a>
        <a href="Anime_list_order.php?name=T" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-21">T</a>
        <a href="Anime_list_order.php?name=U" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-22">U</a>
        <a href="Anime_list_order.php?name=V" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-23">V</a>
        <a href="Anime_list_order.php?name=W" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-24">W</a>
        <a href="Anime_list_order.php?name=X" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-25">X</a>
        <a href="Anime_list_order.php?name=Y" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-26">Y</a>
        <a href="Anime_list_order.php?name=Z" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-27">Z</a>
      </div>
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-e3f5"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Home.php" data-page-id="41315128" class="u-image u-logo u-image-1" data-image-width="952" data-image-height="952" title="Home">
          <img src="images/pngaaa.com-1697352.png" class="u-logo-image u-logo-image-1" data-image-width="122.5">
        </a>
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">Copyright © Anime.PTE.LTD. All Rights Reserved<br>Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.<br>
          <a href="https://twitter.com/9animeOfficial" target="_blank" rel="nofollow" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"><i></i>
          </a>
        </p>
      </div></footer>
    <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 80px; bottom: 45px;" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base u-spacing-10" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98" data-color="rgb(255, 255, 255)"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  </body>
</html>