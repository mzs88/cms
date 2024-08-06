<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{

    public function index()
    {
        $data = array();
        $this->load->view('chat', $data);
    }

    public function send()
    {
        $data['user'] = $this->session->userdata('user');
        $data['msg'] = $this->input->post('msg');
        pusher_trigger('cmo', 'cmo', $data);
    }
}

/* End of file Chat.php */
