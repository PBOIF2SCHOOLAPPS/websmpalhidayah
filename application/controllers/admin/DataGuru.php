<?php
class dataGuru extends CI_Controller
{
    public function index()
    {
        $data = $this->db->query("SELECT * FROM data_guru")->result();
        var_dump($data);
    }
}
