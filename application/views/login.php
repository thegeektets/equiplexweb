<!DOCTYPE html>
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
<!-- Navigation bar ends -->

<div class="content">
  <div class="container">

          <div class="register">
              <div class="row">

                <div class="col-md-12">
                  <div class="lrform">
                     <h5><?php echo $success ?> Login into your Account</h5>
                              <div class="form">
                                      <!-- Register form (not working)-->
                                       <form class="form-horizontal" <?php echo form_open('users/index'); ?>
                                                  <!-- Username -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="username">Username</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="username"  name = "user" value="<?php echo set_value('user'); ?>"> 
                                              <?php echo form_error('user'); ?>
                                 
                                            </div>
                                          </div>
                                          <!-- Password -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="email">Password</label>
                                            <div class="col-md-9">
                                              <input type="password" class="form-control" id="password" name = "pass" value="<?php echo set_value('pass');  ?>">
                                              <?php echo form_error('pass'); ?>

                                            </div>
                                          </div>
                                          <div class="form-group">
                                             <div class="col-md-9 col-md-offset-3">
                                                <label class="checkbox-inline">
                                                <input type="checkbox"> Remember me
                                                </label>
                                             </div>
                                          </div>                                                                               
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-md-9 col-md-offset-3">
												<button type="submit" class="btn btn-default">Login</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
                                          </div>
                                      </form>
                                             Don't have Account? <a href="users/register">Register</a>
                                    </div> 
                                  </div>

                </div>
              </div>
            </div>              


  <div class="border"></div>




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