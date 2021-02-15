<?php
class Login extends CI_Controller
{
    public function index()


    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $data['title_header'] = "Login| SMP AL-HIDAYAH";
            $this->load->view('template/header', $data);
            $this->load->view('login');
            $this->load->view('template/footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            
            $cek = $this->smpalhidayahModel->cek_login($username, $password);

            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username atau Password salah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
                redirect('login');
            } else {
                
                switch ($cek->hak_akses) {
                    case 1:
                        $user_data = array(
                            'id_guru'  => $cek->id_guru,
                            'username'  => $cek->username,
                            'nama_guru'     => $cek->nama_guru,
                            'status_guru'  => $cek->status_guru,
                            'hak_akses'  => $cek->hak_akses,
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata($user_data);
                        
                        redirect('admin/dashboard');
                        
                        break;

                    case 2:
                        $user_data = array(
                            'id_guru'  => $cek->id_guru,
                            'username'  => $cek->username,
                            'nama_guru'     => $cek->nama_guru,
                            'status_guru'  => $cek->status_guru,
                            'hak_akses'  => $cek->hak_akses,
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata($user_data);
                        redirect('guru/dashboard');
                        break;

                    case 3:
                        $user_data = array(
                            'id_siswa'  => $cek->id_siswa,
                            'username'  => $cek->username,
                            'nama_siswa'     => $cek->nama_siswa,
                            'nama_kelas'  => $cek->nama_kelas,
                            'nama_orangtua'  => $cek->nama_orangtua,
                            'hak_akses'  => $cek->hak_akses,
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata($user_data);
                        redirect('orangtua/dashboard');

                        break;

                    default:
                        break;
                }

            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }
}
