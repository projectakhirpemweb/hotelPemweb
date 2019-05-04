<?php


class Hotel extends CI_Controller {


	public function index(){
        $this->load->model('m_formOrder');
        $data["super"] = $this->m_formOrder->getRoomAvailable('Super');
        $data["hyper"] = $this->m_formOrder->getRoomAvailable('Hyper');
        foreach ($this->m_formOrder->getRoomData('Super') as $query) {
            $data["roomSuper_image"] = $query->image;
            $data["roomSuper_price"] = $query->room_price;
            $data["roomSuper_quota"] = $query->room_quota;
            $data["roomSuper_desc"] = $query->room_desc;
        }
        foreach ($this->m_formOrder->getRoomData('Hyper') as $query) {
            $data["roomHyper_image"] = $query->image;
            $data["roomHyper_price"] = $query->room_price;
            $data["roomHyper_quota"] = $query->room_quota;
            $data["roomHyper_desc"] = $query->room_desc;
        }

        $this->load->view('v_formRoom' , $data);
    }

    public function orderRoom(){
        $data["dataRoom"] = $this->input->post('type') ;
        $this->load->view('v_formPendaftaran' , $data);
    }

    public function tampilkanOrder(){
        $id = $this->input->post('nik') ;
        $this->load->model('m_formOrder');

        $data["order"] = $this->m_formOrder->getOrder($id);
        $this->load->view('v_orderPage' , $data);
    }

    public function reserve(){
	    try {
	        $this->inputData();
        } catch (mysqli_sql_exception $ex){
            $this->index();
        }
    }

    function inputData(){
        $name = $this->input->post('f-name')." ".$this->input->post('l-name');
        $nik = $this->input->post('nik');
        $pin = $this->input->post('pin');
        $contact = $this->input->post('telephone');
        $address = $this->input->post('address');

        $id = $this->generateNumber();
        $orderPrice = $this->price($this->input->post('regist'));
        $orderDate = date("d-m-Y");
        $orderStay = $this->input->post('stayDays');
        $orderQuota = $this->input->post('quota');
        $orderStatus = 0;
        $room_number = $this->input->post('room_number');

        $this->load->model('m_formOrder');
        $this->m_formOrder->registrationGuest($name, $nik, $pin, $contact, $address);
        $this->m_formOrder->registrationOrder($id, $orderPrice, $orderDate, $orderStay, $orderStatus, $room_number, $orderQuota, $nik);
    }

    function generateNumber(){
        $this->load->model('m_formOrder');
        $generate = mt_rand(0,999);
        if ($this->m_formOrder->check($generate)){
            $generate = $this->generateNumber();
        }
        return $generate;
    }

    function price($type){
        foreach ($this->m_formOrder->getRoomData($type) as $query) {
            return $query->room_price;
        }
    }

    function generateQRCODE(){

    }
}
