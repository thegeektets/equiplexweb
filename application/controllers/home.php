<?php
  class Home extends CI_Controller{

  	function index(){
   $data['title'] =("Home");
		$this->load->view('includes/header');
   	$this->load->view('home');
	//	$this->load->view('includes/footer');
  		
  	}
  	
  }
?>