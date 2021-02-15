<?php
class Login extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Login| SMP AL-HIDAYAH";
        $data['title'] = "Data Siswa";
        $data['siswa'] = $this->smpalhidayahModel->get_data('data_siswa')->result();
        $this->load->view('template/header', $data);
        $this->load->view('login', $data);
        $this->load->view('template/footer', $data);
    }
}
