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
  
    <title >Error</title>

    <link rel="icon"  type="image/jpg/png"  href="http://localhost/mrmusic/images/error-icon-25239.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/mrmusic/images/animate.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css" >
    <link rel="stylesheet" href="http://localhost/mrmusic/css/theme.css" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
</head>
<body onload = checkCookie()>
    <section class="section">
    <!-- NavBar -->
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
                    <a href="http://localhost/mrmusic/search" class="active p-auto text-center" target="_self" title="Click to search songs">
                        <button class="btn searchbtn ml-3 mr-3"><i class="fab fa-searchengin" ></i></button>
                    </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row  toggler">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 text-center">
            <label for="togle" class="switch" title="Change Theme">
                <input type="checkbox" name="toggle" id="togle" onclick="setCookies()">
                <div class="slider round"></div>
            </label>
            </div>
        </div>
    </section>
        <div class="row text-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <img src="images\error-icon-25239.png" alt="Error" width="300px" height="300px">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="font-size: 30px; color:red">
                <p>There is some server error please try again after some time </p>
                <p>or</p>
                <p>send error mail</p>
            </div>
        </div>

        <div id="footer" class="w-100 mt-3">
        <div  class="row row1 w-100 pt-3 " data-aos="zoom-in" data-aos-duration="2000">
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
            
        </div>
        
        <div class="row " >
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <p> &#9400   Copyright Mr. Music </p>
            </div>
        </div>
        </div>
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