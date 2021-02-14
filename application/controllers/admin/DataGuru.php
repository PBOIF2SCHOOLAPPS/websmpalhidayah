<?php
class dataGuru extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Data Guru";
        $data['guru'] = $this->smpalhidayahModel->get_data('data_guru')->result();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/data_guru', $data);
        $this->load->view('template_admin/footer', $data);
    }
}
