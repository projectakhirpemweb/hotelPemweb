<?php

class m_transfer extends CI_Model
{
    public function data($price)
    {
        $id =  substr($price, -3);
        $cek = array('order_price' => $price, 'order_id' => $id);
        $this->db->select('*');
        $this->db->from('order');
        $this->db->where($cek);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $this->changeStatus($id);
            return true;
        } else {
            return false;
        }
    }

    function changeStatus($id){
        $data = array(
            'order_status' => 1
        );
        $this->db->where('order_id',$id);
        $this->db->update('order', $data);
    }

}

?>