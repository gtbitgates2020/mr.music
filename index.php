<?php include 'connect.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d081420e73.js"></script>
  
    <title >Mr. Music</title>

    <link rel="icon"  type="image/jpg/png"  href="http://localhost/mrmusic/images/mrmusic.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/mrmusic/images/animate.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css" >
    <link rel="stylesheet" href="http://localhost/mrmusic/css/theme.css" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
</head>
<body onload = checkCookie()>

<button id="toTop" onclick="document.body.scrollTop=0; document.documentElement.scrollTop=0;">
    <p>&#8679</p>
</button>

<!-- header start -->
<section class="section">

<!-- nav bar start -->

    <nav class="navbar navbar-expand-lg nav-pills m-0 p-0  w-100   align-content-center  " id="top">
            <div class="d-flex justify-content-center">
                <a href="../../mrmusic" class=" ml-3">
                <p class="navbar-brand"> <img src="http://localhost/mrmusic/images/mrmusic.png" alt="Mr. Music" id="logo">   Mr.music</p>
                </a>
            </div>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navigation0" style="outline: none" id="open"><i class="fas fa-bars"></i></button>

            <div class="collapse navbar-collapse " id="navigation0">
                <ul class="navbar-nav ">
                    <li class="nav-item m-3 ">
                        <a class="nav-link  p-auto text-center" href="http://localhost/mrmusic" target="_self" ><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item m-3">
                        <a class="nav-link p-auto text-center" href="http://localhost/about" target="_self"><i class="fas fa-user"></i> About</a>
                    </li>
                    <li class="nav-item m-3 ">
                        <a class="nav-link p-auto text-center" href="http://localhost/contact" target="_self"><i class="fas fa-phone-alt"></i> Contact</a>
                    </li>
                    <li class="nav-item m-3 ">
                        <a class="nav-link p-auto text-center" href="#" target="_self"><i class="fas fa-rss"></i> Follow</a>
                    </li>
                    <li class="nav-item m-3 text-center">
                    <a href="http://localhost/mrmusic/search.php" class="active p-auto text-center" target="_self" title="Click to search songs">
                        <button class="btn searchbtn ml-3 mr-3"><i class="fab fa-searchengin" ></i></button>
                    </a>
                    </li>
                </ul>
            </div>
        </nav>

<!-- nav bar end -->

<!-- theme change toggler start -->

        <div class="row  toggler">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 text-center">
            <label for="togle" class="switch" title="Change Theme">
                <input type="checkbox" name="toggle" id="togle" onclick="setCookies()">
                <div class="slider round"></div>
            </label>
            </div>
        </div>
    </section>

<!-- theme change toggler start -->

<!-- header end -->


<!-- home body start -->

<div class="row h-100 ">
        
<!-- left side heart design start -->

        <div class="heart col-md-3 col-lg-3 col-xl-3">
            <div class="heart1">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart2">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart3">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart4">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart5">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart6">
                    <i class="fas fa-heart"></i>
                </div>
        </div>
        
    <!-- left side heart design end -->

<div class="mt-2 mb-2 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center">
      
