<?php 
    class area_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("area_model");
        }
        public function index()
        {
            $file['data']=$this->area_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("location/area",$file);
        }
        public function update($ecid)
        {
            $file['data']=$this->area_model->update_status($ecid);
            redirect('area_controller/');
        }
        public function areaform()
        {
            $file["state"]=$this->area_model->getstate();
            $file["city"]=$this->area_model->getcity();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("location/addarea",$file);
        }
        public function addarea()
        {
            $this->area_model->insarea();
            $this->areaform();
        }

        public function getcity($id)
        {
            $this->area_model->getcity_op($id);
        }
    }
?>