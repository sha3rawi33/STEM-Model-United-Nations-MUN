<?php


session_start();
//connect to database
$link = mysqli_connect ("localhost", "mun", "forthesakeofourstartup", "mun");
$postData = $statusMsg = ''; 
$status = 'error'; 
 
// If the form is submitted 
if(isset($_POST['submit'])){ 

// Escape user inputs for security
//-------------------------------------------------------------------
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);

 //insert into DB
$sql = "INSERT INTO contact(name, email, message) VALUES ('$name', '$email', '$message')";

		mysqli_query($link, $sql);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Primary Meta Tags -->
<title>Contact Us || STEM Model United Nations</title>
<meta name="title" content="Home || STEM Model United Nations">
<meta name="description" content="STEM Model United Nations, founded in 2017 by STEM October Students. STEM MUN exposes students to the details of diplomacy at an early age. ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://munstem.com/">
<meta property="og:title" content="Home || STEM Model United Nations">
<meta property="og:description" content="STEM Model United Nations, founded in 2017 by STEM October Students. STEM MUN exposes students to the details of diplomacy at an early age. ">
<meta property="og:image" content="https://www.munstem.com/res/img/images/mun.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://munstem.com/">
<meta property="twitter:title" content="Home || STEM Model United Nations">
<meta property="twitter:description" content="STEM Model United Nations, founded in 2017 by STEM October Students. STEM MUN exposes students to the details of diplomacy at an early age. ">
<meta property="twitter:image" content="https://www.munstem.com/res/img/images/mun.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="./res/img/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./res/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./res/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./res/css/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./res/css/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./res/css/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./res/css/util.css">
  <link rel="stylesheet" type="text/css" href="./res/css/main.css">
    <link href="./res/css/style.css" rel="stylesheet" type="text/css">
    <link href="./res/css/style2.css" rel="stylesheet" type="text/css">
    

