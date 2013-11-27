<?php
$this->load->helper('url');
error_reporting(0);
?>

<html lang="en">

<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>Portfolio Site:Equiplex Developers Community</title>

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/profile/style/style.css");?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/profile/colors/lemon.css");?>" id="colors" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/profile/style/animations.css");?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/profile/style/responsive-nav.css");?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/profile/style/flexslider.css");?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/profile/style/jquery.bxslider.css");?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/profile/style/font-awesome.min.css");?>" />

<!-- Styleswitcher -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/profile/styleswitcher/styleswitcher.css");?>" />

<!-- Google Web Fonts -->
<link href='<?php echo base_url("assets/profile/fonts.googleapis.com/css3fab.css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'");?>'>
<link href='<?php echo base_url("assets/profile/fonts.googleapis.com/css984b.css?family=Raleway:400,100,200,300,600,700,500' rel='stylesheet' type='text/css'");?>'>

</head>

<body>

<!--
<div id="page-loader">
  
    <div class="loader animated turn-around"></div>
    
</div> Loader -->
<section id="intro">

  <div class="welcome container dark">
  
	<!-- Intro text -->
    <span class="welcome-text">Welcome to <?php echo ($profile[0]['full_names']."'s"); ?> <span class="highlited">portfolio</span> site!</span>

  </div>

</section>
<!-- Intro / End -->

<!-- Navigation -->
<nav id="navigation">

  <div class="container dark">
  
    <!-- Logo -->
    <div class="logo"><a href="#home"><img src="images/logo.png" alt="" /></a></div>
    <!-- Mobile navigation -->
    
    <!-- Main navigation -->
    <ul id="nav" class="nav-menu">
        <li><a href="#home">HOME PAGE</a></li>
        <li><a href="#about">WHO AM I?</a></li>
        <li><a href="#skills">MY SKILLS</a></li>
        <li><a href="#work">WHAT HAVE I DONE?</a></li>
        <li><a href="#contact">GET IN TOUCH</a></li>
    </ul>
  
  </div>

</nav>
<!-- Navigation / End -->

<!-- Home -->
<section id="home" class="black parallax parallax_background_01">
	
  <div class="headings dark flexslider">
  	<ul class="slides">
    	<li>
        	<h1 class="short bordered">My friends call me <?php echo $profile[0]['username'] ?> which I like!</h1>
        </li>
         <li>
        	<h1 class="short bordered">I am from <?php echo $profile[0]['country'].$profile[0]['city'] ?></h1>
        </li>
        <li>
          <h1 class="short bordered">and am a member of the equiplex developers community :)</h1>
        </li>
    </ul>
  </div>

</section>
<!-- Home / End -->

<!-- About Us -->
<section id="about" class="padded">
  
  <div class="container">
    
    <!-- Heading -->
    <div class="heading text-center short">
    	<h1 class="short">I know I'm awesome</h1>
        <span class="heading-subtitle highlited">
      <?php echo $profile[0]['aboutme'] ?>
        </span>
    </div>
    
    <!-- Squares area -->
    <div class="squares">
      <!-- First row -->
      <div class="squares-first-row">
      	<!-- Single square -->
        <div class="bended-square half-offset animated fade-in">
            <div class="bended-photo"><img src="<?php echo $profile[0]['avatar'] ?>" alt="" /></div>
        </div>
      	<!-- Single square -->
        <div class="bended-square offset last-in-row animated fade-in appear-third">
             <div class="bended-photo"><img src="<?php echo $profile[0]['coverphoto'] ?>" alt="" /></div>
        </div>
      </div>
      <div class="clear"></div>
      <!-- Second row -->
      <div class="squares-second-row">
      	<!-- Single square -->
        <div class="bended-square outline animated fade-in">
            <div class="stat">
                <div class="clear"></div>
                <span class="stat-description">FRIENDS</span>
            </div>
        </div>
        <!-- Single square -->
        <div class="bended-square outline animated fade-in appear-second">
            <div class="stat">
                    <div class="clear"></div>
                <span class="stat-description">PROJECTS</span>
            </div>
        </div>
        <!-- Single square -->
        <div class="bended-square outline animated fade-in appear-third">
            <div class="stat">
                <div class="clear"></div>
                <span class="stat-description">CLIENTS</span>
            </div>
        </div>
        <!-- Single square -->
      <!-- Third row -->
      <div class="squares-third-row animated fade-in appear-third">
      	<!-- Single square -->
        <div class="bended-square one-and-half-offset animated fade-in appear-second">
            <div class="bended-photo"><img src="<?php echo $profile[0]['avatar'] ?>" alt="" /></div>
        </div>
      </div>
      <div class="squares-third-row animated fade-in appear-third">
        <!-- Single square -->
        <div class="bended-square one-and-half-offset animated fade-in appear-second">
            <div class="bended-photo"><img src="<?php echo $profile[0]['coverphoto'] ?>" alt="" /></div>
        </div>
      </div>
    
    </div>
    
  </div>
  
</section>
<!-- About Us / End -->