<!-- dark svg logo start -->

    <div id="darklogo" >
        <svg width="600" height="600" class="logos" viewBox="0 0 2183 2047" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="mrmusic">
            <rect id="mic stand rod" x="164.442" y="966.564" width="1904.17" height="60.1709" fill="url(#paint0_linear)"/>
            <g id="left dots">
            <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="158" y="64" width="582" height="876">
            <g id="lefts dots">
            <rect class="dots level0" id="dot1" x="158.858" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2" x="158.858" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3" x="158.858" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4" x="158.858" y="381.265" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5" x="158.858" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5a" x="471.567" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level5" id="dot6" x="471.567" y="64" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5b" x="627.921" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level0" id="dot1a" x="315.212" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2a" x="315.212" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3a" x="315.212" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4a" x="315.212" y="381.265" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level0" id="dot1b" x="471.567" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2b" x="471.567" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3b" x="471.567" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4b" x="471.567" y="381.265" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level0" id="dot1c" x="627.921" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2c" x="627.921" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3c" x="627.921" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4c" x="627.921" y="381.265" width="111.682" height="109.402" fill="black"/>
            </g>
            </mask>
            <g mask="url(#mask0)">
            <rect id="Rectangle 55" x="159" y="-12" width="625" height="962" fill="url(#paint1_linear)"/>
            </g>
            </g>
            <g id="right dots">
            <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="1487" y="64" width="582" height="876">
            <g id="right dots_2">
            <rect class="dots level0" id="dot1d" x="1487.87" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2d" x="1487.87" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3d" x="1487.87" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4d" x="1487.87" y="381.265" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5c" x="1487.87" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5d" x="1800.58" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level5" id="dot6a" x="1800.58" y="64" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5e" x="1956.93" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level0" id="dot1e" x="1644.22" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2e" x="1644.22" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3e" x="1644.22" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4e" x="1644.22" y="381.265" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level0" id="dot1f" x="1800.58" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2f" x="1800.58" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3f" x="1800.58" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4f" x="1800.58" y="381.265" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level0" id="dot1g" x="1956.93" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2g" x="1956.93" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3g" x="1956.93" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4g" x="1956.93" y="381.265" width="111.682" height="109.402" fill="black"/>
            </g>
            </mask>
            <g mask="url(#mask1)">
            <rect id="Rectangle 54" x="1488" y="-23" width="625" height="962" fill="url(#paint2_linear)"/>
            </g>
            </g>
            <g id="mic upper part">
            <mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="868" y="342" width="503" height="609">
            <g id="mic upper part_2">
            <path id="Subtract" d="M1091.4 342.974C968.039 342.974 868.036 429.964 868.036 537.272V950.154H1370.6V537.272C1370.6 429.964 1270.6 342.974 1147.24 342.974H1091.4Z" fill="black"/>
            </g>
            </mask>
            <g mask="url(#mask2)">
            <rect id="Rectangle 56" x="833" y="256" width="602" height="694" fill="url(#paint3_linear)"/>
            <g id="mic dots">
            <ellipse id="Ellipse 11" cx="946.214" cy="897.351" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 30" cx="946.214" cy="838.575" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 49" cx="946.214" cy="779.8" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 68" cx="946.214" cy="721.024" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 87" cx="946.214" cy="657.728" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 106" cx="946.214" cy="594.431" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 125" cx="946.214" cy="531.134" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 145" cx="990.886" cy="472.359" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 146" cx="1041.14" cy="472.359" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 147" cx="1091.4" cy="472.359" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 148" cx="1141.66" cy="472.359" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 149" cx="1191.91" cy="472.359" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 150" cx="1242.17" cy="472.359" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 22" cx="968.55" cy="865.702" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 41" cx="968.55" cy="811.448" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 60" cx="968.55" cy="748.151" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 79" cx="968.55" cy="689.376" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 98" cx="968.55" cy="626.079" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 117" cx="968.55" cy="562.782" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 136" cx="968.55" cy="499.486" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 23" cx="1018.81" cy="865.702" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 42" cx="1018.81" cy="811.448" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 61" cx="1018.81" cy="748.151" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 80" cx="1018.81" cy="689.376" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 99" cx="1018.81" cy="626.079" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 118" cx="1018.81" cy="562.782" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 137" cx="1018.81" cy="499.486" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 24" cx="1069.06" cy="865.702" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 43" cx="1069.06" cy="811.448" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 62" cx="1069.06" cy="748.151" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 81" cx="1069.06" cy="689.376" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 100" cx="1069.06" cy="626.079" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 119" cx="1069.06" cy="562.782" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 138" cx="1069.06" cy="499.486" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 25" cx="1119.32" cy="865.702" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 44" cx="1119.32" cy="811.448" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 63" cx="1119.32" cy="748.151" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 82" cx="1119.32" cy="689.376" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 101" cx="1119.32" cy="626.079" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 120" cx="1119.32" cy="562.782" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 139" cx="1119.32" cy="499.486" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 26" cx="1169.58" cy="865.702" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 45" cx="1169.58" cy="811.448" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 64" cx="1169.58" cy="748.151" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 83" cx="1169.58" cy="689.376" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 102" cx="1169.58" cy="626.079" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 121" cx="1169.58" cy="562.782" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 140" cx="1169.58" cy="499.486" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 27" cx="1219.83" cy="865.702" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 46" cx="1219.83" cy="811.448" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 65" cx="1219.83" cy="748.151" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 84" cx="1219.83" cy="689.376" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 103" cx="1219.83" cy="626.079" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 122" cx="1219.83" cy="562.782" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 141" cx="1219.83" cy="499.486" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 28" cx="1270.09" cy="865.702" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 47" cx="1270.09" cy="811.448" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 66" cx="1270.09" cy="748.151" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 85" cx="1270.09" cy="689.376" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 104" cx="1270.09" cy="626.079" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 123" cx="1270.09" cy="562.782" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 142" cx="1270.09" cy="499.486" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 12" cx="996.47" cy="897.351" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 32" cx="996.47" cy="838.575" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 51" cx="996.47" cy="779.8" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 70" cx="996.47" cy="721.024" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 89" cx="996.47" cy="657.728" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 108" cx="996.47" cy="594.431" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 127" cx="996.47" cy="531.134" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 13" cx="1046.73" cy="897.351" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 33" cx="1046.73" cy="838.575" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 52" cx="1046.73" cy="779.8" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 71" cx="1046.73" cy="721.024" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 90" cx="1046.73" cy="657.728" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 109" cx="1046.73" cy="594.431" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 128" cx="1046.73" cy="531.134" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 14" cx="1197.5" cy="897.351" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 34" cx="1197.5" cy="838.575" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 53" cx="1197.5" cy="779.8" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 72" cx="1197.5" cy="721.024" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 91" cx="1197.5" cy="657.728" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 110" cx="1197.5" cy="594.431" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 129" cx="1197.5" cy="531.134" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 17" cx="1247.75" cy="897.351" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 35" cx="1247.75" cy="838.575" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 54" cx="1247.75" cy="779.8" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 73" cx="1247.75" cy="721.024" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 92" cx="1247.75" cy="657.728" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 111" cx="1247.75" cy="594.431" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 130" cx="1247.75" cy="531.134" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 18" cx="1298.01" cy="897.351" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 36" cx="1298.01" cy="838.575" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 55" cx="1298.01" cy="779.8" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 74" cx="1298.01" cy="721.024" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 93" cx="1298.01" cy="657.728" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 112" cx="1298.01" cy="594.431" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 131" cx="1298.01" cy="531.134" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 15" cx="1096.98" cy="897.351" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 38" cx="1096.98" cy="838.575" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 57" cx="1096.98" cy="779.8" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 76" cx="1096.98" cy="721.024" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 95" cx="1096.98" cy="657.728" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 114" cx="1096.98" cy="594.431" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 133" cx="1096.98" cy="531.134" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 16" cx="1147.24" cy="897.351" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 39" cx="1147.24" cy="838.575" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 58" cx="1147.24" cy="779.8" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 77" cx="1147.24" cy="721.024" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 96" cx="1147.24" cy="657.728" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 115" cx="1147.24" cy="594.431" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            <ellipse id="Ellipse 134" cx="1147.24" cy="531.134" class="micdots" rx="11.1682" ry="9.04239" fill="#131313"/>
            </g>
            </g>
            </g>
            <g id="upper arc">
            <mask id="mask3" mask-type="alpha" maskUnits="userSpaceOnUse" x="287" y="1043" width="1676" height="838">
            <path id="upperArc" d="M1057.9 1491.69V1568.27H968.55C922.29 1568.27 884.789 1605.01 884.789 1650.32C884.789 1695.64 922.29 1732.38 968.55 1732.38H1264.51C1310.77 1732.38 1348.27 1695.64 1348.27 1650.32C1348.27 1605.01 1310.77 1568.27 1264.51 1568.27H1175.16V1491.69L1194.7 1488.96L1214.25 1486.22C1250.55 1467.08 1264.51 1457.35 1289.95 1424.05C1455.08 1363.76 1571.63 1217.16 1571.63 1045.88C1571.63 1045.34 1571.63 1044.81 1571.63 1044.27C1571.63 1043.89 1571.62 1043.52 1571.62 1043.15H1962.35C1962.46 1048.6 1962.52 1054.07 1962.52 1059.56C1962.52 1512.71 1587.5 1880.07 1124.9 1880.07C662.304 1880.07 287.292 1512.71 287.292 1059.56C287.292 1054.07 287.347 1048.6 287.456 1043.15H672.603C672.601 1043.51 672.599 1043.87 672.597 1044.23L672.594 1045.16L672.593 1045.88C672.593 1212.91 790.37 1354.91 949.005 1417.85C975.486 1451.85 993.678 1480.75 1032.77 1486.22L1046.73 1488.96L1057.9 1491.69Z" fill="#5D9CE8"/>
            </mask>
            <g mask="url(#mask3)">
            <rect id="Rectangle 57" x="89" y="1043" width="1980" height="941" fill="url(#paint4_linear)"/>
            </g>
            </g>
            <g id="lower arc">
            <mask id="mask4" mask-type="alpha" maskUnits="userSpaceOnUse" x="164" y="1043" width="1905" height="941">
            <path id="lowerArc" fill-rule="evenodd" clip-rule="evenodd" d="M164.447 1043.15C164.444 1044.18 164.442 1045.21 164.442 1046.24C164.442 1564.15 590.706 1984 1116.53 1984C1642.35 1984 2068.61 1564.15 2068.61 1046.24C2068.61 1045.21 2068.61 1044.18 2068.61 1043.15H2013.66C2013.68 1045.21 2013.69 1047.27 2013.69 1049.34C2013.69 1534.77 1614.75 1928.29 1122.63 1928.29C630.515 1928.29 231.577 1534.77 231.577 1049.34C231.577 1047.27 231.584 1045.21 231.598 1043.15H164.447Z" fill="#5D9CE8"/>
            </mask>
            <g mask="url(#mask4)">
            <rect id="Rectangle 58" x="67" y="1043" width="2343" height="973" fill="url(#paint5_linear)"/>
            </g>
            </g>
            <g id="mic lower part">
            <mask id="mask5" mask-type="alpha" maskUnits="userSpaceOnUse" x="737" y="1028" width="772" height="688">
            <g id="mic lower part_2">
            <path id="Subtract_2" fill-rule="evenodd" clip-rule="evenodd" d="M868.037 1043.15V1082.25C868.037 1199.62 968.04 1294.77 1091.4 1294.77H1147.24C1270.6 1294.77 1370.6 1199.62 1370.6 1082.25V1043.15H868.037Z" fill="black"/>
            <ellipse id="Ellipse 151" cx="1222.63" cy="1218.19" rx="30.7124" ry="27.3504" fill="white"/>
            <ellipse id="Ellipse 152" cx="1264.51" cy="1240.07" class="micdots" rx="11.1682" ry="10.9402" fill="white"/>
            <g id="stand">
            <rect id="Rectangle 11" x="901.541" y="1584.68" width="435.558" height="131.282" rx="65.641" fill="black"/>
            <rect id="Rectangle 12" x="1080.23" y="1431.52" width="72.593" height="218.803" fill="black"/>
            <path id="Subtract_3" d="M962.966 1286.3L967.691 1403.79C967.691 1449.32 1026.08 1486.22 1074.79 1486.22H1162.99C1211.7 1486.22 1270.09 1449.32 1270.09 1403.79V1360.34L1267.3 1292.03C1255.49 1296.97 1183.75 1316.65 1108.15 1316.65C1056.12 1316.65 1007.85 1310.98 962.966 1286.3Z" fill="black"/>
            <path id="Subtract_4" d="M933.734 1325.86C933.719 1317.85 926.796 1311.63 918.786 1311.37C843.726 1308.87 772.145 1236.39 766.13 1151.2L765.922 1042.89C765.907 1034.91 759.233 1028.55 751.263 1028.92V1028.92C743.792 1029.26 737.923 1035.42 737.937 1042.9L738.158 1158.19C743.13 1262.47 827.207 1332.27 924.538 1338.59C927.267 1338.76 931.396 1337.47 928.683 1337.81V1337.81C923.13 1338.51 933.746 1331.81 933.735 1326.21L933.734 1325.86Z" fill="black"/>
            <path id="Subtract_5" d="M1298.84 1329.75C1298.76 1338.24 1305.97 1345.03 1314.41 1344.03C1421.85 1331.37 1481.73 1269.21 1499.37 1172.72L1508.53 1050.94C1509.23 1041.74 1501.96 1033.9 1492.73 1033.89V1033.89C1484.3 1033.89 1477.33 1040.46 1476.84 1048.88L1470.01 1167.39C1459.27 1251.91 1402.6 1306.74 1312.89 1314.95C1305.14 1315.66 1298.92 1321.96 1298.84 1329.75V1329.75Z" fill="black"/>
            </g>
            </g>
            </mask>
            <g mask="url(#mask5)">
            <rect id="Rectangle 59" x="731" y="848" width="913" height="1055" fill="url(#paint6_linear)"/>
            </g>
            </g>
            </g>
            <defs>
            <linearGradient id="paint0_linear" x1="932" y1="1027" x2="1116.53" y2="1026.74" gradientUnits="userSpaceOnUse">
            <stop stop-color="#130EF4"/>
            <stop offset="1" stop-color="#DF11E3"/>
            </linearGradient>
            <linearGradient id="paint1_linear" x1="471.5" y1="-12" x2="471.5" y2="950" gradientUnits="userSpaceOnUse">
            <stop stop-color="#130EF4"/>
            <stop offset="0.453784" stop-color="#7010ED"/>
            <stop offset="1" stop-color="#DF11E3"/>
            </linearGradient>
            <linearGradient id="paint2_linear" x1="1800.5" y1="-23" x2="1800.5" y2="939" gradientUnits="userSpaceOnUse">
            <stop stop-color="#130EF4"/>
            <stop offset="0.453784" stop-color="#7010ED"/>
            <stop offset="1" stop-color="#DF11E3"/>
            </linearGradient>
            <linearGradient id="paint3_linear" x1="1134" y1="256" x2="1134" y2="950" gradientUnits="userSpaceOnUse">
            <stop stop-color="#130EF4"/>
            <stop offset="1" stop-color="#DF11E3"/>
            </linearGradient>
            <linearGradient id="paint4_linear" x1="1079" y1="1043" x2="1079" y2="1984" gradientUnits="userSpaceOnUse">
            <stop stop-color="#DF11E3"/>
            <stop offset="1" stop-color="#130EF4"/>
            </linearGradient>
            <linearGradient id="paint5_linear" x1="1238.5" y1="1043" x2="1238.5" y2="2016" gradientUnits="userSpaceOnUse">
            <stop stop-color="#130EF4"/>
            <stop offset="1" stop-color="#DF11E3"/>
            </linearGradient>
            <linearGradient id="paint6_linear" x1="1187.5" y1="848" x2="1187.5" y2="1903" gradientUnits="userSpaceOnUse">
            <stop stop-color="#DF11E3"/>
            <stop offset="1" stop-color="#130EF4"/>
            </linearGradient>
            </defs>
            </svg>
            
    </div>

    <!-- dark svg logo end -->

    <!-- light svg logo start -->

    <div id="lightlogo" >
        <svg width="600" height="600" class="logos" viewBox="0 0 2183 2047" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="mrmusic">
            <rect id="mic stand rod" x="164.442" y="966.564" width="1904.17" height="60.1709" fill="black"/>
            <g id="left dots">
            <g id="lefts dots">
            <rect class="dots level0" id="dot1" x="158.858" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2" x="158.858" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3" x="158.858" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4" x="158.858" y="381.265" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5" x="158.858" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5a" x="471.567" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level5" id="dot6" x="471.567" y="64" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5b" x="627.921" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level0" id="dot1a" x="315.212" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2a" x="315.212" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3a" x="315.212" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4a" x="315.212" y="381.265" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level0" id="dot1b" x="471.567" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2b" x="471.567" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3b" x="471.567" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4b" x="471.567" y="381.265" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level0" id="dot1c" x="627.921" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2c" x="627.921" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3c" x="627.921" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4c" x="627.921" y="381.265" width="111.682" height="109.402" fill="black"/>
            </g>
            </g>
            <g id="right dots">
            <g id="right dots_2">
            <rect class="dots level0" id="dot1d" x="1487.87" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2d" x="1487.87" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3d" x="1487.87" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4d" x="1487.87" y="381.265" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5c" x="1487.87" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5d" x="1800.58" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level5" id="dot6a" x="1800.58" y="64" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level4" id="dot5e" x="1956.93" y="222.632" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level0" id="dot1e" x="1644.22" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2e" x="1644.22" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3e" x="1644.22" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4e" x="1644.22" y="381.265" width="111.682" height="109.402" fill="black"/>
            <rect class="dots level0" id="dot1f" x="1800.58" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2f" x="1800.58" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3f" x="1800.58" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4f" x="1800.58" y="381.265" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level0" id="dot1g" x="1956.93" y="829.812" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level1" id="dot2g" x="1956.93" y="682.12" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level2" id="dot3g" x="1956.93" y="539.897" width="111.682" height="109.402" fill="#5D9CE8"/>
            <rect class="dots level3" id="dot4g" x="1956.93" y="381.265" width="111.682" height="109.402" fill="black"/>
            </g>
            </g>
            <g id="mic upper part">
            <g id="mic upper part_2">
            <path id="Subtract" d="M1091.4 342.974C968.039 342.974 868.036 429.964 868.036 537.272V950.154H1370.6V537.272C1370.6 429.964 1270.6 342.974 1147.24 342.974H1091.4Z" fill="black"/>
            </g>
            <g id="mic dots">
            <ellipse id="Ellipse 11" cx="946.214" cy="897.351" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 30" cx="946.214" cy="838.575" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 49" cx="946.214" cy="779.8" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 68" cx="946.214" cy="721.024" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 87" cx="946.214" cy="657.728" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 106" cx="946.214" cy="594.431" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 125" cx="946.214" cy="531.134" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 145" cx="990.886" cy="472.359" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 146" cx="1041.14" cy="472.359" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 147" cx="1091.4" cy="472.359" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 148" cx="1141.66" cy="472.359" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 149" cx="1191.91" cy="472.359" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 150" cx="1242.17" cy="472.359" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 22" cx="968.55" cy="865.702" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 41" cx="968.55" cy="811.448" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 60" cx="968.55" cy="748.151" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 79" cx="968.55" cy="689.376" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 98" cx="968.55" cy="626.079" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 117" cx="968.55" cy="562.782" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 136" cx="968.55" cy="499.486" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 23" cx="1018.81" cy="865.702" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 42" cx="1018.81" cy="811.448" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 61" cx="1018.81" cy="748.151" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 80" cx="1018.81" cy="689.376" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 99" cx="1018.81" cy="626.079" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 118" cx="1018.81" cy="562.782" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 137" cx="1018.81" cy="499.486" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 24" cx="1069.06" cy="865.702" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 43" cx="1069.06" cy="811.448" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 62" cx="1069.06" cy="748.151" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 81" cx="1069.06" cy="689.376" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 100" cx="1069.06" cy="626.079" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 119" cx="1069.06" cy="562.782" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 138" cx="1069.06" cy="499.486" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 25" cx="1119.32" cy="865.702" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 44" cx="1119.32" cy="811.448" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 63" cx="1119.32" cy="748.151" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 82" cx="1119.32" cy="689.376" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 101" cx="1119.32" cy="626.079" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 120" cx="1119.32" cy="562.782" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 139" cx="1119.32" cy="499.486" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 26" cx="1169.58" cy="865.702" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 45" cx="1169.58" cy="811.448" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 64" cx="1169.58" cy="748.151" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 83" cx="1169.58" cy="689.376" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 102" cx="1169.58" cy="626.079" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 121" cx="1169.58" cy="562.782" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 140" cx="1169.58" cy="499.486" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 27" cx="1219.83" cy="865.702" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 46" cx="1219.83" cy="811.448" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 65" cx="1219.83" cy="748.151" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 84" cx="1219.83" cy="689.376" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 103" cx="1219.83" cy="626.079" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 122" cx="1219.83" cy="562.782" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 141" cx="1219.83" cy="499.486" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 28" cx="1270.09" cy="865.702" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 47" cx="1270.09" cy="811.448" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 66" cx="1270.09" cy="748.151" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 85" cx="1270.09" cy="689.376" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 104" cx="1270.09" cy="626.079" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 123" cx="1270.09" cy="562.782" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 142" cx="1270.09" cy="499.486" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 12" cx="996.47" cy="897.351" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 32" cx="996.47" cy="838.575" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 51" cx="996.47" cy="779.8" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 70" cx="996.47" cy="721.024" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 89" cx="996.47" cy="657.728" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 108" cx="996.47" cy="594.431" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 127" cx="996.47" cy="531.134" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 13" cx="1046.73" cy="897.351" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 33" cx="1046.73" cy="838.575" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 52" cx="1046.73" cy="779.8" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 71" cx="1046.73" cy="721.024" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 90" cx="1046.73" cy="657.728" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 109" cx="1046.73" cy="594.431" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 128" cx="1046.73" cy="531.134" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 14" cx="1197.5" cy="897.351" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 34" cx="1197.5" cy="838.575" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 53" cx="1197.5" cy="779.8" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 72" cx="1197.5" cy="721.024" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 91" cx="1197.5" cy="657.728" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 110" cx="1197.5" cy="594.431" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 129" cx="1197.5" cy="531.134" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 17" cx="1247.75" cy="897.351" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 35" cx="1247.75" cy="838.575" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 54" cx="1247.75" cy="779.8" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 73" cx="1247.75" cy="721.024" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 92" cx="1247.75" cy="657.728" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 111" cx="1247.75" cy="594.431" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 130" cx="1247.75" cy="531.134" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 18" cx="1298.01" cy="897.351" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 36" cx="1298.01" cy="838.575" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 55" cx="1298.01" cy="779.8" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 74" cx="1298.01" cy="721.024" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 93" cx="1298.01" cy="657.728" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 112" cx="1298.01" cy="594.431" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 131" cx="1298.01" cy="531.134" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 15" cx="1096.98" cy="897.351" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 38" cx="1096.98" cy="838.575" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 57" cx="1096.98" cy="779.8" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 76" cx="1096.98" cy="721.024" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 95" cx="1096.98" cy="657.728" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 114" cx="1096.98" cy="594.431" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 133" cx="1096.98" cy="531.134" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 16" cx="1147.24" cy="897.351" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 39" cx="1147.24" cy="838.575" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 58" cx="1147.24" cy="779.8" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 77" cx="1147.24" cy="721.024" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 96" cx="1147.24" cy="657.728" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 115" cx="1147.24" cy="594.431" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            <ellipse id="Ellipse 134" cx="1147.24" cy="531.134" rx="11.1682" ry="9.04239" fill="#FDF5F5"/>
            </g>
            </g>
            <g id="upper arc">
            <path id="upperArc" d="M1057.9 1491.69V1568.27H968.55C922.29 1568.27 884.789 1605.01 884.789 1650.32C884.789 1695.64 922.29 1732.38 968.55 1732.38H1264.51C1310.77 1732.38 1348.27 1695.64 1348.27 1650.32C1348.27 1605.01 1310.77 1568.27 1264.51 1568.27H1175.16V1491.69L1194.7 1488.96L1214.25 1486.22C1250.55 1467.08 1264.51 1457.35 1289.95 1424.05C1455.08 1363.76 1571.63 1217.16 1571.63 1045.88C1571.63 1045.34 1571.63 1044.81 1571.63 1044.27C1571.63 1043.89 1571.62 1043.52 1571.62 1043.15H1962.35C1962.46 1048.6 1962.52 1054.07 1962.52 1059.56C1962.52 1512.71 1587.5 1880.07 1124.9 1880.07C662.304 1880.07 287.292 1512.71 287.292 1059.56C287.292 1054.07 287.347 1048.6 287.456 1043.15H672.603C672.601 1043.51 672.599 1043.87 672.597 1044.23L672.594 1045.16L672.593 1045.88C672.593 1212.91 790.37 1354.91 949.005 1417.85C975.486 1451.85 993.678 1480.75 1032.77 1486.22L1046.73 1488.96L1057.9 1491.69Z" fill="#5D9CE8"/>
            </g>
            <g id="lower arc">
            <path id="lowerArc" fill-rule="evenodd" clip-rule="evenodd" d="M164.447 1043.15C164.444 1044.18 164.442 1045.21 164.442 1046.24C164.442 1564.15 590.706 1984 1116.53 1984C1642.35 1984 2068.61 1564.15 2068.61 1046.24C2068.61 1045.21 2068.61 1044.18 2068.61 1043.15H2013.66C2013.68 1045.21 2013.69 1047.27 2013.69 1049.34C2013.69 1534.77 1614.75 1928.29 1122.63 1928.29C630.515 1928.29 231.577 1534.77 231.577 1049.34C231.577 1047.27 231.584 1045.21 231.598 1043.15H164.447Z" fill="#5D9CE8"/>
            </g>
            <g id="mic lower part">
            <g id="mic lower part_2">
            <path id="Subtract_2" fill-rule="evenodd" clip-rule="evenodd" d="M868.037 1043.15V1082.25C868.037 1199.62 968.04 1294.77 1091.4 1294.77H1147.24C1270.6 1294.77 1370.6 1199.62 1370.6 1082.25V1043.15H868.037Z" fill="black"/>
            <ellipse id="Ellipse 151" cx="1222.63" cy="1218.19" rx="30.7124" ry="27.3504" fill="white"/>
            <ellipse id="Ellipse 152" cx="1264.51" cy="1240.07" rx="11.1682" ry="10.9402" fill="white"/>
            <g id="stand">
            <rect id="Rectangle 11" x="901.541" y="1584.68" width="435.558" height="131.282" rx="65.641" fill="black"/>
            <rect id="Rectangle 12" x="1080.23" y="1431.52" width="72.593" height="218.803" fill="black"/>
            <path id="Subtract_3" d="M962.966 1286.3L967.691 1403.79C967.691 1449.32 1026.08 1486.22 1074.79 1486.22H1162.99C1211.7 1486.22 1270.09 1449.32 1270.09 1403.79V1360.34L1267.3 1292.03C1255.49 1296.97 1183.75 1316.65 1108.15 1316.65C1056.12 1316.65 1007.85 1310.98 962.966 1286.3Z" fill="black"/>
            <path id="Subtract_4" d="M933.734 1325.86C933.719 1317.85 926.796 1311.63 918.786 1311.37C843.726 1308.87 772.145 1236.39 766.13 1151.2L765.922 1042.89C765.907 1034.91 759.233 1028.55 751.263 1028.92C743.792 1029.26 737.923 1035.42 737.937 1042.9L738.158 1158.19C743.13 1262.47 827.207 1332.27 924.538 1338.59C927.267 1338.76 931.396 1337.47 928.683 1337.81C923.13 1338.51 933.746 1331.81 933.735 1326.21L933.734 1325.86Z" fill="black"/>
            <path id="Subtract_5" d="M1298.84 1329.75C1298.76 1338.24 1305.97 1345.03 1314.41 1344.03C1421.85 1331.37 1481.73 1269.21 1499.37 1172.72L1508.53 1050.94C1509.23 1041.74 1501.96 1033.9 1492.73 1033.89C1484.3 1033.89 1477.33 1040.46 1476.84 1048.88L1470.01 1167.39C1459.27 1251.91 1402.6 1306.74 1312.89 1314.95C1305.14 1315.66 1298.92 1321.96 1298.84 1329.75Z" fill="black"/>
            </g>
            </g>
            </g>
            </g>
            </svg>            
    </div>

    <!-- light svg logo start -->

    
