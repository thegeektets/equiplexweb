<body>
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
            <a href="" class = 'win-command' rel ='tootip' title ='Users'>
                <span class = 'win-commandicon win-commandring icon-users-3'></span>
                <span class = 'win-label'>Users</span>
              </a>
          </li>


                    </ul>
                  </nav>
                 </div>
              </div>

<!-- Navigation bar ends -->
      
      <!-- Logo & Navigation ends -->
     

      <div class="page-title">
         <div class="container">
            <h2><i class="win-commandicon win-commandring icon-bubbles-2"></i> Equiplex Developers Community <small>share with the rest of us</small></h2>
            <hr />
         </div>
      </div>
      
      <!-- Page content -->
      
<div class="row">

           <div class="container">

        <div class="col-md-3">
          <div class="fwidget">
            <h6>  <span class = 'win-commandicon win-commandring icon-bubbles-2'></span>
              What is <a href="<?php echo base_url("index.php/community")?>">
             Equiplex Developers Community ?</a> </h6>
            <p>
             Equiplex Developers Community is a platform built and mantained by <a href="<?php echo base_url("index.php/home")?>">
             Equiplex Business Solutions.</a>This platform allows for developers to share their products and create their own 
             portfolio sites.To promote acitve problem solving <a href="<?php echo base_url("index.php/community")?>">
             Equiplex Developers Community</a> has a discussion <a href="<?php echo base_url("index.php/forum")?>">
        forum</a> </p>
          </div>
        </div>

      <div class="widgets">
        <div class="col-md-3">
          <div class="fwidget">
            <h6>
              <span class = 'win-commandicon win-commandring icon-user'></span>
              <a href="<?php echo base_url("index.php/users")?>">
              Join Community</a> </h6>   <p>
              Join other developers today and share ,connect ,learn and above all belong.
              <img src="<?php echo base_url("assets/img/logo.png")?>">
 
            </p>
              <h6>
                <span class = 'win-commandicon win-commandring icon-users'></span>
              
              Developer Support</h6>
            <p>
              Get help on your project from other developers and us anytime on our forums or you could 
              always call us on the contacts given below and we will be glad to help.


              </p>


            </div>
        </div>
       

        <div class="col-md-3">
          <div class="fwidget">
              
              <h6>
                <span class = 'win-commandicon win-commandring icon-users'></span><a href="<?php echo base_url("index.php/products")?>">
             Share with the rest of us</a> </h6>
            <p>
              people want to know what you are working on and what you have already done 
              because you are an awesome developer or designer.So go ahead create an account today here
              and equiplex business solutions will help you share your work with the rest of us.
            </p>


             </div>

        </div>


        <div class="col-md-3">
          <div class="fwidget">
           
          </div>
        </div>
           <div class="col-md-3">
          <div class="fwidget">
            <h6>
                <span class = 'win-commandicon win-commandring icon-users'></span>
              Community Members</h6>
              <div class="members" style ="height :380px; overflow :scroll;">
              <ul>
              <?php
              $i=0;
              while ($i < count($members)){
              ?>
              <li><a href ="<?php echo base_url("index.php/users/profile/".$members[$i]['username']);?>"><?php echo ($members[$i]['full_names']) ;?></a>
           </li>
              <?php
             $i++;
           
            }
            ?>
          </ul>
              </div>
          </div>
        </div>
         </div>

      </div>

  
      

    
    </div>
<div class ="container">
<footer style = "background:#000;">
 
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
 
    <div class="row">

      <div class="widgets">
        <div class="col-md-4">
          <div class="fwidget">

      </div>
    </div>




    <div class="row"> 
      <div class="col-md-12">
          <div class="copy">
             <p>&copy; <a href="#">Equiplex Business Soluitons</a> - <a href="">Home</a> | <a href = '#'>Products</a> |<a href = '#'>Forum</a>| <a href = '#'> Blog</a> | <a href = '#'>About Us</a></p>
          </div>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
</footer> 

</body>

</html>