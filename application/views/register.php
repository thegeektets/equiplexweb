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
                <div class="col-md-6 col-sm-6">
                  <h2>Register Today</h2>
                  <p class="big grey">Create your Equiplex Developers Community Account</p>
                  <p>This account will allow you to create a portfolio page site,share products and contribute to the community forums</p>            
                  <p>Create account today and invite your friends to the community.</p>
                </div>

                    


                <div class="col-md-6 col-sm-6">
                  <div class="formy" style ="background:#001A56;" >
                     <h5>Register for New Account</h5>
                    
                                  <div class="form">
                                      <!-- Register form (not working)-->
                                       <form class="form-horizontal" <?php echo form_open('users/register'); ?>
                                          <!-- Name -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="name">Name</label>
                                          <div class="col-md-9">
                                          <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>">
                                              <?php echo form_error('name'); ?>
                                            </div>
                                          </div>   
                                          <!-- Email -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="email">Email</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>">
                                           <?php echo form_error('email');  ?>

                                            </div>
                                          </div>
                                          <!-- Select box -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="select">Gender</label>
                                            <div class="col-md-9">                               
                                                <select class="form-control" name="gender">
                                                <option>&nbsp;</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                </select>  
                       
                                                 <?php     echo form_error('gender');  ?>
                                            </div>
                                          </div>                                           
                                          <!-- Username -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="username">Username</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>">
                                                <?php echo form_error('username');    ?>
                                            </div>
                                          </div>
                                          <!-- Password -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="email">Password</label>
                                            <div class="col-md-9">
                                              <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>">
                                               <?php echo form_error('password'); ?>
                                            </div>
                                          </div>
                                          <!-- Checkbox -->
                                          <div class="form-group">
                                             <div class="col-md-9 col-md-offset-3">
                                                <label class="checkbox-inline">
                                                   <input type="checkbox" id="inlineCheckbox1" value="agree"> Agree with Terms and Conditions
                                                </label>
                                             </div>
                                          </div> 
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                       <div class="col-md-9 col-md-offset-3"> 
                        <button type="submit" class="btn">Register</button>
                        <button type="reset" class="btn">Reset</button>
                      </div>
                                          </div>
                                      </form>
                                             Already have an Account? <a href="users">Login</a>
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