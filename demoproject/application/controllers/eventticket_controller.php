<?php 
    class eventticket_controller extends CI_Controller
    {
        public function index()
        {
            $this->load->model("eventticket_model");
            $file['data']=$this->eventticket_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("event/eventticket",$file);
        }
        public function update($ecid)
        {
            $this->load->model('eventticket_model');
            $file['data']=$this->eventticket_model->update_status($ecid);
            redirect('eventticket_controller/');  
        }
    }
?>