<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Beranda | SMP AL-HIDAYAH";
        $data['title'] = "Beranda";
        $this->load->view('home/home', $data);
    }
}
