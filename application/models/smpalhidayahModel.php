<?php
class smpalhidayahModel extends CI_Model
{


    public function get_data($table)
    {
            return $this->db->get($table);
  
    }

    public function get_data_where($table,$id)
    {
        return $this->db->get_where($table, array('id_siswa'=>$id));
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result_guru = $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('data_guru');

        $result_siswa = $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('data_siswa');

        if ($result_guru->num_rows() > 0) {
            // var_dump("ada");
            // die;
            return $result_guru->row();
            
        } else if ($result_siswa->num_rows() > 0) {
            // var_dump("ada");
            // die;
            return $result_siswa->row();
            
        } 
        
        else {
            // var_dump("tidak ada");
            // die;
            return FALSE;
        }
    }

    public function join_table()
    {
        $this->db->select('data_jadwaltengok.id_jadwal, data_jadwaltengok.tanggal_jadwal, data_siswa.nama_orangtua, data_siswa.nama_siswa, data_jadwaltengok.hak_akses');
        $this->db->from('data_siswa');
        $this->db->join('data_jadwaltengok', 'data_siswa.id_siswa = data_jadwaltengok.id_siswa');
        $query = $this->db->get();
        return $query;
    }


}
