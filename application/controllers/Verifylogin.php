 
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('User','',TRUE);
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
                        return redirect('admin');
                    } else {
                        return redirect('UserControler');
                    }

                } else {
                    $this->session->set_flashdata('pesan', 'maaf, password anda salah');
                    return redirect('/');
                }
            }
        }
}
?>



