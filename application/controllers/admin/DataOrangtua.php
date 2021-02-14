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
    public function tambah_data()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Tambah Data Orangtua";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/tambah_data_orangtua', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function tambah_data_aksi() {
        $this->_rules();

        if($this->form_validation->run()== FALSE) {
            $this->tambah_data();
        } else {
            $id_orangtua    =$this->input->post('id_orangtua');
            $nama_orangtua    =$this->input->post('nama_orangtua');
            $alamat_orangtua    =$this->input->post('alamat_orangtua');
            

            $data=array(
                'id_orangtua'   => $id_orangtua,
                'nama_orangtua'   => $nama_orangtua,
                'alamat_orangtua'   => $alamat_orangtua,
                
            );

            $this->smpalhidayahModel->insert_data($data,'data_orangtua');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/dataOrangtua');
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('id_orangtua','id orangtua','required');
        $this->form_validation->set_rules('nama_orangtua','nama orangtua','required');
        $this->form_validation->set_rules('alamat_orangtua','alamat_orangtua','required');
        
    }

}
?>