<!-- Services -->
<section id="skills" class="black parallax parallax_background_02 long-padded">
  
  <div class="container dark">
    
    <!-- Heading -->
    <div class="heading">
    	<h1 class="short">What I can Do?</h1>
        <span class="heading-subtitle highlited">
        	Check out some of my skills
        </span>
    </div>
    
    <!-- Service-->
    <?php 
    $i = 0 ;
 While($i < count($skills)){
  ?>
    <div class="service-box one-fourth animated fade-in">
    	<div class="service-icon"><i class="icon-eye-open"></i></div>
        <h4 class="medium-short"><?php echo $skills[$i]['skill'] ?></h4>
    </div>
    <!-- Service-->
    <?php
    $i++;
  }
  if(count($skills)==0){
    ?>

    <div class="service-box one-fourth animated fade-in">
      <div class="service-icon"><i class="icon-eye-open"></i></div>
        <h4 class="medium-short">Oops I haven't added any skills yet to my profile</h4>
    </div>
    <?php
  }
  ?>

  </div>
  
</section>
<!-- Services / End -->

<!-- Works -->
<section id="work" class="padded">
  
  <div class="container">
    
    <!-- Heading -->
    <div class="heading">
    	<h1 class="short">What I have done ?</h1>
        <span class="heading-subtitle highlited">
        	Some awesome projects I have worked on!
        </span>
    </div>
    

    <!--   <div class="project-details clearfix">
        <div class="project-content"></div>
        <div class="project-close"><img src="images/design/close.png" alt="x" /></div>
    </div>
    - Projects Details (ajax) -->
 
    <!-- Projects feed -->
    <div class="projects-feed dark">
    	<ul>

  <?php
 $i=0;
 While($i < count($projects)){
 // var_dump($portfoliopics);
  ?>

            <li>
              <a href="<?php echo base_url("index.php/products/reviewproduct/".$projects[$i]['product_id'] );?>">   
            	<div class="project-photo">
                	<img src="<?php echo $projects[$i]["product_pic"] ;?>" alt="" />
                </div>
                <div class="project-info">
                	<span class="project-title"><?php echo $projects[$i]["product_name"] ;?></span>
                    <span class="project-category highlited"><?php echo $projects[$i]["projectcategory"] ;?></span>
                </div>
              </a>
            </li>
<?php
$i++;
}
  if(count($projects)==0){
    ?>

    <div class="service-box one-fourth animated fade-in">
      <div class="service-icon"><i class="icon-eye-open"></i></div>
        <h4 class="medium-short">Oops I haven't added any projects yet to my profile</h4>
    </div>
    <?php
  }
  ?>


                   </ul>
    </div>
    
  </div>
  
</section>
<!-- Works / End -->


<!-- Footer -->
<footer id="contact" class="black parallax parallax_background_04 padded">
  
  <div class="container dark">
  	
    <!-- Contact List -->
    <ul class="contact-list">
      <li class="one-third animated bounce-in">
        <div class="contact-icon"><i class="icon-phone"></i></div>
        <span class="contact-title"><?php echo $profile[0]['phone_number'] ?></span>
        <span class="contact-description highlited">CALL ME!</span>
      </li>
      <li class="one-third animated bounce-in appear-second">
      	<a href="mailto:<?php echo $profile[0]['email'] ?>">
          <div class="contact-icon"><i class="icon-envelope"></i></div>
          <span class="contact-title"><?php echo $profile[0]['email'] ?></span>
          <span class="contact-description highlited">WRITE TO ME!</span>
        </a>
      </li>
 	</ul> 
    
  	<hr class="sep50" />
    
    <!-- Copyright & Social  -->
    <div class="end text-center">
    	<span class="copyright">2013© <a href = "http://equiplexdevelopers.com">Equiplex Business Solutions</a> ALL RIGHTS RESERVED.</span>
          </div>
  
  </div>  
  
</footer>
<!-- Footer / End -->

<!-- Scripts -->
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery-1.10.2.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery-ui.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery.easing.1.3.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery.flexslider.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery.validate.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery.localscroll-1.2.7-min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery.scrollTo-1.4.3.1-min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery.parallax-1.1.3.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery.bxslider.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery.fitvids.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/responsive-nav.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/jquery.appear.js")?>"></script>

<!-- Custom Script -->
<script type="text/javascript" src="<?php echo base_url("assets/profile/javascript/custom.js")?>"></script>  

<!-- Styleswitcher -->
<script type="text/javascript" src="<?php echo base_url("assets/profile/styleswitcher/styleswitcher.js")?>"></script>

<!-- Styleswitcher -->
<div id="style-switcher">
	<a class="close icon-chevron-left"></a>
    <span class="label">Parallax:</span>
    <ul class="option-switcher parallax-switcher">
    	<li><a id="yes-parallax" class="active">ON</a></li>
        <li><a id="no-parallax">OFF</a></li>
    </ul>
    <hr class="sep20">
    <span class="label">Color:</span>
	<ul class="color-switcher">
    	<li><a id="lemon" class="active"></a></li>
        <li><a id="orange"></a></li>
        <li><a id="blue"></a></li>
        <li><a id="navy-blue"></a></li>
        <li><a id="red"></a></li>   
        <li><a id="yellow"></a></li>
        <li><a id="pink"></a></li>
        <li><a id="violet"></a></li>
    </ul>
</div>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
-->

</body>


</html>