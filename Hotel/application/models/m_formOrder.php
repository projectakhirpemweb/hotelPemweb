<?php

class m_formOrder extends CI_Model {
    public function roomOrder(){
        $query = $this->db->get('hotelRoom');


		return $query->result();
    }

    public function getRoomAvailable($type){
        $query = $this->db->get_where('hotelRoom', array('room_type' => $type, 'room_status' => 0 ));
        return $query->num_rows();
    }

    public function getRoomData($type){
        $query = $this->db->get_where('hotelRoom', array('room_type' => $type ), 1,0);
        return $query->result();
    }

    public function registrationGuest($name, $nik, $pin, $contact, $address){

        $data = array(
            'name' => $name,
            'nik' => $nik,
            'pin' => $pin,
            'contact' => $contact,
            'address' => $address,
        );
        $this->db->insert('guest',$data);
    }

    public function registrationOrder($id, $orderPrice, $orderDate, $orderStay, $orderStatus, $room_number, $orderQuota, $nik){
        $data = array(
            'order_id' => $id,
            'order_price' => $orderPrice,
            'order_date' => $orderDate,
            'order_staydays' => $orderStay,
            'order_status' => $orderStatus,
            'room_number' => $room_number,
            'order_quota' => $orderQuota,
            'nik' =>  $nik
        );
        $this->db->insert('order',$data);
        $this->reserve($room_number, 1);
    }

    public function reserve($room_number, $room_status){
        $data = array(
            'room_status' => $room_status
        );
        $this->db->where('room_number',$room_number);
        $this->db->update('hotelroom', $data);
    }

    public function check($id) {
        $query = $this->db->get_where('order', array('order_id' => $id));
        foreach ($query->result() as $data){
            if ($data->order_id == $id) return true;
        }
        return false;
    }

    public function getOrder($id){
        $this->db->select('*');
        $this->db->from('order');
        $this->db->join('guest', 'order.nik = guest.nik');
        $this->db->join('hotelroom', 'order.room_number = hotelroom.room_number');
        $this->db->where('guest.nik',$id);
        $query = $this->db->get();
        $data[] = '';
        foreach ($query->result() as $datas) {
            $data['order'] = " <table >
                 <tr style=\"background-color:lightblue;color:black;\">
                    <td>Name</td>
                    <td>$datas->name</td>
                 </tr>
                 <tr style=\"background-color:white;color:black;\">
                    <td>NIK</td>
                    <td>$datas->nik</td>
                 </tr>
                 <tr style=\"background-color:lightblue;color:black;\">
                    <td>Address</td>
                    <td>$datas->address</td>
                 </tr>
                 <tr style=\"background-color:white;color:black;\">
                    <td>Contact</td>
                    <td>$datas->contact</td>
                 </tr>
                 <tr style=\"background-color:lightblue;color:black;\">
                    <td>Order ID</td>
                    <td>$datas->order_id</td>
                 </tr>
                 <tr style=\"background-color:white;color:black;\">
                    <td>Order Price</td>
                    <td>$datas->order_price</td>
                 </tr>
                 <tr style=\"background-color:lightblue;color:black;\">
                    <td>Order Date</td>
                    <td>$datas->order_date</td>
                 </tr>
                 <tr style=\"background-color:white;color:black;\">
                    <td>Order Stay</td>
                    <td>$datas->order_staydays</td>
                 </tr>
                 <tr style=\"background-color:lightblue;color:black;\">
                    <td>Room Number</td>
                    <td>$datas->room_number</td>
                 </tr>
                 <tr style=\"background-color:white;color:black;\">
                    <td>Room Type</td>
                    <td>$datas->room_type</td>
                 </tr>
              </table>";
            $data['status'] = 'Status : ' . $datas->order_status == 1 ? 'Lunas' : 'Belum Lunas';
            return $data;
        }
    }
}

?>