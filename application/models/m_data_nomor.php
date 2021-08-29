<?php

class M_data_nomor extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('data_nomor');
        $query = $this->db->get();
        return $query->result();
    }

}
