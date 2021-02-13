<?php
class dataOrangtua extends CI_Controller
{
    public function index()
    {
        $data = $this->db->query("SELECT * FROM data_orangtua")->result();
        var_dump($data);
    }
}
