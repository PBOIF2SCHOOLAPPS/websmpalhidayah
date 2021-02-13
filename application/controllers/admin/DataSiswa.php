<?php
class dataSiswa extends CI_Controller
{
    public function index()
    {
        $data = $this->db->query("SELECT * FROM data_siswa")->result();
        var_dump($data);
    }
}
