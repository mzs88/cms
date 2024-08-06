<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function index()
    {
        $data = array();
        $this->load->view('login', $data, FALSE);
    }

    public function auth()
    {
        $array = array(
            'user' => $this->input->post('user')
        );
        $this->session->set_userdata($array);
        $user = $this->session->userdata('user');
        $data['user'] = $user;
        $data['msg'] = $user . " Sekarang sedang online";
        pusher_trigger('cmo', 'cmo', $data);
        redirect('chat', 'refresh');
    }

    public function logout()
    {
        $destroy = session_destroy();
        if ($destroy == true) {
            return redirect('/', 'refresh');
        }
    }
}

/* End of file Login.php */
