<?php 
    class state_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('state_model');
        }
        public function index()
        {
           $file['data']=$this->state_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("location/state",$file);
        }
        public function update($ecid)
        {
           $file["data"]=$this->state_model->update_status($ecid);
            redirect('state_controller/');
        }
        public function stateform()
        {
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("location/addstate");  
        }
        public function insert_state()
        {
            $this->state_model->insstate();
            $this->index();
        }
    }
?>