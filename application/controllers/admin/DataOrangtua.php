<?php
class dataOrangtua extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Data Orang Tua";
        $data['orangtua'] = $this->smpalhidayahModel->get_data('data_orangtua')->result();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/data_orangtua', $data);
        $this->load->view('template_admin/footer', $data);
    }
}
