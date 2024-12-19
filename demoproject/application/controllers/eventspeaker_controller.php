<?php 
    class eventspeaker_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('eventspeaker_model');
        }
        public function index()
        {
            $file['data']=$this->eventspeaker_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("event/eventspeaker",$file);
        }

        public function update($ecid)
        {
            $file['data']=$this->eventspeaker_model->update_status($ecid);
            redirect('eventspeaker_controller/');  
        }
        public function add_eventspeaker()
        {
            $file['eventcat']=$this->eventspeaker_model->get_eventcat();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("event/addeventspeaker",$file);
        }
        public function insert_eventspeaker()
        {
            $this->eventspeaker_model->insert_eventspeaker();
            redirect('eventspeaker_controller');
        }

        public function edit_es($esid)
        {
            $file['eventcat']=$this->eventspeaker_model->get_eventcat($esid);
            $file['edit']=$this->eventspeaker_model->edit_es($esid);         
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("event/update_eventspeaker",$file);
        }
        public function update_es($esid)
        {
       
            $this->eventspeaker_model->update_es($esid);
            redirect('eventspeaker_controller');
            //print_r($esid);
            }
        public function delete_es($eid)
        {
            $this->eventspeaker_model->delete_es($eid);
            redirect('eventspeaker_controller');
        } 
    }
?>