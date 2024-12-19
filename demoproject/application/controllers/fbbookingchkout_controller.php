<?php 
    class fbbookingchkout_controller extends CI_Controller
    {
        public function index()
        {
            $this->load->model("fbbookingchkout_model");
            $file['data']=$this->fbbookingchkout_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("food&bevrages/fbbookingchkout",$file);
        }
        public function update($ecid)
        {
            $this->load->model('fbbookingchkout_model');
            $file['data']=$this->fbbookingchkout_model->update_status($ecid);
            redirect('fbbookingchkout_controller/');  
        }
    }
?>