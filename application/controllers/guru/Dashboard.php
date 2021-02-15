<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Guru | SMP AL-HIDAYAH";
        $data['title'] = "Guru";
        $this->load->view('template/header', $data);
        $this->load->view('guru/dashboard', $data);
        $this->load->view('template/footer', $data);
    }
}
