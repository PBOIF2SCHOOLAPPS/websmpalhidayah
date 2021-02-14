<?php
class dataSiswa extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Data Guru";
        $data['siswa'] = $this->smpalhidayahModel->get_data('data_siswa')->result();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/data_siswa', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function tambahData()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Tambah Data Siswa";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/tambah_data_siswa', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $id_siswa    = $this->input->post('id_siswa');
            $nisn    = $this->input->post('nisn');
            $nama_siswa    = $this->input->post('nama_siswa');
            $jenis_kelamin    = $this->input->post('jenis_kelamin');
            $id_orangtua    = $this->input->post('id_orangtua');
            $kode_kelas    = $this->input->post('kode_kelas');

            $data = array(
                'id_siswa'   => $id_siswa,
                'nisn'   => $nisn,
                'nama_siswa'   => $nama_siswa,
                'jenis_kelamin'   => $jenis_kelamin,
                'id_orangtua'   => $id_orangtua,
                'kode_kelas' => $kode_kelas,
            );

            $this->smpalhidayahModel->insert_data($data, 'data_siswa');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataSiswa');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_siswa', 'id siswa', 'required');
        $this->form_validation->set_rules('nisn', 'nisn', 'required');
        $this->form_validation->set_rules('nma_siswa', 'nama siswa', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required');
        $this->form_validation->set_rules('id_orangtua', 'id orangtua', 'required');
        $this->form_validation->set_rules('kode_kelas', 'kode kelas', 'required');
    }
}
