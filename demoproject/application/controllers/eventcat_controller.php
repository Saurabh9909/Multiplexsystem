<?php 
    class eventcat_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('eventcat_model');
        }
        public function index()
        {
            $file['event']=$this->eventcat_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("event/eventcategory",$file);  
        }
        public function update($ecid)
        {
            $file['event']=$this->eventcat_model->update_status($ecid);
            redirect('eventcat_controller/');  
        }
        public function eventcat_form()
        {
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("event/addeventcategory");  
        }
        public function insert_eventcategory()
        {
            $this->eventcat_model->insert_eventcategory();
            $this->index();
        }
    }
?>