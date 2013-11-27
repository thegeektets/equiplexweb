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
   <link href="<?php echo base_url("/assets/dashboard/assets/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("/assets/dashboard/assets/bootstrap/css/bootstrap-responsive.min.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("/assets/dashboard/assets/bootstrap/css/bootstrap-fileupload.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("/assets/dashboard/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("/assets/dashboard/css/style.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("/assets/dashboard/css/style-responsive.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("/assets/dashboard/css/style-default.css")?>" rel="stylesheet" id="style_color" />

<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner" style ="background:#001A56;">
             
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

     <div id="container" class="row-fluid">
      </div>
      <!-- BEGIN PAGE -->  
      <div id="main-content" style="margin-left: 0px;">
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
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->                   <h3 class="page-title">
                     Edit Profile |Skills |Projects
                   </h3>
                   <h4>
                    <?php echo $success ?>
                   </h4>
                         </div>
            </div>
            <!-- END PAGE HEADER-->
                   <div class="row-fluid">
                     <div class="span10">
                         <div class="profile-head">
                             <div class="span4">
                                 <h1><?php echo $profile[0]['full_names']?></h1>
   <p> Equiplex Developers Community Dashboard </p>
                          
                                   </div>
                  <div class="span4">
                                 <ul class="social-link-pf">
                                     <li><a href="#">
                                         <i class="icon-facebook"></i>
                                     </a></li>
                                     <li><a href="#">
                                         <i class="icon-twitter"></i>
                                     </a></li>
                                     <li><a href="#">
                                         <i class="icon-linkedin"></i>
                                     </a></li>
                                 </ul>
                             </div>

                             <div class="span4">
                                 <a href="dashboard" class="btn btn-edit btn-large pull-right mtop20"> Save Profile </a>
                             </div>
                         </div>
                         <div class="space15"></div>
                         <div class="row-fluid">
                             <div class="span12 bio form">
                                 <h2> Profile Info</h2>
                                 <form class="form-horizontal" <?php echo form_open('users/editprofile');?> 
                                     <div class="control-group">
                                         <label class="control-label">About Me</label>
                                         <div class="controls">
                                             <textarea rows="5" class="span6 " name = "about"><?php echo $profile[0]['aboutme'] ?></textarea>
                                         </div>
                                                <p><?php echo form_error('aboutme');  ?></p>

                                     </div>
                                      
                                      <div class="control-group">
                                         <label class="control-label">username</label>
                                         <div class="controls">
                                            <input type="text" class="span6 " name = "username" value ="<?php echo $profile[0]['username'] ?>">
                                         </div>
                                         <p><?php echo form_error('username');  ?></p>
                                     </div>
                                    
                                     <div class="control-group">
                                         <label class="control-label">Full Name</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name = "name" value ="<?php echo $profile[0]['full_names'] ?>">
                                         </div>
                                         <p><?php echo form_error('full_names');  ?></p>
                                     </div>
                                      <div class="control-group">
                                         <label class="control-label">Gender</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name = "gender" value ="<?php echo $profile[0]['sex'] ?>">
                                         </div>
                                         <p><?php echo form_error('sex');  ?></p>
                                     </div>
                                     <div class="control-group">
                                         <label class="control-label">Phone Number</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name ="phone_number" value ="<?php echo $profile[0]['phone_number'] ?>">
                                         </div>
                                         <p><?php echo form_error('phone_number');  ?></p>
                                     </div>
                                      <div class="control-group">
                                         <label class="control-label">Email</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name = "email" value ="<?php echo $profile[0]['email'] ?>">
                                         </div>
                                         <p><?php echo form_error('email');  ?></p>
                                     </div>
                                    
                                     <div class="control-group">
                                         <label class="control-label">University</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name = "university" value ="<?php echo $profile[0]['university'] ?>">
                                         </div>
                                         <p><?php echo form_error('university');  ?></p>
                                     </div>
                                    
                                     <div class="control-group">
                                         <label class="control-label">City</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name = "city" value ="<?php echo $profile[0]['city'] ?>">
                                         </div>
                                         <p><?php echo form_error('city');  ?></p>
                                     </div>
                                     <div class="control-group">
                                         <label class="control-label">Country</label>
                                         <div class="controls">
                                             <input type="text" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" data-items="4" data-provide="typeahead" style="margin: 0 auto;" class="span6 " name = "country" value ="<?php echo $profile[0]['country'] ?>">
                                         </div>
                                         <p><?php echo form_error('country');  ?></p>
                                     </div>
                                     <div class="control-group">
                                         <label class="control-label">Bithday</label>

                                         <div class="controls">
                                             <input type="text" class="m-ctrl-medium span6" size="16" name = "DOB" value ="<?php echo $profile[0]['DOB'] ?>" id="dp1">
                                         </div>
                                         <p><?php echo form_error('DOB');  ?></p>
                                      </div>
                                     
                                          <div class="control-group">
                                         <label class="control-label">Company</label>

                                         <div class="controls">
                                             <input type="text" class="m-ctrl-medium span6" size="16" name = "company" value ="<?php echo $profile[0]['company'] ?>" id="dp1">
                                         </div>
                                     </div>
                                     <div class="form-actions">
                                         <button class="btn btn-success" type="submit">Submit</button>
                                         <button class="btn" type="button">Cancel</button>
                                     </div>
                                 </form>

                                 <div class="space10"></div>

                             <!--    <h2>Change Password</h2>

                                 <div class="widget orange">
                                     <div class="widget-title">
                                          <h4><i class="icon-reorder"></i> Sets New Password</h4>
                                           <span class="tools">
                                                <a class="icon-chevron-down" href="javascript:;"></a>
                                                <a class="icon-remove" href="javascript:;"></a>
                                           </span>
                                     </div>
                                     <div class="widget-body ">
                                         <form class="form-horizontal" action="#">
                                             <div class="control-group">
                                                 <label class="control-label">Current Password</label>
                                                 <div class="controls">
                                                     <input type="password" class="span6 ">
                                                 </div>
                                             </div>
                                             <div class="control-group">
                                                 <label class="control-label">New Password</label>
                                                 <div class="controls">
                                                     <input type="password" class="span6 ">
                                                 </div>
                                             </div>
                                             <div class="control-group">
                                                 <label class="control-label">Re-type New Password</label>
                                                 <div class="controls">
                                                     <input type="password" class="span6 ">
                                                 </div>
                                             </div>

                                             <div class="form-actions">
                                                 <button type="submit" class="btn btn-success">Change Password</button>
                                                 <button type="button" class="btn">Cancel</button>
                                             </div>

                                         </form>
                                     </div>
                                 </div>
                               -->
                                                   <h2>Add Skills</h2>

                                 <div class="widget orange">
                                     <div class="widget-title">
                                          <h4><i class="icon-reorder"></i> adds new skills</h4>
                                           <span class="tools">
                                                <a class="icon-chevron-down" href="javascript:;"></a>
                                                <a class="icon-remove" href="javascript:;"></a>
                                           </span>
                                     </div>
                                     <div class="widget-body ">
                                         <form class="form-horizontal" <?php echo form_open('users/addskill');?> 
                                             <div class="control-group">
                                                 <label class="control-label">Skill</label>
                                                 <div class="controls">
                                                     <input type="text" class="span6 " name = "skill">
                                                 </div>
                                                 <?php echo form_error('skill') ?>
                                             </div>
                                             <div class="form-actions">
                                                 <button type="submit" class="btn btn-success">Add Skill</button>
                                                 <button type="button" class="btn">Cancel</button>
                                             </div>

                                         </form>
                                     </div>
                                 </div>

               

                                 <h2>Projects You have done !</h2>

                                 <div class="widget red">
                                     <div class="widget-title">
                                         <h4><i class="icon-reorder"></i> adds new projects</h4>
                                           <span class="tools">
                                                <a class="icon-chevron-down" href="javascript:;"></a>
                                                <a class="icon-remove" href="javascript:;"></a>
                                           </span>
                                     </div>
                                     <div class="widget-body ">
                                         <form class="form-horizontal" <?php echo form_open_multipart('users/addproject')?>
                                             <div class="control-group">
                                                 <label class="control-label">Project Name</label>
                                                 <div class="controls">
                                                     <input type="text" class="span8 " name ="name" value = "<?php echo $this->input->post("name") ?>">
                                                 </div>
                                                 <p><?php echo form_error ('name') ?></p>
                                             </div>
                                             <div class="control-group">
                                                 <label class="control-label">Project Category</label>
                                                 <div class="controls">
                                                     <input type="text" class="span8 " name ="category" value = "<?php echo $this->input->post("category")?>">
                                                 </div>
                                                <p><?php echo form_error ('category') ?></p>
                                             </div>
                                             <div class="control-group">
                                                 <label class="control-label">Project Description</label>
                                                 <div class="controls">
                                                 <textarea rows="5" class="span8 " name ="desc"><?php echo $this->input->post("desc")?></textarea>
                                            <p><?php echo form_error ('desc') ?></p>
                                              </div>
                                             </div>
                                            <div class="control-group">
                                                  <label class="control-label">Project Avatar</label>
                                                  <div class="controls">
                                                  <span class="btn">
                                                     <input class="btn"  type ="file" name='avatar'>
                                                  </span>
                                                  <p><?php echo form_error ('avatar') ?></p>
                                                  </div>
                                              </div>
                                             </div>
                                          
                                             <div class="text-center">
                                                 <input class="btn btn-inverse " type ="submit" value="Add Projects" name ="submit"/>
                                             </div>

                                         </form>
                                     </div>
                                 </div>
</div>

                                 <h2> User Avatar</h2>
                                 <div class="widget green">
                                     <div class="widget-title">
                                         <h4><i class="icon-user"></i> Avatar Change </h4>
                                           <span class="tools">
                                                <a class="icon-chevron-down" href="javascript:;"></a>
                                                <a class="icon-remove" href="javascript:;"></a>
                                           </span>
                                     </div>
                                     <div class="widget-body form">
                                         <!-- BEGIN FORM-->
                                         <form class="form-horizontal" <?php echo form_open_multipart('users/changeuseravatar')?>
                                              <div class="control-group">
                                                 <label class="control-label">User Avatar</label>
                                                 <div class="controls">
                                                  <span class="btn btn-file"><span class="fileupload-new">
                                                   <input class="btn btn-file"  type ="file" name='useravatar'>
                                                  </span>                                                        <p><?php echo form_error ('useravatar') ?></p>
                                                         </div>
        </div>
                                                                                    </div>
                                             </div>
                                             <div class="text-center">
                                     <input class="btn btn-inverse btn-large " value = "Save" type = "submit" />
                                 </div>
                                 
                                         </form>
                                         <!-- END FORM-->
                                     </div>
                                 </div>
                                 <div class="space20"></div>
                                 <div class="space20"></div>
                             </div>
                         </div>
                
                                 <h2> Change Cover</h2>
                                 <div class="widget green">
                                     <div class="widget-title">
                                         <h4><i class="icon-user"></i> Cover Change </h4>
                                           <span class="tools">
                                                <a class="icon-chevron-down" href="javascript:;"></a>
                                                <a class="icon-remove" href="javascript:;"></a>
                                           </span>
                                     </div>
                                     <div class="widget-body form">
                                         <!-- BEGIN FORM-->
                                         <form class="form-horizontal" <?php echo form_open_multipart('users/changecoveravatar')?>
                                              <div class="control-group">
                                                 <label class="control-label">Cover Avatar</label>
                                                 <div class="controls">
                                                  <span class="btn btn-file"><span class="fileupload-new">
                                                   <input class="btn btn-file"  type ="file" name='coveravatar'>
                                                  </span>                                               
                                                           <p><?php echo form_error ('coveravatar') ?></p>
                                                         </div>
        </div>
                                                                                    </div>
                                             </div>
                                             <div class="text-center">
                                     <input class="btn btn-inverse btn-large " value = "Save" type = "submit" />
                                 </div>
                                 <div class="space20"></div>
                                 <div class="space20"></div>
                                         </form>
                                         <!-- END FORM-->
                                     </div>
                                 </div>
                                 
                             </div>
                         </div>                  </div>
                 </div>    </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; <a href="../home">Equiplex Business Solutions.</a>
   </div>
   <!-- END FOOTER -->
   <script src="<?php echo base_url("/assets/dashboard/assets/js/jquery-1.8.3.min.js")?>"></script>
   <script src="<?php echo base_url("/assets/dashboard/assets/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
   <script src="<?php echo base_url("/assets/dashboard/assets/assets/bootstrap/js/bootstrap.min.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/assets/bootstrap/js/bootstrap-fileupload.js")?>"></script>
   <script src="<?php echo base_url("/assets/dashboard/assets/js/jquery.blockui.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/chosen-bootstrap/chosen/chosen.jquery.min.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/uniform/jquery.uniform.min.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/clockface/js/clockface.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/jquery-tags-input/jquery.tagsinput.min.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/bootstrap-datepicker/js/bootstrap-datepicker.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/bootstrap-daterangepicker/date.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/bootstrap-daterangepicker/daterangepicker.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/bootstrap-timepicker/js/bootstrap-timepicker.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("/assets/dashboard/assets/bootstrap-inputmask/bootstrap-inputmask.min.js")?>"></script>
   <script src="<?php echo base_url("/assets/dashboard/assets/fancybox/source/jquery.fancybox.pack.js")?>"></script>
   <script src="<?php echo base_url("/assets/dashboard/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js")?>" type="text/javascript")></script>
   <script src="<?php echo base_url("/assets/dashboard/js/jquery.scrollTo.min.js")?>"></script>
   <script src="<?php echo base_url("/assets/dashboard/js/common-scripts.js")?>"></script>

   <script src="<?php echo base_url("/assets/dashboard/js/form-component.js")?>"></script>
   <script src="<?php echo base_url("/assets/dashboard/js/sliders.js")?>" type="text/javascript"></script>

   <!-- END JAVASCRIPTS -->   
</body>
</html>