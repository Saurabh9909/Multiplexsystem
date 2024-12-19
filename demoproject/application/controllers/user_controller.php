<?php 
    class user_controller extends CI_Controller
    {
        public function index()
        {
            $this->load->model("user_model");
            $file['data']=$this->user_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("user/user",$file);
        }

        public function update($ecid)
        {
            $this->load->model('user_model');
            $file['data']=$this->user_model->update_status($ecid);
            redirect('user_controller/');  
        }
    }
?>