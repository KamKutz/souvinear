<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
	<!-- What it tries to add as homepage app name -->
	<title>SOUVINEAR</title>
	<!-- META -->
	<meta charset="utf-8">
	<!-- Enabling our application to be able to work mobiley -->
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Make the app title different from the web page title -->
	<meta name="apple-mobile-web-app-title" content="souvinear">

	<!-- Disable auto phone number detection -->
	<meta name="format-detection" content="telephone=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Add2Home Styling -->
	<link rel="stylesheet" href="css/css-add2home.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/css-nav.css">
    <link rel="stylesheet" href="css/css-hotspots.css">
    <link rel="stylesheet" href="css/css-infowindow.css">
	  	<!-- ICONS -->
  	<!-- iPad retina icon -->
  	<link href="graphics/souvinear_icon-152x152.png" sizes="152x152" rel="apple-touch-icon">
  	<!-- iPad retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-144x144.png" sizes="144x144" rel="apple-touch-icon">
  	<!-- iPad non-retina icon -->
  	<link href="graphics/souvinear_icon-76x76.png" sizes="76x76" rel="apple-touch-icon">
  	<!-- iPad non-retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-72x72.png" sizes="72x72" rel="apple-touch-icon">

  	<!-- iPhone 6 Plus icon -->
  	<link href="graphics/souvinear_icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
  	<!-- iPhone retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
  	<!-- iPhone non-retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-57x57.png" sizes="57x57" rel="apple-touch-icon">

	<!-- HACKS -->
	<!-- Prevent text size change on orientation change -->
	<style>
		html {
			-webkit-text-size-adjust: 100%;
		}
	</style>
    
    
      <!-- Libs -->
    
        <!-- JAVASCRIPT-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            // Customize config variable BEFORE loading addToHome.js file this is how to change the parameters
            var addToHomeConfig = {
              touchIcon: true
            }
        </script>

      <script src="js/angular.min.js"></script>
      <script src="js/angular-route.min.js"></script>
      <script src="js/angular-animate.min.js" ></script>
      <script src="app/app.js"></script>
    <!-- JS to change config variables -->
	<script src="https://spotify-player.herokuapp.com/spotify-player.js"></script>
<!--	<script src="js/spotify.js"></script> -->

    
      <script src="js/js-nav.js"></script>
    <!-- controllers -->
      <script src="app/controllers/mainCtrl.js"></script>
      <script src="app/controllers/editCtrl.js"></script>
      <script src="app/controllers/addCtrl.js"></script>
      <!-- 
        <script src="app/controllers/authCtrl.js"></script>
        <script src="app/controllers/loginCtrl.js"></script>
    -->
   
</head>
<body ng-controller="MyCtrl">
    
<div id='nav' ng-hide="navBoolean">
    <div class="mobile"><ul class="group">
    
