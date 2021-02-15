<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Orangtua | SMP AL-HIDAYAH";
        $data['title'] = "Orangtua";
        $data['siswa'] = $this->smpalhidayahModel->get_data('data_siswa')->result();
        $this->load->view('template/header', $data);
        $this->load->view('orangtua/dashboard', $data);
        $this->load->view('template/footer', $data);
    }
}