</div>

    <!-- right side heart deisgn start -->

        <div class="heart col-md-3 col-lg-3 col-xl-3">
            <div class="heart1">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart2">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart3">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart4">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart5">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="heart6">
                    <i class="fas fa-heart"></i>
                </div>
        </div>
    </div>

<!-- right side heart deisgn end -->

    </section>

<!-- section end -->
    
<!-- announcement row start -->

        <div class="row announcement">
            <div class="col-md-3 col-lg-3 col-xl-3 svg1 text-center my-auto d-inline" >           
                <i class="fas fa-music" id="music1"></i>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pt-5 pb-2 ">
                        <h1>
                            Do you want to make cover songs?
                        </h1>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2">
                        <h2>
                            And you don't have music,
                        </h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2">
                        <h2>
                            then you are at right place. 
                        </h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2">
                        <h2>
                            you can....
                        </h2>
                    </div>
            </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3  text-center my-auto">
                <i class="fas fa-music" id="music2"></i>
            </div>            
        </div>
<!-- announcement row end -->

<!-- benifit chips start -->

        <div class="row mb-5">

        <!-- Download song start -->

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 text-center pt-5 pb-2 " title="download song" data-aos="fade-up" data-aos-duration="2000">
                <div class="what ">
                    <a href="">
                        <div class="row p-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2" >
                            <div class="icons" data-aos="zoom-in" data-aos-duration="3000">
                                <div class="icon"><i class="fas fa-guitar"></i></div>
                            </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2" >
                                <h1>Download Songs</h1>
                                <p>You can downlaod songs and learn how to sing that song</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Download song end -->

            <!-- Download video start -->


            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 text-center pt-5 pb-2 " title="download video" data-aos="fade-down" data-aos-duration="2000">
                <div class="what">
                    <a href="">
                        <div class="row p-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2" >
                            <div class="icons" data-aos="zoom-in" data-aos-duration="3000">
                            <div class="icon"><i class="fas fa-play-circle"></i></div>
                            </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2" >
                                <h1>Download Video</h1>
                                <p>You can downlaod the video of song and enjoy it</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Download video end -->

            <!-- Download lyrics start -->


            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 text-center pt-5 pb-2 pl-2 pr-1" title="Download lyrics" data-aos="fade-up" data-aos-duration="2000">
                <div class="what">
                    <a href="">
                        <div class="row p-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2" >
                            <div class="icons" data-aos="zoom-in" data-aos-duration="3000">
                            <div class="icon"><i class="fas fa-file-audio"></i></div>
                            </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2" >
                                <h1>Download Lyrics</h1>
                                <p>You can downlaod the lyrics of song, which help you to sing correct lyrics</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Download lyrics end -->

            <!-- Download music start -->


            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 text-center pt-5 pb-2  pl-2 pr-1 " title="make cover song" data-aos="fade-down" data-aos-duration="2000" >
                <div class="what">
                    <a href="">
                        <div class="row p-3">
                            <div class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2" >
                            <div class="icons" data-aos="zoom-in" data-aos-duration="3000">
                            <div class="icon"><i class="fas fa-music"></i></div>
                            </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center pb-2" >
                                <h1>Download Music</h1>
                                <p>You can downlaod the karoake music of the songs and can easily make cover songs for youtube and instagram</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Download music end -->

        </div>

        <!-- benifit chips end -->

    <!-- trending song start -->

    <div class="row m-3">

    <!-- adds start -->
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>

    <!-- adds end -->

    <!-- larest song banner start -->
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <div class="row mb-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                    <h1 class="latest">
                        Latest Songs
                    </h1>
                </div>
            </div>
    <!-- larest song banner end -->

    <!-- code to fetch songs from DB start -->

        <?php
            $query="SELECT * FROM trending ";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
              // output data of each row
            while($row = $result->fetch_assoc()) {
                
        ?>
                
    <!-- structure of trending songs chip start -->


        <div class=" m-3" data-aos="fade-up" data-aos-duration="2000">
            <a href="" title="Click to Download">
                <div class="row songs" >
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center p-2">
                            <img src="<?php echo 'http://localhost/mrmusic/images'.$row['poster'] ?>" alt="<?php echo $row['songName'] ?>" class="img-fluid img-rounded">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 text-center p-2 my-auto">
                            <h1><?php echo $row['songName'] ?></h1>
                            <h1><?php echo $row['artists'] ?></h1>
                        </div>
                    </div>
            </a>
        </div>

        <?php } }?>
        </div>
    
    <!-- structure of trending songs chip end -->

    <!-- code to fetch songs from DB end -->

    <!-- adds start -->

        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>

    <!-- adds end -->
    </div>