<li><a href="#/hotspot"><svg width="45px" height="57px" viewBox="0 0 45 57" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
    <title>Group Copy 3</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="iPhone-8-Copy-13" transform="translate(-165.000000, -59.000000)">
            <g id="Group-Copy-3" transform="translate(165.000000, 59.000000)">
                <path d="M21.8760085,4.39927084 C12.5010829,4.29093478 4.71479616,11.5403169 4.58516128,20.4979865 C4.45381424,29.57012 12.104229,36.9198604 21.7873431,37.0238029 C31.0929262,37.1236987 38.9731371,29.8418273 39.0835713,21.0409386 C39.1991421,11.8225457 31.6400832,4.51211609 21.8760085,4.39927084 M11.8548653,2.43118499 C16.1178961,0.219949998 20.7440269,-0.45399974 25.5297553,0.291634479 C32.3578447,1.35533968 37.5925256,4.74520627 41.163722,10.3511639 C43.5564639,14.106737 44.4471534,18.2195762 44.177733,22.582155 C43.8053384,28.6132478 41.7643228,34.1483303 38.6003757,39.3392117 C34.4554838,46.1402189 28.9836688,51.8619123 22.5636848,56.8029386 C22.1997288,57.0829705 21.9736015,57.0522156 21.6286015,56.7887173 C16.6421836,52.9805371 12.2674955,48.6281329 8.55027648,43.6893034 C5.87784118,40.138378 3.67196915,36.3508938 2.12955866,32.2343547 C0.774874156,28.6190288 0.00794930874,24.9004542 0,19.4179789 C0.278592697,12.758375 4.10942573,6.44886888 11.8548653,2.43118499 Z" id="Fill-4" fill="#381345"></path>
                <g id="music" transform="translate(8.000000, 11.000000)">
                    <path d="M16.8005279,3.5625238 C15.1028279,4.2176779 13.4087243,4.88401603 11.7062615,5.52464134 C11.3786965,5.6478747 11.258071,5.81521703 11.2596262,6.1977735 C11.2735258,9.63764609 11.2709986,13.0776232 11.2656526,16.5176003 C11.2635142,17.8640737 10.5227509,18.8884052 9.3924089,19.1290186 C8.41399093,19.3373342 7.59303741,19.0190598 6.99496411,18.1736727 C6.39436361,17.3248363 6.33332184,16.372626 6.79599515,15.4332722 C7.26080687,14.4895284 8.03481266,14.0596227 9.02586666,14.0834541 C9.16408545,14.0867988 9.30201265,14.1012231 9.47979195,14.1131388 C9.49009518,13.9428698 9.50642482,13.7973729 9.50661922,13.651876 C9.50895203,10.6527796 9.51361764,7.65357859 9.50418922,4.65448214 C9.50321721,4.34258364 9.58340744,4.18987462 9.86917625,4.08305147 C12.7789637,2.99600574 15.6833079,1.89234076 18.5896933,0.794320052 C18.6967108,0.753869408 18.807422,0.724184698 18.9624564,0.674745022 C18.9712044,0.852121618 18.9833545,0.985075672 18.9834517,1.11813425 C18.9842293,5.32698716 18.9873397,9.53584007 18.9820909,13.744693 C18.9803412,15.133812 18.2257755,16.133685 17.0135909,16.3898724 C15.6882651,16.6701003 14.3828654,15.6232961 14.2223878,14.1516035 C14.0634653,12.6949622 15.1371396,11.3596729 16.4974574,11.3221489 C17.2301531,11.3019758 17.2301531,11.3019758 17.2301531,10.513136 C17.2301531,8.32054386 17.2305419,6.12795172 17.2290839,3.93525506 C17.2289867,3.78902651 17.2143094,3.64290247 17.2035202,3.44179901 C17.0374049,3.49102964 16.9160018,3.51799674 16.8005279,3.5625238 Z" id="Fill-8" fill="#381345"></path>
                    <path d="M0.346479465,6.87931034 L6.87173008,6.87931034" id="Line" stroke="#381345" stroke-width="2.5" stroke-linecap="round"></path>
                    <path d="M21.2578398,6.87931034 L25.7387039,6.87931034" id="Line-Copy-6" stroke="#381345" stroke-width="2.5" stroke-linecap="round"></path>
                    <path d="M0.346479465,10.8103448 L6.87173008,10.8103448" id="Line-Copy" stroke="#381345" stroke-width="2.5" stroke-linecap="round"></path>
                    <path d="M21.0497007,10.8103448 L25.7387039,10.8103448" id="Line-Copy-7" stroke="#381345" stroke-width="2.5" stroke-linecap="round"></path>
                    <path d="M0.346479465,14.7413793 L4.70929276,14.7413793" id="Line-Copy-2" stroke="#381345" stroke-width="2.5" stroke-linecap="round"></path>
                    <path d="M21.0497007,14.7413793 L25.7387039,14.7413793" id="Line-Copy-8" stroke="#381345" stroke-width="2.5" stroke-linecap="round"></path>
                </g>
            </g>
        </g>
    </g>
