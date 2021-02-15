<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Guru | SMP AL-HIDAYAH";
        $data['title'] = "Guru";
        $this->load->view('template/header', $data);
        $this->load->view('guru/dashboard', $data);
        $this->load->view('template/footer', $data);
    }

    public function updateData($id_guru)
    {
        $where = array('id_jadwal' => $id_jadwal);
        $data['jadwal'] = $this->db->query("SELECT * FROM data_jadwal WHERE id_jadwal='$id_jadwal'")->result();
        $data['title_header'] = "Admin | SMP AL-HIDAYAH";
        $data['title'] = "Konfirmasi";
        $this->load->view('template/header', $data);
        $this->load->view('guru/dashboard', $data);
        $this->load->view('template/footer', $data);
    }

    public function updateDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->updateData();
        } else {
            $id_jadwal    = $this->input->post('id_jadwal$id_jadwal');
            $hak_akses    = $this->input->post('hak_akses');


            $data = array(

                'hak_akses'   => $hak_akses,
            );

            $where = array(
                'id_guru' => $id_guru
            );

            $this->smpalhidayahModel->update_data('data_guru', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diupdate!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataGuru');
        }
    }

}
