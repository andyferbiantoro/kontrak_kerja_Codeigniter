<?php

class M_hps extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('hps');
        $query = $this->db->get();
        return $query->result();
    }

}
