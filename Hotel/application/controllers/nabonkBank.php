<?php


class nabonkBank extends CI_Controller
{


    public function bank()
    {
        $this->load->helper('url');
        $data['rek'] = $this->input->post('rek');
        $this->load->view('v_nabonkBank.php',$data);
    }

    public function transfer(){
        $this->load->model('m_transfer');
        if($this->m_transfer->data($this->input->post('price'))==TRUE && $this->input->post('rek')=="1751852736" ){

            echo "<script>  
		 			alert('Transfer Success!');
		 			window.location.href='".base_url('hotel/checkOrder')."';
                 </script>";

        }else{
            echo "<script>
                    window.location.href='".base_url('nabonkBank/bank')."';
                    alert('Billing Account or Amount is wrong');
                 </script>";
        }
    }
}
?>