<!--===============================================================================================-->
    <!-- Bootstrap core CSS -->
    <!-- Material Design Bootstrap -->
    <link href="./res/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="./res/css/style.min.css" rel="stylesheet">

    <link href="./res/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img src="./res/img/logos/logo.png" id="logo">
      </a>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="http://www.munstem.com/">HOME
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.munstem.com/about.html">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.facebook.com/STEMMUN/">
              BLOG
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.munstem.com/contact-us.php">CONTACT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.munstem.com/register/">DELEGTAES'  APPLICATION</a>
          </li>          
        </ul>
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.munstem.com/register/" class="nav-link border border-light rounded animated pulse infinite"
              target="_blank">
              <i class="fa fa-pencil mr-2"></i>
              REGISTER NOW!
            </a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <div class="bg-contact100" style="background-image: url('./res/img/images/bg-01.jpg');">
    <div class="container-contact100">
      <div class="wrap-contact100">
        <div class="contact100-pic js-tilt" data-tilt>
          <img src="./res/img/images/img-01.png" alt="IMG">
        </div>
		
        <form class="contact100-form validate-form" action="contact-us.php" method="post">
          <span class="contact100-form-title">
            We'd be happy to answer your inequiries
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="name" placeholder="Name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Message is required">
            <textarea class="input100" name="message" placeholder="Message"></textarea>
            <span class="focus-input100"></span>
          </div>

          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" id="submit" type="submit" name="submit" value="Submit">
              Send
            </button>
			
			
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- FOOTER  -->
<div id="Footer" class="uk-section uk-section-secondary uk-light">
   <div class="uk-container">
      <div class="uk-child-width-expand@s uk-grid-large uk-grid" uk-grid="">
         <div class="uk-first-column">
            <div>
               <h4 uk-scrollspy="cls:uk-animation-fade; delay: 100" style="" class="uk-scrollspy-inview uk-animation-fade">About us</h4>
               <p style="opacity: 0.6; font-size: 13px; line-height: 1.3; text-align: justify"><span uk-scrollspy="cls:uk-animation-slide-bottom-small; delay: 200" style="" class="uk-scrollspy-inview uk-animation-slide-bottom-small">STEM Model United Nations, founded in 2017 by STEM October Students. STEM MUN exposes students to the details of diplomacy at an early age. It is a platform for future professionals to analyze diplomatic issues from a close proximity and test their knowledge in practical ways to explore new pathways not subscribed in textbooks.</span></p>
            </div>
         </div>
         <div>
            <div class="uk-text-center">
               <div uk-scrollspy="cls:uk-animation-fade; delay: 500" style="" class="uk-scrollspy-inview uk-animation-fade">
                  <img src="./res/img/logos/logo-full.png" id="fLogo">
               </div>
               <div class="vS20"></div>
               <div id="fAdd">
                  <a href="tel:+201116913242" target="_blank"><span uk-scrollspy="cls:uk-animation-slide-bottom-small; delay: 600" style="" class="uk-scrollspy-inview uk-animation-slide-bottom-small">+2 0111 691 3242</span>
                  <div class="vS5"></div></a>
                  <a href="mailto:admin@munstem.com" target="_blank"><span uk-scrollspy="cls:uk-animation-slide-bottom-small; delay: 700" style="" class="uk-scrollspy-inview uk-animation-slide-bottom-small">admin@munstem.com</span></a>
                  <div class="vS5"></div>
                  <a href="https://www.google.com/maps/place/%D9%85%D8%AF%D8%B1%D8%B3%D8%A9+%D8%A7%D9%84%D9%85%D8%AA%D9%81%D9%88%D9%82%D9%8A%D9%86+%D9%81%D9%89+%D8%A7%D9%84%D8%B9%D9%84%D9%88%D9%85+%D9%88%D8%A7%D9%84%D8%AA%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7+%E2%80%8F_+STEM%E2%80%AD/@29.9324141,31.0751268,17z/data=!3m1!4b1!4m5!3m4!1s0x145851f12d8bb4f5:0x9a9b1942e73582df!8m2!3d29.9324095!4d31.0729381" target="_blank"><span uk-scrollspy="cls:uk-animation-slide-bottom-small; delay: 800" style="" class="uk-scrollspy-inview uk-animation-slide-bottom-small">6th of October, Gizah, Egypt</span></a>
               </div>
               <div class="vS20"></div>
               <div id="SocialMedia">
                  <a href="https://www.facebook.com/STEMMUN/" target="_blank" class="uk-margin-small-right uk-icon uk-scrollspy-inview uk-animation-scale-up" uk-icon="icon: facebook" uk-scrollspy="cls:uk-animation-scale-up; delay: 900" style="">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" ratio="1">
                        <path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path>
                     </svg>
                  </a>
               </div>
            </div>
         </div>
         <div>
            <div class="vS10"></div>
            <div id="ContactForm">
               <form method="post" action="send.php">
                  <div class="uk-grid-collapse uk-grid" uk-grid="">
                     <div class="uk-width-1-2@s uk-first-column" style="padding-right: 5px">
                        <input class="uk-input fText" type="text" placeholder="FULL NAME" name="name" required="required">
                     </div>
                     <div class="uk-width-1-2@s">
                        <input class="uk-input fText" name="Email" type="email" placeholder="EMAIL" required="required">
                     </div>
                  </div>
                  <div class="vS5"></div>
                  <div class="uk-width-1-1">
                     <textarea class="uk-input fTextarea" name="message" placeholder="YOUR TEXT HERE" required="required"></textarea>
                  </div>
                  <div class="vS5"></div>
                  <div class="uk-width-1-1">
                     <input class="fButton uk-input uk-width-1-1" type="submit" value="submit">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="vS30"></div>
      <hr style="opacity: 0.5; margin-top: 0; margin-bottom: 10px">
      <div class="uk-child-width-expand@s uk-grid" id="Foot" uk-grid="">
         <div class="text uk-first-column"><span uk-scrollspy="cls:uk-animation-fade; delay: 1200" style="" class="uk-scrollspy-inview uk-animation-fade">© 2019 STEM Model United Nations, All Rights Reserved</span></div>
         <div class="uk-text-center">
            <a href="#top" uk-totop="" uk-scroll="duration: 3000;" uk-scrollspy="cls:uk-animation-slide-bottom-small; delay: 1600; repeat: true" class="uk-totop uk-icon uk-scrollspy-inview uk-animation-slide-bottom-small" style="">
               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" ratio="1">
                  <polyline fill="none" stroke="#000" stroke-width="1.2" points="1 9 9 1 17 9 "></polyline>
               </svg>
            </a>
         </div>
         <div style="opacity: 0.6;" class="uk-text-right uk-scrollspy-inview uk-animation-fade" uk-scrollspy="cls:uk-animation-fade; delay: 1250">  <span class="text"> Website by: </span> <a href="https://www.facebook.com/sha3rawi33" target="_blank" title="" id="ulkar">sha3rawi</a>  &  <a href="https://www.facebook.com/moezoma" target="_blank" title="" id="ulkar">moezoma</a> </div>
      </div>
   </div>
</div>



<!--===============================================================================================-->
  <script src="./res/js/jquery-3.2.1.min.js" type="28acaed97d28205e4e04dd32-text/javascript"></script>
<!--===============================================================================================-->
  <script src="./res/js/popper.js" type="28acaed97d28205e4e04dd32-text/javascript"></script>
  <script src="./res/js/bootstrap.min.js" type="28acaed97d28205e4e04dd32-text/javascript"></script>
<!--===============================================================================================-->
  <script src="./res/js/select2.min.js" type="28acaed97d28205e4e04dd32-text/javascript"></script>
<!--===============================================================================================-->
  <script src="./res/js/tilt.jquery.min.js" type="28acaed97d28205e4e04dd32-text/javascript"></script>
  <script type="28acaed97d28205e4e04dd32-text/javascript">
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="./res/js/main.js" type="28acaed97d28205e4e04dd32-text/javascript"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="28acaed97d28205e4e04dd32-text/javascript"></script>
<script type="28acaed97d28205e4e04dd32-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="28acaed97d28205e4e04dd32-|49" defer=""></script></body>
</html>
