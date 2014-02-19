<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="Wild Wood Creations is where your dreams of beautiful furniture and home decore begin. We specialize in log, rustic, and western themes.">
<meta name="keywords" content="Wild Wood, Custom Woodwork">
<meta name="author" content="Prasuhn Design LLC">
<title>Wild Wood Creations</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/foundation-icons.css">
<script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>
<div id="opening">
  <div class="row">
  	<div id="logo" class="small-12 columns text-center">
  		<img src="img/logo.png" />
  	</div>
  </div>
  <div class="row">
    <div class="small-12 columns">
      <nav class="nav">
        <ul>
          <li><a href="index.php">About Us</a></li>
          <li><a href="about.php">Portfolio</a></li>
          <li><a href="about.php">For Sale</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div><!-- Closes Opening -->
<div class="row">
  <div class="small-12 columns">
    <ul class="example-orbit" data-orbit>
      <li>
        <img src="http://lorempixel.com/1000/400" alt="slide 1" />
        <div class="orbit-caption">
          Caption One.
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/1000/400" alt="slide 2" />
        <div class="orbit-caption">
          Caption Two.
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/1000/400" alt="slide 3" />
        <div class="orbit-caption">
          Caption Three.
        </div>
      </li>
    </ul>
  </div>
</div>

<div class="row">
  <div class="small-12 columns">
    <p>Wild Wood Creations is where your dreams of beautiful furniture and home decore begin.   We specialize in log, rustic, and western themes.   We take pride in our work and strive to please our customers.   We take the extra time to ensure we understand exactly what you want.   You will be glad you chose us for all your furniture and home decor needs.</p>
  </div>
</div>



<script src="js/jquery.js"></script>
<script src="js/vendor/fastclick.js"></script>
<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation({
    orbit: {
      timer_speed: 5000, // Sets the amount of time in milliseconds before transitioning a slide
      resume_on_mouseout: true, // If pause on hover is set to true, this setting resumes playback after mousing out of slide
      slide_number: false,
    }
  });
    $("nav a[href^='#']").click( function( e ) {
      e.preventDefault();
      var navId = $(this).attr("href");
      $("html, body").animate({scrollTop: $(navId).offset().top - 54 }, "slow");
      return false;
      });
</script>
</body>
</html>
