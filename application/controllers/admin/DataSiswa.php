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

    public function tambah_data()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Tambah Data Siswa";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/tambah_data_siswa', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $id_siswa    = $this->input->post('id_siswa');
            $nama_siswa    = $this->input->post('nama_siswa');
            $alamat_siswa    = $this->input->post('alamat_siswa');


            $data = array(
                'id_siswa'   => $id_siswa,
                'nama_siswa'   => $nama_siswa,
                'alamat_siswa'   => $alamat_siswa,

            );

            $this->smpalhidayahModel->insert_data($data, 'data_siswa');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('dataSiswa');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_orangtua', 'id orangtua', 'required');
        $this->form_validation->set_rules('nama_orangtua', 'nama orangtua', 'required');
        $this->form_validation->set_rules('alamat_orangtua', 'alamat_orangtua', 'required');
    }
}
