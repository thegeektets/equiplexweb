<?php
    class users extends CI_Controller{
    private $username;

    public function __construct()
    {
    parent::__construct();
    $this->load->model('users_model');
    }


  function index(){
   $this->load->library('session');
    if($this->session->userdata('logged_in') == "TRUE") {
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $this->load->view('dashboard/profile' , $data);
 
    }
    else{
      $data['success']=("") ;
  	  $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('user', 'Username ', 'required'); 
      $this->form_validation->set_rules('pass', 'Password  ', 'required'); 
                      

    if ($this->form_validation->run() == FALSE){
 
       $this->load->view('includes/header');
       $this->load->view('login',$data);
    }
    else {
       $passw = $this->users_model->logindetails();
       if($this->input->post("pass") == $passw){
          $this->load->library('session');
          $newdata = array(
                'username'  => $this->input->post("user"),
                'logged_in' => TRUE
               );

        $this->session->set_userdata($newdata);
        $users = $this->session->all_userdata();
        $this->dashboard();
        }

    else{
       $data['success']= ("Login Failed !") ;
       $this->load->view('includes/header');
       $this->load->view('login' ,$data);
   
      }
        
      }
    }		
  }

  function logout(){
        $this->load->library('session');
        $newdata = array(
        'logged_in' => FALSE);

        $this->session->set_userdata($newdata);
        $data['success']=("") ;
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'Username ', 'required'); 
        $this->form_validation->set_rules('pass', 'Password  ', 'required|alpha_numeric|max_length[10]'); 
    
    if ($this->form_validation->run() == FALSE){
    $this->load->view('includes/header');
    $this->load->view('login',$data);
    }else {
      $passw = $this->users_model->logindetails();
      if($this->input->post("pass") == $passw){
        $this->load->library('session');
        $newdata = array(
                   'username'  => $this->input->post("user"),
                   'logged_in' => TRUE );

       $this->session->set_userdata($newdata);
       $users = $this->session->all_userdata();
       $this->dashboard();
      }

      else{
     $data['success']= ("Login Failed !") ;
     $this->load->view('includes/header');
     $this->load->view('login' ,$data);
   
      }
        
    }
      
     
      }
        
    function register(){
     $this->load->helper(array('form', 'url'));

     $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Fullname ', 'required'); 
            $this->form_validation->set_rules('username', 'Username ', 'required'); 
            $this->form_validation->set_rules('email', 'Email ', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password  ', 'required'); 
            $this->form_validation->set_rules('gender', 'Gender  ', 'required'); 
                       

    if ($this->form_validation->run() == FALSE){
 
    $data['title'] =("About US");
    $this->load->view('includes/header');
    $this->load->view('register');
    }
    else {
     $data['success']= ("Registration success") ;
     $this->users_model->registeruser();
     $this->load->view('includes/header');
     $this->load->view('login' ,$data);
      
    }
  }
  function profile($username){
          $this->load->library('session');
    
        $data['profile'] = $this->users_model->get_user($username);
        $data['skills'] = $this->users_model->get_skills($username);
        $data['projects'] =$this->users_model->get_projects($username);
  
        $this->load->view('profile/index', $data);
 }


  function dashboard(){
          $this->load->library('session');
    
      if($this->session->userdata('logged_in') == "TRUE") {
        $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
        $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     //   $data['projects'] =$this->users_model->get_projects($this->session->userdata('username'));
  
        $this->load->view('dashboard/profile' , $data);
        }
        else{
          $this->index();
        }
      }
 function editprofile(){
     $this->load->helper(array('form', 'url'));

     $this->load->library('form_validation');

            $this->form_validation->set_rules('name','Fullname ', 'required'); 
            $this->form_validation->set_rules('username', 'username ', 'required'); 
            $this->form_validation->set_rules('email', 'Email ', 'required|valid_email'); 
            $this->form_validation->set_rules('gender', 'Gender  ', 'required'); 
            $this->form_validation->set_rules('about', 'about ', 'required'); 
            $this->form_validation->set_rules('phone_number', 'phone_number ', 'required|number'); 
            $this->form_validation->set_rules('university', 'Gender  ', 'required'); 
            $this->form_validation->set_rules('city', 'City', 'required'); 
            $this->form_validation->set_rules('DOB', 'Birthday  ', 'required'); 
                    
                       

    if ($this->form_validation->run() == FALSE){
    $this->load->library('session');
    $data['success'] =("");
    $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
    $this->load->view('includes/header');
    $this->load->view('dashboard/edit_profile' ,$data);
    }
    else {
     $this->load->library('session');
     $this->users_model->editdetails();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     $data['success'] =("profile update success");
     $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);
      
    }
}
function addproject(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('name','name', 'required'); 
      $this->form_validation->set_rules('category','category', 'required'); 
      $this->form_validation->set_rules('desc','description', 'required'); 
      //$this->form_validation->set_rules('avatar','avatar', 'required'); 

   if ($this->form_validation->run() == FALSE){
     $this->load->library('session');
     $data['success'] =("project update failed");
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_profile' ,$data);
    }
    else {
    $config['upload_path'] = './assets/img/projects/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';
    $config['overwrite'] = FALSE; 
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $avatar = 'avatar' ;
    if ( ! $this->upload->do_upload($avatar))
    {
    $this->load->library('session');
    $error = $this->upload->display_errors();
    $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
    $data['success'] =("project file upload failure ".$error); 
    $this->load->view('includes/header');
    $this->load->view('dashboard/edit_profile' ,$data);
     
    }
    else
    {
     $this->load->library('session');
      $this->users_model->addproject();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     $data['success'] =("project upload success"); 
     $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);
     
    }


    
    }

  }

