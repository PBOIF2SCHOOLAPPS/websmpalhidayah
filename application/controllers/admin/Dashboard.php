<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Admin Beranda";
        $guru = $this->db->query("SELECT * FROM data_guru");
        $data['guru']=$guru->num_rows();
        $admin = $this->db->query("SELECT * FROM data_guru WHERE hak_akses= 1");
        $data['admin']=$admin->num_rows();
        $siswa = $this->db->query("SELECT * FROM data_siswa");
        $data['siswa']=$siswa->num_rows();

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
