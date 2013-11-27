<html>
<head>
	  <title><?php echo $title.":".$portfolio[0]["product_name"] ?>|Equiplex Business Solutions</title>
<!-- Navigation bar starts -->

            <div class="navbar bs-docs-nav" role="banner" style ="background:#001A56;">
              <div class="container" >
               <div class="navbar-header">
                 <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
               </div>
               
                  <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav" >
    <li>
            <a href="<?php echo base_url("/index.php/home")?>" class = 'win-command' rel ='tootip' title ='Home'>
                <span class = 'win-commandicon win-commandring icon-home'></span>
                <span class = 'win-label'>Home</span>
              </a>
          </li>
          <li>
            <a href="<?php echo base_url("/index.php/products")?>" class = 'win-command' rel ='tootip' title ='Products'>
                <span class = 'win-commandicon win-commandring icon-bag'></span>
                <span class = 'win-label'>Products</span>
              </a>
          </li>
          
          <li>
            <a href="<?php echo base_url("/index.php/community")?>" class = 'win-command' rel ='tootip' title ='Equiplex Developers Community'>
                <span class = 'win-commandicon win-commandring icon-bubbles-2'></span>
                <span class = 'win-label'>Developers Community</span>
              </a>
          </li>
          <li>
            <a href="<?php echo base_url("/index.php/about")?>" class = 'win-command' rel ='tootip' title ='About'>
                <span class = 'win-commandicon win-commandring icon-info-2'></span>
                <span class = 'win-label'>About Us</span>
              </a>
          </li>
          <li>
            <a href="<?php echo base_url("/index.php/users")?>" class = 'win-command' rel ='tootip' title ='Users'>
                <span class = 'win-commandicon win-commandring icon-users-3'></span>
                <span class = 'win-label'>Users</span>
              </a>
          </li>


                    </ul>
                  </nav>
                 </div>
              </div>





	<body>

<div class="content projects">
  <div class="container">

    <h2>Equiplex Developers Community : Project Review</h2>
    <p class="big grey">share with the rest of us.</p>
    <hr />

                        <div class="row">

                           <div class="col-md-8 col-sm-8">
                            <!-- Title -->
                              <h3><?php echo $portfolio[0]["product_name"] ;?></h3>
                               <div id="carousel-example-generic" class="carousel slide">
                              
                                 <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
  
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                  <div class="active item"><img src="<?php echo $portfolio[0]["product_pic"]?>"/></div>
                                  <div class="item"><img src="<?php echo $portfolio[0]["product_pic"]?>"/></div>
                                </div>
                                
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                  <span class="icon-prev"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                  <span class="icon-next"></span>
                                </a>
                                
                              </div>
                              
                              <hr />
                              
                           </div>          
                           
                           <div class="col-md-4 col-sm-4"> 
                              <!-- Project details -->
                              <div class="prdetails well">
                                 <!-- Project title -->
                                 <h6 class="title">Project Details</h6>
                                 <!-- Project para -->
                                 <p>
                                 <?php echo $portfolio[0]["product_desc"] ;?></p>




                                 <hr />
                                 <strong>Tools Used</strong>
                                 <!-- List -->
                                 <ul>
                                  	<?php
 $i=0;
 While($i < count($tools)){


 echo "<li>".$tools[$i]["tool"] ."</li>";
 $i++;

}
 ?>        </ul>
                                 <hr />

                                         <h3>Developer Details</h3>
            <hr/>
					<img alt="200*180" data-src="holder.js/200x180" style="width: 200px; height: 180px;" 
					src="<?php echo $developer[0]["avatar"] ;?>">
				<table>
				<tr><td>Username :</td><td><a href="<?php echo base_url("/index.php/users/profile/".$developer[0]["username"])?>"><?php echo $developer[0]["username"] ;?></td></tr>
				<tr><td>Fullname :</td><td><?php echo $developer[0]["full_names"] ;?></td></tr>
				<tr><td>Country :</td><td><?php echo $developer[0]["country"] ;?></td></tr>
                <tr><td>Company :</td><td><?php echo $developer[0]["company"] ;?></td></tr>


					</table>


                                 <!-- Buttons -->
                                 <div class="button"><a href="#">Share Project</a> </div>
                                 <br />
                              </div>
                           </div>
                        </div>

                           <div class="row">
                              <div class="col-md-12">
                               <div class="bor"></div>
                                 <div class="related-projects">
                                   <!-- Title -->
                                   <h5 class="title">Other Projects done by <?php echo $portfolio[0]["full_names"] ;?> </h5>
                                   <!-- Image thumbnail with links -->
	<?php
 $i=0;
 While($i < count($others)){
?>
 	<a href="<?php echo base_url("/index.php/products/reviewproduct/".$others[$i]['product_id'])?>">
 	<img src="<?php echo $others[$i]['product_pic'] ?>">
    </a>
<?php
 $i++;

}
 ?>
                                 </div>
                               <div class="bor"></div>
                              </div>
                           </div>

 



<footer style = "background:#000;">
   <div class="container">
    <div class="row">

      <div class="widgets">
       

        <div class="col-md-6">
          <div class="fwidget">
            <h6>Contact Us</h6>
            <ul>
                <li><a href="#">Email :sales@equiplexdevelopers.com</a></li>
              <li><a href="#">Phone :0718325300</a></li>
                   </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="fwidget">
            <h6>Developer Support</h6>
            <ul>
              <li><a href="#">Email :griffinmuteti@equiplexdevelopers.com</a></li>
              <li><a href="#">Phone :0702990800</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
 
  <div class="container">
    <div class="row">

      <div class="widgets">
        <div class="col-md-4">
          <div class="fwidget">

      </div>
    </div>




    <div class="row"> 
      <div class="col-md-12">
          <div class="copy">
             <p>Copyright &copy; <a href="#">Equiplex Business Soluitons</a> - <a href="">Home</a> | <a href = '#'>Products</a> |<a href = '#'>Forum</a>| <a href = '#'> Blog</a> | <a href = '#'>About Us</a></p>
          </div>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
</footer> 

</body>

</html>