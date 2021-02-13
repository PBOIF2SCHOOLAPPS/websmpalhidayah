<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard | SMP AL-HIDAYAH";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template_admin/footer', $data);
    }
}
