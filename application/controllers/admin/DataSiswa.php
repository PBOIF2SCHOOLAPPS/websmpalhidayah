<?php
class dataSiswa extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Data Siswa";
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
            $username_siswa    = $this->input->post('username_siswa');
            $password_siswa    = md5($this->input->post('password_siswa'));
            $nama_siswa    = $this->input->post('nama_siswa');
            $nama_kelas    = $this->input->post('nama_kelas');
            $nama_orangtua    = $this->input->post('nama_orangtua');
            $alamat    = $this->input->post('alamat');
            $hak_akses    = $this->input->post('hak_akses');

            $data = array(
                'id_siswa'   => $id_siswa,
                'username_siswa'   => $username_siswa,
                'password_siswa'   => $password_siswa,
                'nama_siswa'   => $nama_siswa,
                'nama_kelas'   => $nama_kelas,
                'nama_orangtua'   => $nama_orangtua,
                'alamat'   => $alamat,
                'hak_akses'   => $hak_akses,
            );

            $this->smpalhidayahModel->insert_data($data, 'data_siswa');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataSiswa');
        }
    }

    public function updateData($id_siswa)
    {
        $where = array('id_siswa' => $id_siswa);
        $data['siswa'] = $this->db->query("SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'")->result();
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Tambah Data Siswa";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/update_data_siswa', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this - updateData();
        } else {
            $id_siswa    = $this->input->post('id_siswa');
            $username_siswa    = $this->input->post('username_siswa');
            $password_siswa    = md5($this->input->post('password_siswa'));
            $nama_siswa    = $this->input->post('nama_siswa');
            $nama_kelas    = $this->input->post('nama_kelas');
            $nama_orangtua    = $this->input->post('nama_orangtua');
            $alamat    = $this->input->post('alamat');
            $hak_akses    = $this->input->post('hak_akses');

            $data = array(

                'username_siswa'   => $username_siswa,
                'password_siswa'   => $password_siswa,
                'nama_siswa'   => $nama_siswa,
                'nama_kelas'   => $nama_kelas,
                'nama_orangtua'   => $nama_orangtua,
                'alamat'   => $alamat,
                'hak_akses'   => $hak_akses,
            );

            $where = array(
                'id_siswa' => $id_siswa
            );

            $this->smpalhidayahModel->update_data('data_siswa', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diupdate!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             </div>');
            redirect('admin/dataSiswa');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_siswa', 'id siswa', 'required');
        $this->form_validation->set_rules('username_siswa', 'username', 'required');
        $this->form_validation->set_rules('password_siswa', 'password', 'required');
        $this->form_validation->set_rules('nama_siswa', 'nama siswa', 'required');
        $this->form_validation->set_rules('nama_kelas', 'kelas', 'required');
        $this->form_validation->set_rules('nama_orangtua', 'nama orangtua', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('hak_akses', 'hak akses', 'required');
    }

    public function deleteData($id_siswa)
    {
        $where = array('id_siswa' => $id_siswa);
        $this->smpalhidayahModel->delete_data($where, 'data_siswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             </div>');
        redirect('admin/dataSiswa');
    }
}
