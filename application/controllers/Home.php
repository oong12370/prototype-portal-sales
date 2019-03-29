<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __Construct()
	{
	parent ::__construct();

	}

public function index()
	{
	 
        $this->data=array('pagetitle'=>'oong_julian',
                    'isi' =>'isi');
        $this->load->view('layout/wrapper',$this->data);	
	}

function Logout()
	 {
   	$this->session->unset_userdata('loggedIn');
   	session_destroy();
   	redirect('Home', 'refresh');
   	echo "<script>history.go(-1);</script>";
 	}
}
