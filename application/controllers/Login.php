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
                        redirect('admin/dashboard');
                        break;

                    case 2:
                        redirect('guru/dashboard');
                        break;

                    case 3:
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
