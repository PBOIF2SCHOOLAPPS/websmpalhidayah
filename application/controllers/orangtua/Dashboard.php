<?php
class Dashboard extends CI_Controller
{



    public function index()
    {
        $data['title_header'] = "Orangtua | SMP AL-HIDAYAH";
        $data['title'] = "Orangtua";
        $data['jadwal'] = $this->smpalhidayahModel->get_data_where('data_jadwaltengok', $_SESSION['id_siswa'])->result();

        $this->load->view('template/header', $data);
        $this->load->view('orangtua/dashboard', $data);
        $this->load->view('template/footer', $data);
    }


    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data gagal ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            $this->index();
            
        } else {
            

            $tanggal_jadwal    = $this->input->post('jadwal_tengok');
            $hak_akses    = 0;
            $id_siswa = $this->session->userdata('id_siswa');

            $data = array(
                'tanggal_jadwal'   => $tanggal_jadwal,
                'hak_akses'   => $hak_akses,
                'id_siswa'   => $id_siswa,
            );

            $this->smpalhidayahModel->insert_data($data, 'data_jadwaltengok');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('orangtua/Dashboard');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('jadwal_tengok', 'Jadwal Tengok', 'required');

    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
