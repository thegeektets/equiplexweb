<!DOCTYPE html>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php 
$this->load->helper('url');
error_reporting(0);
?>
<head>
   <meta charset="utf-8" />
   <title>DashBoard :Equiplex Developers Community</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="<?php echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap-responsive.min.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap-fileupload.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style-responsive.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style-default.css")?>" rel="stylesheet" id="style_color" />

<body class="fixed-top" >
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top" >
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner" style ="background:#001A56;">
           <div class="container-fluid">
             <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>
             
                  <span class="photo"><img height = '50px' width = '40px' src="<?php echo $profile[0]['avatar']?>" alt="avatar" /></span>
									<span class="subject">
									<span class="from"><?php $profile[0]['full_names']?></span>
									</span>
									  </a>
                   </ul>
               </div>
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
          <div id="sidebar" class="nav-collapse collapse">

              <!-- BEGIN SIDEBAR MENU -->
              <ul class="sidebar-menu">
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-book"></i>
                          <span>Dashboard</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url()?>index.php/users/profile/<?php echo $profile[0]['username'].""?>">Profile</a></li>
                          <li><a class="" href="<?php echo base_url()?>index.php/users/profile/<?php echo $profile[0]['username']."#skills"?>">Skills</a></li>
                          <li><a class="" href="<?php echo base_url()?>index.php/users/profile/<?php echo $profile[0]['username']."#work"?>">Projects</a></li>
                          <li><a class="" href="<?php echo base_url("index.php/users/logout");?>">Logout</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- END SIDEBAR MENU -->
          </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Profile
                   </h3>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">
                     <div class="span10">
                         <div class="profile-head">
                             <div class="span4">
                                 <h1><?php echo $profile[0]['full_names']?></h1>
   <p> Equiplex Developers Community Dashboard </p>
                          
                                   </div>

                            
                             <div class="span4">
                                 <a href="<?php echo base_url("/index.php/users/editprofile")?>" class="btn btn-edit btn-large pull-right mtop20"> Edit Profile|Skills|Projects</a>
                             </div>
                         </div>
                         <div class="space15"></div>
                         <div class="row-fluid">
                             <div class="span8 bio">
                                 <h2>About <?php echo $profile[0]['full_names']?></h2>
                                  <p><?php if($profile[0]['aboutme'] == null){echo "write something about yourself " ; }else{ echo $profile[0]['aboutme'] ;} ?></a></p>
                                 
                                 <div class="space15"></div>
                                 <h2>Bio Graph</h2>
                                 <p><label>Fullname </label>:<?php if($profile[0]['full_names'] == null){echo "update this" ; }else{ echo $profile[0]['full_names'] ;} ?></a></p>
                          
                                 <p><label>Country </label>:<?php if($profile[0]['country'] == null){echo "update this" ; }else{ echo $profile[0]['country'] ;} ?></a></p>
                                 <p><label>Bithday </label>:<?php if($profile[0]['DOB'] == null){echo "update this" ; }else{ echo $profile[0]['DOB'] ;} ?></a></p>
                                 <p><label>Email </label>: <?php if($profile[0]['email'] == null){echo "update this" ; }else{ echo $profile[0]['email'] ;} ?></a></p>
                                 <p><label>Phone </label>: <?php if($profile[0]['phone_number'] == null){echo "update this" ; }else{ echo $profile[0]['phone_number'] ;} ?></a></p>
                                 <div class="space15"></div>
                                 <hr>
                                 <div class="space15"></div>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- END PROFILE PORTLET-->
             </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy;<a href="../home">Equiplex Business Solutions.</a>
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <script src="<?php echo base_url("assets/dashboard/js/jquery-1.8.3.min.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
   <script src="<?php echo base_url("assets/dashboard/assets/bootstrap/js/bootstrap.min.js")?>"></script>

   <script src="<?php echo base_url("assets/dashboard/js/jquery.scrollTo.min.js")?>"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo base_url("assets/dashboard/js/excanvas.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/js/respond.js")?>"></script>
   <![endif]-->

   <!--common script for all pages-->
   <script src="<?php echo base_url("assets/dashboard/js/common-scripts.js")?>"></script>

   <!-- END JAVASCRIPTS -->   
</body>
</html>