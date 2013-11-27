<html>

<body>

<!-- Header Starts -->
<header>
    <div class="col-md-2">
         <img src="<?php echo base_url("assets/img/logo.png")?>">
         
      </div>
  
  <div class="container">
        <div class="row">
        <div class="col-md-8 col-sm-8">
        <div class="logo">
          <h1><a href="#"><span style="color:#000">Equiplex </span>Business <span style ="color: #001A56;">Solutions</span></a></h1>
          <div class="hmeta">your software experts</div>
        </div>
      </div>
     
    </div>
  </div>
</header>

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
                <span class = 'win-label'>Devloper Community</span>
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
<!-- Navigation bar ends -->

<div class="content">
  <div class="container">

  <h2>Products</h2>
  <p class="big grey">products from equiplex developers community :developers and designers</p>
  <hr />

  <div class="row">
    <div class="col-md-12">

                    <div class="img-portfolio">
        <!--            <p>
                           <ul id="filters">
                             <li><a href="#" data-filter="*" class="btn btn-success">All</a></li>
                             <li><a href="#" data-filter=".one" class="btn btn-success">One</a></li>
                             <li><a href="#" data-filter=".two" class="btn btn-success">Two</a></li>
                             <li><a href="#" data-filter=".three" class="btn btn-success">Three</a></li>
                             <li><a href="#" data-filter=".four" class="btn btn-success">Four</a></li>
                             <li><a href="#" data-filter=".five" class="btn btn-success">Five</a></li>
                           </ul>
                    </p>
            -->            
                        
                    <div id="portfolio">
                       


  <?php
 $i=0;
 While($i < count($portfolio)){
 // var_dump($portfoliopics);
  ?>
                       <div class="element one three"><a href="<?php echo $portfolio[$i]["product_pic"] ;?>" class="prettyphoto" style ="background:#001A56;">
                       <img src="<?php echo $portfolio[$i]["product_pic"] ;?>" alt=""/>
                           <!-- Portfolio caption -->
                           <div class="pcap" style ="background:#001A56;">
                          <h5><?php echo $portfolio[$i]["product_name"] ;?></h5></a>
                           Product Developer :<a href="<?php echo base_url("index.php/users/profile/".$portfolio[$i]["username"] );?>"><?php echo $portfolio[$i]["full_names"] ;?></a><br/>
                           Date Uploaded :<p><?php echo $portfolio[$i]["date_time"] ;?></p> <br/> 

                           <a class="btn btn-primary" href="products/reviewproduct/<?php echo $portfolio[$i]["product_id"]?>">Review</a>
</p>                   </div>
                       </a>
                       </div>
  <?php
$i++;
  }
?>                       
                         </div>
               </div>

  

    </div>
  </div>


  </div>
</div>




</ul>
</div>
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

 </body>
</html>