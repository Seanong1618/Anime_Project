<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Easily Accessible &amp; Secure, Data Visualization, High availability infrastructure, Hosting Datacenter">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Dashboard</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.13.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    <!--Chart.js-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <!---->
    <!--Live Time Counter-->
    <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 1000);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<!---->    
    
    
    
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
  <body class="u-body" onload="startTime()"><header class="u-black u-clearfix u-header u-sticky u-header" id="sec-05fe"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Home.html" data-page-id="41315128" class="u-align-left u-image u-logo u-image-1" data-image-width="952" data-image-height="952">
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
                          <!-- Display all the type -->
                          <?php
                            require_once("Dbconnect.php");
                            $query = "SELECT type,COUNT(type) AS 'count' FROM anime GROUP BY type";
                            $type = array();
                            $count = array();
                            $result = mysqli_query($con,$query);
                            while ($row = mysqli_fetch_array($result)) {
                              $type[] = $row['type'];
                              $count[] = $row['count']; 
                            }
                            ?>
                          <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white" href="Anime_list_type.php?type=<?php echo $type[1]?>"><?php echo $type[1]; ?> (<?php echo $count[1]; ?> )
                          </a>
                          <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white" href="Anime_list_type.php?type=<?php echo $type[2]?>"><?php echo $type[2]; ?> (<?php echo $count[2]; ?> )
                          </a>
                          <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white" href="Anime_list_type.php?type=<?php echo $type[3]?>"><?php echo $type[3]; ?> (<?php echo $count[3]; ?> )
                          </a>
                          <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white" href="Anime_list_type.php?type=<?php echo $type[4]?>"><?php echo $type[4]; ?> (<?php echo $count[4]; ?> )
                          </a>
                          <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white" href="Anime_list_type.php?type=<?php echo $type[5]?>"><?php echo $type[5]; ?> (<?php echo $count[5]; ?> )
                          </a>
                          <a class="u-button-style u-grey-50 u-hover-palette-1-light-1 u-nav-link u-text-hover-grey-10 u-text-white" href="Anime_list_type.php?type=<?php echo $type[6]?>"><?php echo $type[6]; ?> (<?php echo $count[6]; ?> )
                          </a>
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
        <!--END OF NAVBAR --></header> 
      <section class="u-black u-clearfix u-lightbox u-section-3" id="sec-f968">
        <div class="u-clearfix u-sheet u-sheet-1">
          <!--CODE HERE!!!-->
          <div class="container-fluid">
            <br>
           <div id="txt" style="background-image: linear-gradient(red, yellow);color: white;text-align: center;padding: 10px;font-family: fantasy;font-weight: bold;font-size: 50px;border-radius: 10px;vertical-align: middle;"></div>
          </div>
          <br>
          <div style="display: flex; padding: 10px;margin-left: 100px">
            <a href="Anime_list.php" style="text-decoration: none;color: white"><div style="height: 150px;width: 300px;padding: 10px;background: linear-gradient(to right, #ff0000 0%, #ffff66 100%);border-radius: 10px;">
            <?php 
              require_once("Dbconnect.php");
              $query = "SELECT COUNT(*) as 'count' FROM anime";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)) {
                
             ?>
            <h3 style="font-family: cursive;margin-left: 20px"><?=$row['count']?></h3>
          <?php } ?>
            <h4 style="font-family: cursive;margin-left: 20px">Total Anime </h4>
          </div>
        </a>
          <div style="height: 150px;width: 300px;padding: 10px;background: linear-gradient(to right, #ff0000 0%, #ffff66 100%);border-radius: 10px;margin-left: 10px">
            <h3 style="font-family: cursive;margin-left: 20px">6</h3>
            <h4 style="font-family: cursive;margin-left: 20px">Anime Type </h4>
          </div>
          <div style="height: 150px;width: 300px;padding: 10px;background: linear-gradient(to right, #ff0000 0%, #ffff66 100%);border-radius: 10px;margin-left: 10px">
            <h3 style="font-family: cursive;margin-left: 20px">41</h3>
            <h4 style="font-family: cursive;margin-left: 20px">Anime Genre </h4>
          </div>
      </div>
      <!--CHART # 1 -->
      <div style="padding: 20px">
        <div style="width: 50%;">
          <br>
            <div style="display: flex; background-color: white;border-radius: 10px">
              <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
              <script>
                <?php 
                  require_once("Dbconnect.php");
                  $query = "SELECT type, (Count(type)* 100 / (SELECT Count(*) FROM anime)) AS anime_distribution FROM anime GROUP BY type";
                  $type = array();
                  $anime_distribution = array();
                  $result = mysqli_query($con,$query);
                  while ($row = mysqli_fetch_array($result)) {
                    $type[] = $row['type'];
                    $anime_distribution[] = $row['anime_distribution'];
                  }
                ?>
                var xValues = ["<?php echo $type[1];?>","<?php echo $type[2];?>","<?php echo $type[3];?>","<?php echo $type[4]?>","<?php echo $type[5];?>","<?php echo $type[6];?>"];
                var yValues = [<?php echo $anime_distribution[1];?>,<?php echo $anime_distribution[2];?>,<?php echo $anime_distribution[3];?>,<?php echo $anime_distribution[4];?>,<?php echo $anime_distribution[5];?>,<?php echo $anime_distribution[6];?>];
                var barColors = ["red", "green","blue","orange","brown","violet"];

                new Chart("myChart", {
                  type: "bar",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Anime Distribution based on TYPE"
                    }
                  }
                  });
            </script>
            <canvas id="chart1" style="width:100%;max-width:600px;background-color: white;margin-left: 10px;border-radius: 10px;"></canvas>
              <script>
                <?php 
                  require_once("Dbconnect.php");
                  $query = "SELECT name, members FROM `anime` ORDER BY members DESC LIMIT 10";
                  $name = array();
                  $members = array();
                  $result = mysqli_query($con,$query);
                  while ($row = mysqli_fetch_array($result)) {
                    $name[] = $row['name'];
                    $members[] = $row['members'];
                  }
                ?>
                var xValues = ["<?php echo $name[0];?>","<?php echo $name[1];?>","<?php echo $name[2];?>","<?php echo $name[3];?>","<?php echo $name[4];?>","<?php echo $name[5];?>","<?php echo $name[6];?>","<?php echo $name[7];?>","<?php echo $name[8];?>","<?php echo $name[9];?>"];
                var yValues = [<?php echo $members[0];?>,<?php echo $members[1];?>,<?php echo $members[2];?>,<?php echo $members[3];?>,<?php echo $members[4];?>,<?php echo $members[5];?>,<?php echo $members[6];?>,<?php echo $members[7];?>,<?php echo $members[8];?>,<?php echo $members[9];?>];
                var barColors = ["red", "green","blue","orange","brown","black","grey","aqua","aquamarine","violet"];

                new Chart("chart1", {
                  type: "doughnut",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    legend: {display: true},
                    title: {
                      display: true,
                      text: "Top 10 Anime by the number of MEMBERS"
                    }
                  }
                  });
            </script>
            </div>
            <br>
            <div style="width: 1110px;">
              <canvas id="chart2" style="background-color: white;border-radius: 10px;"></canvas>
            <br>
              <script>
                <?php 
                  require_once("Dbconnect.php");
                  $query = "SELECT name, rating FROM `anime` ORDER BY rating DESC LIMIT 10";
                  $name = array();
                  $ratings = array();
                  $result = mysqli_query($con,$query);
                  while ($row = mysqli_fetch_array($result)) {
                    $name[] = $row['name'];
                    $ratings[] = $row['rating'];
                  }
                ?>
                var xValues = ["<?php echo $name[0];?>","<?php echo $name[1];?>","<?php echo $name[2];?>","<?php echo $name[3];?>","<?php echo $name[4];?>","<?php echo $name[5];?>","<?php echo $name[6];?>","<?php echo $name[7];?>","<?php echo $name[8];?>","<?php echo $name[9];?>"];
                var yValues = [<?php echo $ratings[0];?>,<?php echo $ratings[1];?>,<?php echo $ratings[2];?>,<?php echo $ratings[3];?>,<?php echo $ratings[4];?>,<?php echo $ratings[5];?>,<?php echo $ratings[6];?>,<?php echo $ratings[7];?>,<?php echo $ratings[8];?>,<?php echo $ratings[9];?>];
                var barColors = ["red", "green","blue","orange","brown","black","grey","aqua","aquamarine","violet"];

                new Chart("chart2", {
                  type: "bar",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Top 10 Anime based on the Rating"
                    }
                  }
                  });
            </script>
            </div>
            <div style="display: flex;">
             <canvas id="chart3" style="background-color: white;border-radius: 10px;"></canvas>
            <br>
              <script>
                <?php 
                  require_once("Dbconnect.php");
                  $query = "SELECT type,AVG(rating) AS 'Average' FROM anime GROUP BY type";
                  $type = array();
                  $Average = array();
                  $result = mysqli_query($con,$query);
                  while ($row = mysqli_fetch_array($result)) {
                    $type[] = $row['type'];
                    $Average[] = $row['Average'];
                  }
                ?>
                var xValues = ["<?php echo $type[1];?>","<?php echo $type[2];?>","<?php echo $type[3];?>","<?php echo $type[4];?>","<?php echo $type[5];?>","<?php echo $type[6];?>"];
                var yValues = [<?php echo $Average[1];?>,<?php echo $Average[2];?>,<?php echo $Average[3];?>,<?php echo $Average[4];?>,<?php echo $Average[5];?>,<?php echo $Average[6];?>];
                var barColors = ["red", "green","blue","orange","brown","violet"];

                new Chart("chart3", {
                  type: "pie",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                    }]
                  },
                  options: {
                    legend: {display: true},
                    title: {
                      display: true,
                      text: "Top 10 Anime based on the Type"
                    }
                  }
                  });
            </script>
             
            </div>
        </div>
      <!---->
        </div>
      </div>
      </section>
      <!--FOOTER-->
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
        <a href="Home.html" data-page-id="41315128" class="u-image u-logo u-image-1" data-image-width="952" data-image-height="952" title="Home">
          <img src="images/pngaaa.com-1697352.png" class="u-logo-image u-logo-image-1" data-image-width="122.5">
        </a>
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">Copyright ?? Anime.PTE.LTD. All Rights Reserved<br>Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.<br>
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

