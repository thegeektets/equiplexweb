<?php
class users_model extends CI_Model {
    private $username;
    public function __construct(){
    $this->load->database();     }
   public function get_members(){
     $query = $this->db->query("select * from developer_details");
    return $query->result_array();
}



    public function get_user($username){
    $query = $this->db->query("select * from developer_details,user where user.username = 
    developer_details.username and developer_details.username = '".$username."'");
    return $query->result_array();}

    public function get_skills($username){
    $query = $this->db->query("select * from skills where username = '".$username."'");
    return $query->result_array(); }

    public function get_developer($username){
    $query = $this->db->query("select developer_id from developer_details where username = '".$username."'");
    $query->result();
    foreach ($query->result() as $row)
        {
            return $row->developer_id;
        }
    }


    public function get_projects($username){
        $developer_id = $this->get_developer($username);
        $query = $this->db->query('select * from portfolio,developer_details where developer_details.username = "'.$username .'" and developer_details.developer_id = portfolio.developer_id');
    return $query->result_array();}

    function registeruser() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $fullname = $this->input->post("name");
        $sex = $this->input->post("gender");
        $email = $this->input->post("email");
    
            $sql = "INSERT INTO user (username,email,password) " .
            "VALUES (" . $this->db->escape($username) . ",".$this->db->escape($email) .",".$this->db->escape($password) .")";
            $this->db->query($sql);

            $sqll = "INSERT INTO developer_details (full_names,username,sex) " .
            "VALUES (" . $this->db->escape($fullname) . ",".$this->db->escape($username) .",".$this->db->escape($sex) .");";
            $this->db->query($sqll);
    }
    function addskill() {
        $skill = $this->input->post("skill");
        $this->load->library('session');
        $user =$this->session->userdata('username');
            
            $sql = "INSERT INTO skills (username,skill) " .
            "VALUES (" . $this->db->escape($user) . ",".$this->db->escape($skill) .")";
            $this->db->query($sql);
      }
      function addproject() {
        $category = $this->input->post("category");
        $desc = $this->input->post("desc");
        $name = $this->input->post("name");
        $upload_data = $this->upload->data(); 
        $ppic =   $upload_data['file_name'];
        $this->load->helper('url');
        $pic = base_url("assets/img/projects/".$ppic); 
        $this->load->library('session');
        $this->load->library('upload');
        $user =$this->session->userdata('username');
        $developer = $this->get_developer($user);
    
        $sql = "INSERT INTO portfolio (product_name,product_desc,projectcategory,developer_id,product_pic) " .
        "VALUES (" . $this->db->escape($name) . ",".$this->db->escape($desc) .",
           ".$this->db->escape($category) .
         ",".$this->db->escape($developer) .
         ",".$this->db->escape($pic) .")";

          $this->db->query($sql);
      }
function changeuseravatar() {
     $upload_data = $this->upload->data(); 
      $ppic =   $upload_data['file_name'];
        $this->load->helper('url');
        $pic = base_url("assets/img/users/".$ppic); 
      
        $this->load->library('session');
        $user =$this->session->userdata('username');
        
     $sql = "UPDATE developer_details SET avatar = '".$pic ."' where developer_details.username = '".$user ."'";
    
    
        $this->db->query($sql);
      }
function changecoveravatar() {
        $upload_data = $this->upload->data(); 
        $ppic =   $upload_data['file_name'];
        $this->load->helper('url');
        $pic = base_url("assets/img/users/".$ppic); 
        $this->load->library('session');
        $user =$this->session->userdata('username');
        
     $sql = "UPDATE developer_details SET coverphoto = '".$pic ."' where developer_details.username = '".$user ."'";
    
    
        $this->db->query($sql);
      }


    function logindetails() {
        $username = $this->input->post("user");
        $query = $this->db->query("select * from user where username = '".$username ."'");
                foreach ($query->result() as $row)
            {
            return $row->password;
            }
    }
    function editdetails(){
        $this->load->library('session');
        $user =$this->session->userdata('username');
            $username = $this->input->post("username");
            $fullname = $this->input->post("name");
            $sex = $this->input->post("gender");
            $email = $this->input->post("email");
            $about = $this->input->post("about");
            $company = $this->input->post("company");
            $city = $this->input->post("city");
            $country = $this->input->post("country");
            $bday = $this->input->post("DOB");
            $university =$this->input->post("university");
            $phone_number =$this->input->post("phone_number");

     $sql = "UPDATE developer_details ,user SET user.username = ". $this->db->escape($username) . ",
     aboutme = " . $this->db->escape($about) . ",email = " . $this->db->escape($email) .",sex = " . $this->db->escape($sex) . ",
     company = " . $this->db->escape($company) . ",city = " . $this->db->escape($city) . ",country = " . $this->db->escape($country) . ",
     DOB = " . $this->db->escape($bday) ." ,phone_number = " . $this->db->escape($phone_number) . ",university = " . $this->db->escape($university) . ",
     full_names = " . $this->db->escape($fullname) .", developer_details.username = ". $this->db->escape($username) . " where user.username =developer_details.username and user.username = '".$user ."'";
     $this->db->query($sql);

    }   
    



}