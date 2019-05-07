<?php


class Hotel extends CI_Controller {


    public function index(){
        $this->load->helper('url');
        $this->load->view('v_homePage.php');
    }

	public function book()
    {
        $this->load->helper('url');
        $this->load->model('m_formOrder');
        $data["super"] = $this->m_formOrder->getRoomAvailable('Super');
        $data["hyper"] = $this->m_formOrder->getRoomAvailable('Hyper');
        foreach ($this->m_formOrder->getRoomData('Super') as $query) {
            $data["roomSuper_image"] = $query->image;
            $data["roomSuper_price"] = $query->room_price;
            $data["roomSuper_quota"] = $query->room_quota;
            $data["roomSuper_desc"] = $query->room_desc;
            $data["roomSuper_type"] = $query->room_type;
        }
        foreach ($this->m_formOrder->getRoomData('Hyper') as $query) {
            $data["roomHyper_image"] = $query->image;
            $data["roomHyper_price"] = $query->room_price;
            $data["roomHyper_quota"] = $query->room_quota;
            $data["roomHyper_desc"] = $query->room_desc;
            $data["roomHyper_type"] = $query->room_type;
        }

        $this->load->view('v_book', $data);
    }

    public function orderRoom(){
        $this->load->helper('url');
        $data["dataRoom"] = $this->input->post('type');
        $data["availableRoom"] = $this->input->post('available');
        $this->load->view('v_form' , $data);
    }

    public function tampilkanOrder(){
        $id = $this->input->post('nik') ;
        $this->load->model('m_formOrder');

        $data["order"] = $this->m_formOrder->getOrder($id);
        $this->load->view('v_orderPage' , $data);
    }

    public function reserve(){
	    $this->inputData();
    }

    function inputData(){
        $name = $this->input->post('f-name')." ".$this->input->post('l-name');
        $nik = $this->input->post('nik');
        $pin = $this->input->post('pin');
        $contact = $this->input->post('telephone');
        $address = $this->input->post('address');

        $id = $this->generateNumber();
        $orderFirstDate = $this->input->post('firstDate');
        $orderLastDate = $this->input->post('lastDate');
        $datediff = strtotime($orderLastDate) - strtotime($orderFirstDate);
        $orderPrice = $this->weekendPrice($this->input->post('regist'),$orderFirstDate ,round($datediff / (60 * 60 * 24)));
        $orderPrice += $id;
        $orderQuota = $this->input->post('quota');
        $orderStatus = 0;
        $room_number = $this->input->post('room_number');

        $this->load->model('m_formOrder');
        $this->m_formOrder->registrationGuest($name, $nik, $pin, $contact, $address);
        $this->m_formOrder->registrationOrder($id, $orderPrice, $orderFirstDate, $orderLastDate, $orderStatus, $room_number, $orderQuota, $nik);
    }

    function generateNumber(){
        $this->load->model('m_formOrder');
        $generate = mt_rand(0,999);
        if ($this->m_formOrder->check($generate)){
            $generate = $this->generateNumber();
        }
        return $generate;
    }

    function weekendPrice($post, $firstDate, $days){
        $finalPrice = 0;
        $tempPrice = $this->price($post);
        for ($i = 0; $i<$days ; $i++) {
            if ($this->checkDay(date('Y-m-d',strtotime($firstDate .("+$i days"))))) {
                $finalPrice += $tempPrice * (120 / 100);
            } else {
                $finalPrice += $tempPrice;
            }
        }
	    return $finalPrice;
    }

    function price($type){
        foreach ($this->m_formOrder->getRoomData($type) as $query) {
            return $query->room_price;
        }
    }

    function orderPage(){


        $this->load->view('v_checkOrder');
    }

    function checkDay($daytime){
        $timestamp = strtotime($daytime);

        $day = date('l', $timestamp);

        if(strtolower($day) == "friday" || strtolower($day) == "saturday" || strtolower($day) == "sunday") return true;
        else return false;
    }

    function transfer(){

    }

}