</svg> <br> Hotspots</a></li>
<li><a href="#/main"><svg width="36px" height="51px" viewBox="0 0 36 51" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
    <title>Group 8 Copy</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="iPhone-8-Copy-13" transform="translate(-167.000000, -198.000000)" fill="#381345">
            <g id="Group-8-Copy" transform="translate(167.000000, 198.000000)">
                <path d="M6,1 L8.67660343,1 C8.67660343,15.1042106 8.67660343,22.8773199 8.67660343,24.3193277 C8.67660343,25.1596639 11.4344979,16.5462185 12.0189702,16.5462185 C12.4726713,16.5462185 15.3613369,24.5294118 15.3613369,24.3193277 C15.3613369,22.5297956 15.3613369,14.7566863 15.3613369,1 L22.8952123,1 L25.5555556,1 L24.9322493,51 L23.0623306,51 L6,51 L6,51 C2.6862915,51 2.97157001e-14,48.3137085 2.93098879e-14,45 L2.84217094e-14,7 L3.46389584e-14,7 C3.42331461e-14,3.6862915 2.6862915,1 6,1 Z" id="Rectangle-20"></path>
                <path d="M28.8888889,50.8884477 L28.8888889,0.888888889 L29.5555556,0.888888889 L29.5555556,0.888888889 C32.8692641,0.888888889 35.5555556,3.57518039 35.5555556,6.88888889 L35.5555556,44.8888889 L35.5559526,44.8888889 C35.5559526,48.2025974 32.8696611,50.8888889 29.5559526,50.8888889 C29.5558202,50.8888889 29.5556879,50.8888889 29.5555555,50.8888889 L28.8888889,50.8884477 Z" id="Path-31"></path>
            </g>
        </g>
    </g>
</svg> <br> Journal</a></li>
<li><a href="#swapbox"> <svg width="48px" height="52px" viewBox="0 0 48 52" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
    <title>Group</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="iPhone-8-Copy-13" transform="translate(-162.000000, -330.000000)" fill="#381345">
            <g id="Group-7-Copy-3" transform="translate(161.000000, 330.000000)">
                <g id="Group">
                    <rect id="Rectangle-19" x="15.9642857" y="44.0784314" width="16.9642857" height="7.84313725" rx="1"></rect>
                    <path d="M35.7693296,14.6674029 C40.4182273,14.6674029 48.4467043,13.3676341 48.9805974,21.2292185 C48.9805974,28.0922612 48.9805974,34.9553038 48.9805974,41.8183464 C48.9805974,42.3706311 48.5328822,42.8183464 47.9805974,42.8183464 L2,42.8183464 L2,42.8183464 C1.44771525,42.8183464 1,42.3706311 1,41.8183464 C1,36.1421539 1,30.4659615 1,24.789769 C1,21.3788968 0.619769124,14.2092153 10.4160862,14.3869738 C11.749533,14.4259171 12.9942178,14.4608042 14.1501405,14.4916354 L14.1501398,14.4916644 C16.7402167,14.5607478 18.7838857,16.7164231 18.7148024,19.3065 C18.7044892,19.6931606 18.6463973,20.0770617 18.5418491,20.4494626 C18.5418491,20.4494626 18.5418491,20.4494626 18.5418491,20.4494626 C17.2643974,24.9997504 20.4937622,29.671693 24.4834214,29.671693 C29.4201002,29.671693 30.9806975,26.4501616 31.9593553,22.8829669 C32.938013,19.3157722 31.120432,14.6674029 35.7693296,14.6674029 Z M4,39 L10.0388743,39 C10.0388743,31.0563077 10.0388743,26.5287366 10.0388743,25.4172868 C10.0388743,23.750112 10.0757072,18.9674627 6.75364958,18.9674627 C4.86537083,18.9674627 4,20.8405612 4,24.6171857 C4,28.5070928 4,33.3013642 4,39 Z" id="Combined-Shape"></path>
                    <path d="M31.3552941,4.63461762 L29.9002935,23.4344836 L29.9003412,23.4344873 C29.6900983,26.151007 27.3174885,28.1827458 24.6009688,27.9725029 C23.3290138,27.874061 22.1446476,27.2867111 21.2964706,26.3337389 C21.2964706,26.3337389 21.2964706,26.3337389 21.2964706,26.3337389 C18.48,23.1692837 20.8941176,20.9089586 22.5035294,20.4568935 C23.3758908,20.2118574 24.6028915,20.2656634 26.1845316,20.6183117 L26.1845399,20.6182743 C26.7235677,20.7384579 27.2579641,20.3989176 27.3781478,19.8598898 C27.3899507,19.8069533 27.3974273,19.7531442 27.4005035,19.6989951 L28.4638012,0.982470636 L28.4638012,0.982470636 C28.4951263,0.43107497 28.9675149,0.0094745082 29.5189106,0.0407996479 C29.610941,0.046027955 29.7018066,0.0639557507 29.7889263,0.0940737849 L38.3267349,3.04566891 L38.3267349,3.04566891 C38.729685,3.18497227 39,3.56443509 39,3.99078494 L39,5.55647556 L39,5.55647556 C39,6.10876031 38.5522847,6.55647556 38,6.55647556 C37.9040075,6.55647556 37.8085152,6.5426541 37.7164621,6.5154366 L31.3552941,4.63461762 Z" id="Path-28-Copy"></path>
                </g>
            </g>
        </g>
    </g>