function changecoveravatar(){
      $this->load->helper(array('form', 'url'));
     
        $config['upload_path'] = './assets/img/users/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['overwrite'] = FALSE; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $avatar = 'coveravatar' ;
    if ( ! $this->upload->do_upload($avatar))
    {
      $this->load->library('session');
      $error = $this->upload->display_errors();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("cover avatar file upload failure ".$error); 
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_profile' ,$data);
     
    }
    else
    {
     $this->load->library('session');
      $this->users_model->changecoveravatar();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("Cover photo upload success"); 
      $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);
     
    }


    
    

  }

function changeuseravatar(){
       $this->load->helper(array('form', 'url'));
    
        $config['upload_path'] = './assets/img/users/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['overwrite'] = FALSE; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $avatar = 'useravatar' ;
    
    if ( ! $this->upload->do_upload($avatar))
    {
      $this->load->library('session');
      $error = $this->upload->display_errors();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("user avatar file upload failure ".$error); 
      $this->load->view('includes/header');
      $this->load->view('dashboard/edit_profile' ,$data);
     
    }
    else
    {
     $this->load->library('session');
      $this->users_model->changeuseravatar();
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
      $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
      $data['success'] =("user avatar upload success"); 
      $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);
     
    }


    
    

  }
    


function addskill(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('skill','skill', 'required'); 
   if ($this->form_validation->run() == FALSE){
    $this->load->library('session');
    $data['success'] =("skill update failed");
    $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
    $this->load->view('includes/header');
    $this->load->view('dashboard/edit_profile' ,$data);
    }
    else {
     $this->load->library('session');
     $this->users_model->addskill();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['skills'] = $this->users_model->get_skills($this->session->userdata('username'));
     $data['success'] =("skill update success"); 
     $this->load->view('includes/header');
     $this->load->view('dashboard/edit_profile' ,$data);
      
    } 
function uploadprojectpic(){

    $config['upload_path'] = './projects/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());

    }
    else
    {
      $data = array('upload_data' => $this->upload->data());

    }
}



}

}