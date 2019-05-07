<?php

class m_login extends CI_Model
{
    public function login($nik, $pin)
    {
        $cek = array('nik' => $nik, 'pin' => $pin);
        $this->db->select('*');
        $this->db->from('guest');
        $this->db->where($cek);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function get($nik)
    {
        $cek = array('nik' => $nik);
        $this->db->select('*');
        $this->db->from('guest');
        $this->db->join('order', 'order.nik = guest.nik');
        $this->db->where($cek);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query;
        }
    }
}

?>