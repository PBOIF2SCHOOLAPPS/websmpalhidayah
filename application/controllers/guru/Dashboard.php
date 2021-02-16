<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title_header'] = "Guru | SMP AL-HIDAYAH";
        $data['title'] = "Guru";
        $data['konfirmasi'] = $this->smpalhidayahModel->join_table()->result();
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


            $id_jadwal    = $this->input->post('id_jadwal');
            
            if(isset($_POST['submit_terima']) ) {
                $data = array(
                
                    'hak_akses'   => 1,
                );
            } else {
                $data = array(
                
                    'hak_akses'   => 2,
                );
            }

            $where = array(
                'id_jadwal' => $id_jadwal
            );

            $this->smpalhidayahModel->update_data('data_jadwaltengok', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diupdate!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('guru/Dashboard');
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
