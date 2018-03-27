<?php require_once("data.php"); ?>
<?php require_once("function.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="geo.position" content="latitude; longitude">
<meta name="geo.placename" content="Bhimtal">
<meta name="geo.region" content="263136">

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
<title><?php echo  $SEO_HOME_TITLE; ?></title>
<link rel="shortcut icon" href="images/favicon.ico" type="images/x-icon" />
<link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
<link rel="stylesheet" href="rs-plugin/css/settings.css" />
<!-- Support for HTML5 -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Enable media queries on older bgeneral_rowsers -->
<!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<!-- 
<div class="blackOverlay blackOverlay1">
  <div class="overlayBox overlayBox2 overlayBoxF">
    <div class="overlayClose"></div>
    <div class="overlayForm">
        <div class="row">
          <h3 class="text-center">Submit Your Enquiry</h3>
          <form class="submit-form" action="#">
          <div>
            <label>Name</label>
            <input type="text" value="" name="name">
           </div> 
            <div>
            <label>Email</label>
              <input type="email" name="email">
            </div>
            <div>
            <label>Phone</label>
              <input type="text" name="phone">
            </div>
            <div>
            <label style="vertical-align: 120%;">Message</label>
              <textarea class="text" name="message" rows="2"></textarea>
            </div>
            <div class="submit-form text-center">
              <button type="submit"><span>Send Enquiry</span></button>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
<div class="blackOverlay blackOverlay2">
  <div class="overlayBox overlayBox2">
    <div class="overlayClose"></div>
    <div class="overlayForm">
        <div class="row">
          <h3 class="text-center">Submit Your Enquiry</h3>
          <form class="submit-form" action="#">
          <div>
            <label>Name</label>
            <input type="text" value="" name="name">
           </div> 
            <div>
            <label>Phone</label>
              <input type="text" name="phone">
            </div>
            <div>
            <label style="vertical-align: 120%;">Message</label>
              <textarea class="text" name="message" rows="2"></textarea>
            </div>
            <div class="submit-form text-center">
              <button type="submit"><span>Send Sms</span></button>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>
<div class="blackOverlay blackOverlay3">
  <div class="overlayBox overlayBox2">
    <div class="overlayClose"></div>
    <div class="overlayForm">
        <div class="row">
          <h3 class="text-center">Submit Your Enquiry</h3>
          <form class="submit-form" action="#">
          <div>
            <label>Name</label>
            <input type="text" value="" name="name">
           </div> 
            <div>
            <label>Email</label>
              <input type="email" name="email">
            </div>
           
            <div>
            <label style="vertical-align: 120%;">Message</label>
              <textarea class="text" name="message" rows="2"></textarea>
            </div>
            <div class="submit-form text-center">
              <button type="submit"><span>Send Email</span></button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div> -->

<div class="blackOverlay blackOverlay4">
  <div class="overlayBox">
    <div class="overlayClose"></div>
    <div class="overlayImage"><img src="#" alt="images"/></div>
    <div class="overlayForm">
      <h3>Submit Your Enquiry</h3>
      <div class="content">
        <div id="form_area">
          <div class="row">
            <form class="submit-form" action="#">
          <div>
            <label>Name</label>
            <input type="text" value="" name="name">
           </div> 
            <div>
            <label>Email</label>
              <input type="email" name="email">
            </div>
            <div>
            <label>Phone</label>
              <input type="text" name="phone">
            </div>
            <div>
            <label style="vertical-align: 120%;">Message</label>
              <textarea class="text" name="message" rows="2"></textarea>
            </div>
            <div class="submit-form text-center">
              <button type="submit"><span>Send Enquiry</span></button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<header class="tz-header tz-header2">
  <div class="container">
    <h3 class="tz-logo pull-left"> <a href="index.php"> <img src="images/logo.png" alt="Logo"> </a> </h3>
    <button data-target=".nav-collapse" class="btn-navbar tz_icon_menu pull-right" type="button"> <i class="fa fa-bars"></i> </button>
    <!-- <button class="pull-right tz-search"> <i class="fa fa-search"></i></button> -->
    <nav class="pull-left">
      <ul class="nav-collapse">
        <li> <a <?php if($page=="index.php") echo 'class="active"'; ?>  href="index.php">HOME</a></li>
        <li> <a <?php if($page=="about.php") echo 'class="active"'; ?> href="about.php">ABOUT</a></li>
        <li> <a <?php if($page=="services.php") echo 'class="active"'; ?> href="services.php">OUR SERVICES </a>
        </li>
        <li> <a <?php if($page=="gallery.php") echo 'class="active"'; ?> href="gallery.php">GALLERY</a></li>
        <li> <a <?php if($page=="contact.php") echo 'class="active"'; ?> href="contact.php">CONTACT</a></li>
      </ul>
    </nav>
    <div class="pull-right">
        <!-- <div class="enquiry "> 
        <a href="#" class="showOverlay2"><img alt="Send Sms" src="images/icon/send-sms.png"></a> 
        <a href="#" class="showOverlay3"><img alt="Send Email" src="images/icon/send-email.png"></a> 
        <a href="#" class="showOverlay1"><img alt="Send Enquiry" src="images/icon/send-enquiry.png"></a> 
      </div> -->
    </div>
  </div>
  <!--end class container-->
  <!-- <div class="tz-form-search">
    <div class="container">
      <form method="get" action="#">
        <input type="text" placeholder="Search..." name="search" id="tz-search-input" class="tz-search-input">
        <input class="hidden" type="submit" value="Search">
        <i class="fa fa-times tz-form-close"></i>
      </form>
    </div>
  </div> -->
  <!--end class tz-form-search--> 
</header>
<!--end class tz-header-->