</svg> <br> Swapbox</a></li>
<li><a href="#/settings"><svg width="47px" height="50px" viewBox="0 0 47 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
    <title>Combined Shape Copy 2</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="iPhone-8-Copy-13" transform="translate(-164.000000, -473.000000)" fill="#381345">
            <path d="M187.517456,523 C185.831171,523 184.184271,522.829695 182.592695,522.505185 C180.087863,521.99447 184.661361,519.153846 178.949172,514.270499 C173.236982,509.387151 170.642807,516.529573 168.723732,514.270499 C167.649546,513.006001 166.698305,511.63185 165.88873,510.166953 C165.172372,508.87073 164.566934,507.503455 164.085385,506.078226 C163.229184,503.544152 169.094287,505.692308 169.094287,498 C169.094287,490.307692 163.276408,492.18657 164.215665,489.546075 C164.785168,487.945057 165.51183,486.419719 166.376862,484.98904 C167.170919,483.675747 168.081572,482.442215 169.094287,481.303125 C170.802525,479.381719 173.236982,485.279327 178.949172,481.303125 C184.661361,477.326923 179.417322,474.233553 181.852953,473.657642 C183.672102,473.2275 185.568474,473 187.517456,473 C189.326974,473 191.091141,473.196107 192.79026,473.568425 C195.248216,474.107022 191.801598,477.7952 196.561756,481.39212 C201.321914,484.98904 204.213041,479.340882 206.01937,481.39212 C206.852865,482.338625 207.616236,483.349518 208.301251,484.416486 C209.373559,486.086694 210.253863,487.894308 210.910588,489.807437 C211.791634,492.374048 205.877837,490.307692 205.606057,497.519231 C205.334276,504.730769 211.786776,503.65386 210.897175,506.23153 C210.35137,507.813035 209.652695,509.322178 208.819029,510.740903 C207.971798,512.182714 206.985145,513.53114 205.877837,514.767231 C204.250513,516.583817 202.273946,510.740903 196.085741,514.346154 C190.849567,517.711538 194.871245,522.082407 191.828744,522.622117 C190.428649,522.870479 189.203741,523 187.517456,523 Z M187.5,511 C194.403559,511 200,505.403559 200,498.5 C200,491.596441 194.403559,486 187.5,486 C180.596441,486 175,491.596441 175,498.5 C175,505.403559 180.596441,511 187.5,511 Z" id="Combined-Shape-Copy-2"></path>
        </g>
    </g>
</svg> <br> Settings</a></li>
</ul></div>
    <div class='wave -one'></div>
    <div class='wave -three'></div>
    <div class='title'>&#8964;</div>  
  </div>
<!-- end nav -->

        <div data-ng-view="" id="ng-view" class="slide-animation">    
        </div>

		<!-- Landscape View Start -->
		<div class="land_wrap">
		</div>

        <!-- Landscape View End -->
        		
    <script src="js/js-nav.js"></script>
</body>

</html>
