<?php
class dataGuru extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Data Guru";
        $data['guru'] = $this->smpalhidayahModel->get_data('data_guru')->result();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/data_guru', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function tambahData()
    {
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Tambah Data Guru";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/tambah_data_guru', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function tambahDataAksi() {
        $this->_rules();

        if($this->form_validation->run()== FALSE) {
            $this->tambahData();
        } else {
            $id_guru    =$this->input->post('id_guru');
            $nama_guru    =$this->input->post('nama_guru');
            $alamat    =$this->input->post('alamat');
            $jenis_kelamin    =$this->input->post('jenis_kelamin');
            $status_guru    =$this->input->post('status_guru');

            $data=array(
                'id_guru'   => $id_guru,
                'nama_guru'   => $nama_guru,
                'alamat'   => $alamat,
                'jenis_kelamin'   => $jenis_kelamin,
                'status_guru'   => $status_guru,
            );

            $this->smpalhidayahModel->insert_data($data,'data_guru');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataGuru');
        }
    }

    public function updateData($id_guru)
    {
        $where = array ('id_guru' => $id_guru);
        $data['guru'] = $this->db->query("SELECT * FROM data_guru WHERE id_guru='$id_guru'")->result();
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Tambah Data Guru";
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/bar');
        $this->load->view('admin/update_data_guru', $data);
        $this->load->view('template_admin/footer', $data);
    }

    public function updateDataAksi() {
        $this->_rules();

        if($this->form_validation->run()== FALSE) {
            $this-updateData();
        } else {
            $id_guru    =$this->input->post('id_guru');
            $nama_guru    =$this->input->post('nama_guru');
            $alamat    =$this->input->post('alamat');
            $jenis_kelamin    =$this->input->post('jenis_kelamin');
            $status_guru    =$this->input->post('status_guru');

            $data=array(
                
                'nama_guru'   => $nama_guru,
                'alamat'   => $alamat,
                'jenis_kelamin'   => $jenis_kelamin,
                'status_guru'   => $status_guru,
            );

            $where = array (
                'id_guru' => $id_guru
            );

            $this->smpalhidayahModel->update_data('data_guru',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diupdate!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             </div>');
             redirect('admin/dataGuru');
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('id_guru','id guru','required');
        $this->form_validation->set_rules('nama_guru','nama guru','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('jenis_kelamin','jenis kelamin','required');
        $this->form_validation->set_rules('status_guru','status guru','required');
    }
}