<!-- home body end -->

<!-- footer start -->

    <div id="footer" class="w-100 mt-3">
        <div  class="row row1 w-100 pt-3 " data-aos="zoom-in" data-aos-duration="2000">

        <!-- about section start -->

            <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-center  ">
                <div class="circle  my-auto" >
                    <div class="row justify-content-center text-center  h-100 " style="position: relative;">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto ">
                        <i class="fas fa-user" id="about"></i>
                    </div>
                    <a href="http://localhost/mrmusic/about" id="mid"></a>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <p>ABOUT</p>
                    </div>
                    </div>
                </div>
            </div>

        <!-- about section end -->

        <!-- contact section start -->


            <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-center  ">
                <div class="circle  my-auto" >
                    <div class="row justify-content-center text-center my-auto h-100" style="position: relative;">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <i class="fas fa-phone-alt" id="contact"></i>
                    </div>
                    <a href="http://localhost/mrmusic/contact" id="mid"></a>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <p>CONTACT</p>
                    </div>
                    </div>
                </div>
            </div>

            <!-- contact section end -->

            <!-- help section start -->


            <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-center  ">
                <div class="circle  my-auto" >
                    <div class="row justify-content-center text-center my-auto h-100" style="position: relative;"> 
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <i class="fas fa-hands-helping" id="help"></i>
                    </div>
                    <a href="http://localhost/mrmusic/help" id="mid"></a>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <p>HELP</p>
                    </div>
                    </div>
                </div>
            </div>

            <!-- help section end -->

            <!-- feedback section start -->


            <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-center  ">
                <div class="circle  my-auto" >
                    <div class="row justify-content-center text-center my-auto h-100">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto" style="position: relative;">
                        <i class="fas fa-mail-bulk" id="feedback"></i>
                    </div>
                    <a href="" id="mid"></a>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <p>FEEDBACK</p>
                    </div>
                    </div>
                </div>
            </div>

            <!-- feedback section end -->

            <!-- FB section start -->


            <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-center  ">
                <div class="circle  my-auto" >
                    <div class="row justify-content-center text-center my-auto h-100" style="position: relative;">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <i class="fab fa-facebook" id="fb"></i>
                    </div>
                    <a href="http://localhost/mrmusic/" id="mid"></a>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <p>FACEBOOK</p>
                    </div>
                    </div>
                </div>
            </div>

            <!-- FB section end -->

            <!-- INSTA section start -->


            <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 d-flex justify-content-center  ">
                <div class="circle  my-auto" >
                    <div class="row justify-content-center text-center my-auto h-100" style="position: relative;">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <i class="fab fa-instagram" id="insta"></i>
                    </div>
                    <a href="https://instagram.com/mr.m.u.s.i.c_?igshid=ipjsqw0buzyh" id="mid" target="_blank"></a>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-auto">
                        <p>INSTAGRAM</p>
                    </div>
                    </div>
                </div>
            </div>
            
            <!-- INSTA section start -->

        </div>
        
        <!-- copyright section start -->

        <div class="row " >
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <p> &#9400   Copyright Mr. Music </p>
            </div>
        </div>

        <!-- copyright section end -->

        </div>

<!-- footer end  -->


<!--	Script of jquery  -->
<script src="https://code.jquery.com/jquery-3.4.1.js" 
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
    
<!-- Script for theme change -->

<script src="http://localhost/mrmusic/js/theme.js"></script>

<!--	Script for initiate AOS pulgin-->
	
<script> AOS.init(); </script>
</body>
</html>