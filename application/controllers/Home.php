<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Home | SMP AL-HIDAYAH";
        $data['title'] = "Home";
        $this->load->view('header', $data);
    }
}
