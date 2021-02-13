<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Admin Beranda";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template_admin/footer', $data);
    }
}
