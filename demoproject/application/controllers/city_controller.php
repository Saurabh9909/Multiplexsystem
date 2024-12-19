<?php 
    class city_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("city_model");
        }
        public function index()
        {
            $file['data']=$this->city_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("location/city",$file);
        }
        public function update($eccid)
        {
            $file['data']=$this->city_model->update_status($eccid);
            redirect('city_controller/');
        }
    
        public function cityform()
        {
            $file['state']=$this->city_model->getstate();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("location/addcity",$file);   
        }
        public function addcity()
        {
            $this->city_model->inscity();
            $this->index();
        }
    
    }



?>