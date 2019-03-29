<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserControler extends CI_Controller {
	public function __Construct()
	{
	parent ::__construct();
	$this->load->model('Tool');
	$this->load->model('User');

	}

	public function index()
	{
		$this->data=array('pagetitle'=>'Portal',
 					'isi' =>'partview',
 					'session_data' => $this->session->userdata('logged_in')
 					);
		$this->load->view('layout/wrapper',$this->data);
	}
	public function prosesLogin()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->User->loginUser($username);

            if (sizeof($user) == 0) {
                $this->session->set_flashdata('pesan', 'maaf, user tidak tersedia');
                return redirect('/');
            } else {
                if ($this->bcrypt->check_password($password, $user[0]->password)) {
                    $sessionArray = array('username' => $user[0]->username, 'role' => $user[0]->role, 'loggedIn' => true);
                    $this->session->set_userdata($sessionArray);

                    if ($user[0]->role == 'admin') {
                        return redirect('UserControler/Admin');
                    } else if ($user[0]->role == 'staf'){
                        return redirect('UserControler/Home');
                    } else{
                    	return redirect('UserControler/Purchaser');
                    }

                } else {
                    $this->session->set_flashdata('pesan', 'maaf, password anda salah');
                    return redirect('/');
                }
            }
        }
  function Home(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'User',
                    'isi' =>'gmftm/isi'
 					);
     $this->load->view('gmftm/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
 function Admin(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'Administrator/isi'
 					);
     $this->load->view('Administrator/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
 function Purchaser(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'Purchaser',
                    'isi' =>'Purchaser/isi'
 					);
     $this->load->view('Purchaser/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
function Searchpart(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'gmftm/partview'
 					);
     $this->load->view('gmftm/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
 function Checkout(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'gmftm/checkoutview'
 					);
     $this->load->view('gmftm/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
 function Uploadsearch(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'gmftm/uploadview'
 					);
     $this->load->view('gmftm/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
function Searchpart2(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'gmftm/partview2'
 					);
     $this->load->view('gmftm/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
 function Searchpart3(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'gmftm/partview2'
 					);
     $this->load->view('Administrator/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
 function Addpart(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'Administrator/addpartview'
 					);
     $this->load->view('Administrator/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
  function Addpart2(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'Administrator/addpart'
 					);
     $this->load->view('Administrator/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
  function Adduser(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'Administrator/adduserview'
 					);
     $this->load->view('Administrator/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
function Orderpart(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'Purchaser/pembelianpart'
 					);
     $this->load->view('Purchaser/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
 function Statusorder(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'Purchaser/orderview'
 					);
     $this->load->view('Purchaser/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
 function Statusorder2(){
     if($this->session->userdata('loggedIn')){
		 $this->data=array('pagetitle'=>'admin',
                    'isi' =>'Purchaser/formstatus'
 					);
     $this->load->view('Purchaser/layout/wrapper',$this->data);
     }else{
       //Jika tidak ada session di kembalikan ke halaman login
       redirect('Admin/Login_index');
    }
   }
}
