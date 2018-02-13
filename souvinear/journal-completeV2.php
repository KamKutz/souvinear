<?php require_once 'includes/initialize.php'; ?>
<?php require_once 'includes/session.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <!-- What it tries to add as homepage app name -->
  	<title>Journal Entry Souvinear</title>
  	<!-- META -->
  	<meta charset="utf-8">
  	<!-- Enabling our application to be able to work mobiley -->
  	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width, maximum-scale=1.0">
  	<meta name="apple-mobile-web-app-capable" content="yes">
  	<meta name="apple-mobile-web-app-status-bar-style" content="black">

  	<!-- Make the app title different from the web page title -->
  	<meta name="apple-mobile-web-app-title" content="myReel">

  	<!-- Disable auto phone number detection -->
  	<meta name="format-detection" content="telephone=no">

  	<!-- CSS -->
  	<link rel="stylesheet" href="css/normalize.css">
  	<!-- Add2Home Styling -->
  	<link rel="stylesheet" href="css/css-add2home.css">
  	<link rel="stylesheet" href="css/main.css">

  	<!-- ICONS -->
  	<!-- iPad retina icon -->
  	<link href="graphics/souvinear_icon-152x152.png" sizes="152x152" rel="apple-touch-icon">
  	<!-- iPad retina icon (iOS < 7) -->
  	<link href="graphics/myreel_icon-144x144.png" sizes="144x144" rel="apple-touch-icon">
  	<!-- iPad non-retina icon -->
  	<link href="graphics/myreel_icon-76x76.png" sizes="76x76" rel="apple-touch-icon">
  	<!-- iPad non-retina icon (iOS < 7) -->
  	<link href="graphics/myreel_icon-72x72.png" sizes="72x72" rel="apple-touch-icon">

  	<!-- iPhone 6 Plus icon -->
  	<link href="graphics/myreel_icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
  	<!-- iPhone retina icon (iOS < 7) -->
  	<link href="graphics/myreel_icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
  	<!-- iPhone non-retina icon (iOS < 7) -->
  	<link href="graphics/myreel_icon-57x57.png" sizes="57x57" rel="apple-touch-icon">

  	<!-- HACKS -->
  	<!-- Prevent text size change on orientation change -->
  	<style>
  		html {
  			-webkit-text-size-adjust: 100%;
  		}
  	</style>

  </head>
  <body>

<div class="nav">
    <img id="arrow_tog" class="arrow" src="graphics/arrow.svg" alt="Arrow">
    <div class="nav_contain">
        <div onclick="jmp2LocalPage('')">
            <img src="graphics/hotspot-purple.svg" alt="Hotspot Icon">
            <h3>Hotspots</h3>
        </div>
        <div onclick="jmp2LocalPage('')">
            <img src="graphics/journal-purple.svg" alt="Journal Icon">
            <h3>Journal</h3>
        </div>
        <div onclick="jmp2LocalPage('')">
            <img src="graphics/mailbox-purple.svg" alt="Swapbox Icon">
            <h3>Swapbox</h3>
        </div>
        <div onclick="jmp2LocalPage('')">
            <img src="graphics/settings-purple.svg" alt="Settings Icon">
            <h3>Settings</h3>
        </div>
    </div>

    <svg  id="nav_button" class="pull_down" xmlns="http://www.w3.org/2000/svg" viewBox="2038 -979 377 648.328">

        <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="0.977" gradientUnits="objectBoundingBox">
          <stop offset="0" stop-color="#fe5893"/>
          <stop offset="0.27" stop-color="#d3729f"/>
          <stop offset="0.553" stop-color="#b59eb8"/>
          <stop offset="0.712" stop-color="#9dc1cc"/>
          <stop offset="1" stop-color="#24d9ce"/>
        </linearGradient>
        <linearGradient id="linear-gradient-2" x1="0.5" y1="0.259" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
          <stop offset="0" stop-color="#24d9ce"/>
          <stop offset="1" stop-color="#33d9d0"/>
        </linearGradient>
        <linearGradient id="linear-gradient-3" y1="0.539" x2="0.94" y2="0.539" gradientUnits="objectBoundingBox">
          <stop offset="0" stop-color="#fff" stop-opacity="0.545"/>
          <stop offset="1" stop-color="#fff" stop-opacity="0.749"/>
        </linearGradient>
      <g id="Group_493" data-name="Group 493" transform="translate(2039 -969)">
        <g id="Group" transform="translate(-140 -10)">
          <g id="Group-Copy" transform="translate(141)">
            <path id="Rectangle-12-Copy" class="cls-1_1" d="M0,0H375l-.889,573.718h-375Z"/>
          </g>
        </g>
        <g id="Group_492" data-name="Group 492" transform="translate(-141 -10)">
          <path id="Rectangle-5-Copy-2" class="cls-2_2" d="M376-1.957V-75.624H1v59.459c18.589-1.163,38-10.4,82.259-14.283A468.5,468.5,0,0,1,251.1-14.6C290.315-3.54,363.268,1.613,376-1.957Z" transform="translate(140 649)"/>
          <path id="Rectangle-4" class="cls-3_3" d="M376-14.705c-20.245,3.472-51.254,3.672-80.908,0C222.571-23.684,217.625-31.8,187.5-37.06,120.923-48.7,84.61-39.793,49.154-42.54,25.516-44.37,8.465-46.357,0-51.5Q0-22.652,0-16.152C20.422-17.543,32.471-23.381,52.5-26.5s62.545-6.978,89.567-5.393c22.213,1.3,43.778,2.088,90.956,12.7,20.208,4.544,46.344,13.037,98.266,17.321q29.134,2.4,44.711,0Z" transform="translate(140 649)"/>
        </g>
      </g>
    </svg>
