<?php
class dataSiswa extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Data Siswa";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/data_siswa', $data);
        $this->load->view('template_admin/footer', $data);
    }
}