</div>

<?php

    if (isset($_POST['submit'])) {
    // form was submitted
    $concert_date = $_POST['concert_date'];
    $headliner = $_POST['headliner'];
    
    $user_id = $_SESSION['user'];
    
     $query = "SELECT * FROM concert_info WHERE concert_date = '{$concert_date}' AND headliner = '{$headliner}' AND user_id = '{$user_id}' ";

     $result = mysqli_query($connection, $query);

     if (!$result){ 
         die('Database query failed.');
     }

         while ($row = mysqli_fetch_assoc($result)) {
             
             ?>      

<div class="entry_wrap">
  <div class="info_wrap">
    <h1 class="headliner"><?php echo $row['headliner']; ?></h1>
    <h2 class="opener"><?php echo $row['supporting_act']; ?></h2>
    <h3 class="event"><?php echo $row['concert_time']; ?></h3>
    <h4 class="location"><?php echo $row['venue']; ?></h4>
    <h4 class="date"><?php echo $row['concert_date']; ?></h4>
  </div>


<div id="polaroid_wrap"> 
  <img src="graphics/test-photo.png" alt="">
  <p class="polaroid_caption">Legendary.</p>
</div>

<!--
<div id="fixed_edit">
  <p>want to edit this entry? </p>

</div>
-->

<div id="text_wrap">
  <p><?php echo $row['entry']; ?></p>
</div>

<div id="collected_wrap">
  <h3 class="collected">collected songs</h3>
  <div id="collected_song">
    <img src="graphics/album1.png" alt="">
    <h3 class="song_title">Congratulations</h3>
    <h4 class="artist">Post Malone</h4>
  </div>
  <div id="collected_song">
    <img src="graphics/album2.png" alt="">
      <h3 class="song_title">Eden</h3>
      <h4 class="artist">Hozier</h4>
  </div>
</div>
  <h3 class="badges">badges</h3>
<div id="badges_wrap">
  <svg width="77px" height="97px" viewBox="0 0 77 97" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">    <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
      <defs>
          <path d="M26.6002928,0.306876406 C27.3133117,0.0860750894 28.1041996,0 28.9438731,0 C32.0182977,0 35.7344392,1.1638849 38.6146599,1.1638849 C42.2163431,1.1638849 46.4925797,-0.688600715 49.7687135,0.306876406 C53.5570951,1.45859853 56.2768866,6.18243685 59.4085403,8.44752154 C62.5045431,10.6854739 66.9899944,10.899726 69.2191163,13.9993648 C71.2971909,16.8875583 71.1836708,22.6115517 72.3188718,26.0592333 C73.4625165,29.5331116 76.6560903,32.4128847 76.6560903,36.2703586 C76.6560903,39.8331188 73.5544584,44.1059985 72.5721812,47.3497195 C71.5026529,50.872249 71.2643545,55.247109 69.2191163,58.2120216 C67.0106344,61.4117695 62.5261213,62.1658621 59.4085403,64.4870827 C56.4626468,66.6801263 54.1800484,71.2720452 50.6271507,72.4742897 C47.0517366,73.6830833 42.312976,71.6182168 38.327576,71.6182168 C34.3112161,71.6182168 29.0555169,73.7008597 25.4566482,72.4742897 C21.8605941,71.2477196 20.2047017,67.5680096 17.2334772,65.3272504 C14.2219109,63.0537454 9.01781169,61.3116604 6.86562068,58.2120216 C4.79598974,55.2312038 5.74073967,50.919029 4.6627678,47.3703027 C3.67673783,44.1209681 0,40.4580988 0,36.8887894 C0,32.841389 3.82778524,29.1672925 5.08307363,25.5455896 C6.31866019,21.9809581 5.76700879,16.657401 8.00926533,13.7140072 C10.2702855,10.7453522 15.2323336,9.85279094 18.30582,7.72336807 C21.2413935,5.69031189 23.1121297,1.38655742 26.6002928,0.306876406 Z M19.1426789,37.8346798 C19.1426789,48.5594488 27.859334,57.2530328 38.6146599,57.2530328 C49.3690477,57.2530328 58.086641,48.5594488 58.086641,37.8346798 C58.086641,27.1089752 49.3690477,18.4153911 38.6146599,18.4153911 C27.859334,18.4153911 19.1426789,27.1089752 19.1426789,37.8346798 Z" id="path-1"></path>
          <path d="M56.1840065,0.000935598797 C56.1821302,0.000935598797 56.1793156,0.00187119759 56.1774392,0.00187119759 C54.5309287,0.709183889 52.8562726,1.4005914 51.440555,2.35958017 C48.2019485,4.55262375 45.6932481,9.14641384 41.78947,10.3477227 C37.8594229,11.5555807 32.651571,9.4916498 28.2721343,9.4916498 C23.8579849,9.4916498 18.0834707,11.5742927 14.1262162,10.3477227 C10.1736527,9.12115268 8.35451655,5.44144261 5.08870273,3.20068349 C4.08015637,2.50834038 2.84832254,1.8646484 1.55550684,1.21721404 C0.677367878,0.7784182 0.609818726,27.1548195 2.18127467,28.2953144 C6.96600622,31.7691928 22.8644495,18.1253555 28.8472403,18.0271176 C32.2021815,17.9709817 36.3433197,20.7122862 40.6401963,23.4526551 C45.9859611,26.8629127 51.5719006,30.2731703 56.1774392,28.2953144 C57.5002768,27.727406 56.7243997,0.00187119759 56.1840065,0.000935598797 Z" id="path-3"></path>
      </defs>
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Artboard" transform="translate(-368.000000, -29.000000)">
              <g id="Page-1-Copy" transform="translate(368.000000, 29.000000)">
                  <g id="Group-3">
                      <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                      </mask>
                      <g id="Clip-2"></g>
                      <polygon id="Fill-1" fill="#381345" mask="url(#mask-2)" points="-9.38182656 82.2166799 86.0379168 82.2166799 86.0379168 -9.35598798 -9.38182656 -9.35598798"></polygon>
                  </g>
                  <g id="Group-6" transform="translate(10.000000, 68.000000)">
                      <mask id="mask-4" fill="white">
                          <use xlink:href="#path-3"></use>
                      </mask>
                      <g id="Clip-5"></g>
                      <polygon id="Fill-4" fill="#381345" mask="url(#mask-4)" points="-8.4436439 38.2341805 66.2891719 38.2341805 66.2891719 -9.35598798 -8.4436439 -9.35598798"></polygon>
                  </g>
              </g>
          </g>
      </g>
  </svg>
  
<svg width="77px" height="97px" viewBox="0 0 77 97" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">    <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
    <defs>
        <path d="M26.6002928,0.306876406 C27.3133117,0.0860750894 28.1041996,0 28.9438731,0 C32.0182977,0 35.7344392,1.1638849 38.6146599,1.1638849 C42.2163431,1.1638849 46.4925797,-0.688600715 49.7687135,0.306876406 C53.5570951,1.45859853 56.2768866,6.18243685 59.4085403,8.44752154 C62.5045431,10.6854739 66.9899944,10.899726 69.2191163,13.9993648 C71.2971909,16.8875583 71.1836708,22.6115517 72.3188718,26.0592333 C73.4625165,29.5331116 76.6560903,32.4128847 76.6560903,36.2703586 C76.6560903,39.8331188 73.5544584,44.1059985 72.5721812,47.3497195 C71.5026529,50.872249 71.2643545,55.247109 69.2191163,58.2120216 C67.0106344,61.4117695 62.5261213,62.1658621 59.4085403,64.4870827 C56.4626468,66.6801263 54.1800484,71.2720452 50.6271507,72.4742897 C47.0517366,73.6830833 42.312976,71.6182168 38.327576,71.6182168 C34.3112161,71.6182168 29.0555169,73.7008597 25.4566482,72.4742897 C21.8605941,71.2477196 20.2047017,67.5680096 17.2334772,65.3272504 C14.2219109,63.0537454 9.01781169,61.3116604 6.86562068,58.2120216 C4.79598974,55.2312038 5.74073967,50.919029 4.6627678,47.3703027 C3.67673783,44.1209681 0,40.4580988 0,36.8887894 C0,32.841389 3.82778524,29.1672925 5.08307363,25.5455896 C6.31866019,21.9809581 5.76700879,16.657401 8.00926533,13.7140072 C10.2702855,10.7453522 15.2323336,9.85279094 18.30582,7.72336807 C21.2413935,5.69031189 23.1121297,1.38655742 26.6002928,0.306876406 Z M19.1426789,37.8346798 C19.1426789,48.5594488 27.859334,57.2530328 38.6146599,57.2530328 C49.3690477,57.2530328 58.086641,48.5594488 58.086641,37.8346798 C58.086641,27.1089752 49.3690477,18.4153911 38.6146599,18.4153911 C27.859334,18.4153911 19.1426789,27.1089752 19.1426789,37.8346798 Z" id="path-1"></path>
        <path d="M56.1840065,0.000935598797 C56.1821302,0.000935598797 56.1793156,0.00187119759 56.1774392,0.00187119759 C54.5309287,0.709183889 52.8562726,1.4005914 51.440555,2.35958017 C48.2019485,4.55262375 45.6932481,9.14641384 41.78947,10.3477227 C37.8594229,11.5555807 32.651571,9.4916498 28.2721343,9.4916498 C23.8579849,9.4916498 18.0834707,11.5742927 14.1262162,10.3477227 C10.1736527,9.12115268 8.35451655,5.44144261 5.08870273,3.20068349 C4.08015637,2.50834038 2.84832254,1.8646484 1.55550684,1.21721404 C0.677367878,0.7784182 0.609818726,27.1548195 2.18127467,28.2953144 C6.96600622,31.7691928 22.8644495,18.1253555 28.8472403,18.0271176 C32.2021815,17.9709817 36.3433197,20.7122862 40.6401963,23.4526551 C45.9859611,26.8629127 51.5719006,30.2731703 56.1774392,28.2953144 C57.5002768,27.727406 56.7243997,0.00187119759 56.1840065,0.000935598797 Z" id="path-3"></path>
    </defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Artboard" transform="translate(-368.000000, -29.000000)">
            <g id="Page-1-Copy" transform="translate(368.000000, 29.000000)">
                <g id="Group-3">
                    <mask id="mask-2" fill="white">
                        <use xlink:href="#path-1"></use>
                    </mask>
                    <g id="Clip-2"></g>
                    <polygon id="Fill-1" fill="#381345" mask="url(#mask-2)" points="-9.38182656 82.2166799 86.0379168 82.2166799 86.0379168 -9.35598798 -9.38182656 -9.35598798"></polygon>
                </g>
                <g id="Group-6" transform="translate(10.000000, 68.000000)">
                    <mask id="mask-4" fill="white">
                        <use xlink:href="#path-3"></use>
                    </mask>
                    <g id="Clip-5"></g>
                    <polygon id="Fill-4" fill="#381345" mask="url(#mask-4)" points="-8.4436439 38.2341805 66.2891719 38.2341805 66.2891719 -9.35598798 -8.4436439 -9.35598798"></polygon>
                </g>
            </g>
        </g>
    </g>
</svg>

<svg width="77px" height="97px" viewBox="0 0 77 97" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">    <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
    <defs>
        <path d="M26.6002928,0.306876406 C27.3133117,0.0860750894 28.1041996,0 28.9438731,0 C32.0182977,0 35.7344392,1.1638849 38.6146599,1.1638849 C42.2163431,1.1638849 46.4925797,-0.688600715 49.7687135,0.306876406 C53.5570951,1.45859853 56.2768866,6.18243685 59.4085403,8.44752154 C62.5045431,10.6854739 66.9899944,10.899726 69.2191163,13.9993648 C71.2971909,16.8875583 71.1836708,22.6115517 72.3188718,26.0592333 C73.4625165,29.5331116 76.6560903,32.4128847 76.6560903,36.2703586 C76.6560903,39.8331188 73.5544584,44.1059985 72.5721812,47.3497195 C71.5026529,50.872249 71.2643545,55.247109 69.2191163,58.2120216 C67.0106344,61.4117695 62.5261213,62.1658621 59.4085403,64.4870827 C56.4626468,66.6801263 54.1800484,71.2720452 50.6271507,72.4742897 C47.0517366,73.6830833 42.312976,71.6182168 38.327576,71.6182168 C34.3112161,71.6182168 29.0555169,73.7008597 25.4566482,72.4742897 C21.8605941,71.2477196 20.2047017,67.5680096 17.2334772,65.3272504 C14.2219109,63.0537454 9.01781169,61.3116604 6.86562068,58.2120216 C4.79598974,55.2312038 5.74073967,50.919029 4.6627678,47.3703027 C3.67673783,44.1209681 0,40.4580988 0,36.8887894 C0,32.841389 3.82778524,29.1672925 5.08307363,25.5455896 C6.31866019,21.9809581 5.76700879,16.657401 8.00926533,13.7140072 C10.2702855,10.7453522 15.2323336,9.85279094 18.30582,7.72336807 C21.2413935,5.69031189 23.1121297,1.38655742 26.6002928,0.306876406 Z M19.1426789,37.8346798 C19.1426789,48.5594488 27.859334,57.2530328 38.6146599,57.2530328 C49.3690477,57.2530328 58.086641,48.5594488 58.086641,37.8346798 C58.086641,27.1089752 49.3690477,18.4153911 38.6146599,18.4153911 C27.859334,18.4153911 19.1426789,27.1089752 19.1426789,37.8346798 Z" id="path-1"></path>
        <path d="M56.1840065,0.000935598797 C56.1821302,0.000935598797 56.1793156,0.00187119759 56.1774392,0.00187119759 C54.5309287,0.709183889 52.8562726,1.4005914 51.440555,2.35958017 C48.2019485,4.55262375 45.6932481,9.14641384 41.78947,10.3477227 C37.8594229,11.5555807 32.651571,9.4916498 28.2721343,9.4916498 C23.8579849,9.4916498 18.0834707,11.5742927 14.1262162,10.3477227 C10.1736527,9.12115268 8.35451655,5.44144261 5.08870273,3.20068349 C4.08015637,2.50834038 2.84832254,1.8646484 1.55550684,1.21721404 C0.677367878,0.7784182 0.609818726,27.1548195 2.18127467,28.2953144 C6.96600622,31.7691928 22.8644495,18.1253555 28.8472403,18.0271176 C32.2021815,17.9709817 36.3433197,20.7122862 40.6401963,23.4526551 C45.9859611,26.8629127 51.5719006,30.2731703 56.1774392,28.2953144 C57.5002768,27.727406 56.7243997,0.00187119759 56.1840065,0.000935598797 Z" id="path-3"></path>
    </defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Artboard" transform="translate(-368.000000, -29.000000)">
            <g id="Page-1-Copy" transform="translate(368.000000, 29.000000)">
                <g id="Group-3">
                    <mask id="mask-2" fill="white">
                        <use xlink:href="#path-1"></use>
                    </mask>
                    <g id="Clip-2"></g>
                    <polygon id="Fill-1" fill="#381345" mask="url(#mask-2)" points="-9.38182656 82.2166799 86.0379168 82.2166799 86.0379168 -9.35598798 -9.38182656 -9.35598798"></polygon>
                </g>
                <g id="Group-6" transform="translate(10.000000, 68.000000)">
                    <mask id="mask-4" fill="white">
                        <use xlink:href="#path-3"></use>
                    </mask>
                    <g id="Clip-5"></g>
                    <polygon id="Fill-4" fill="#381345" mask="url(#mask-4)" points="-8.4436439 38.2341805 66.2891719 38.2341805 66.2891719 -9.35598798 -8.4436439 -9.35598798"></polygon>
                </g>
            </g>
        </g>
    </g>
</svg>
</div>
    
    <form action="edit_concert.php" method="post" id="edit_entry">
    <p>
      <input type="text" name="headliner" id="headliner" value="<?php echo $concert_info['headliner']; ?>" class="uneeded">
      </p>   
    <p>
      <input type="date" name="concert_date" id="concert_date" value="<?php echo $concert_info['concert_date']; ?>" class="uneeded">
    </p>                 

    <button type="submit" name="submit">
        <div id="edit_wrap">
            <p>edit this entry</p>
        </div>
        </button>
    </form>
                            
              <?php   
         }
    }
        mysqli_free_result($result);


?>
</div>
  </body>
</html>
