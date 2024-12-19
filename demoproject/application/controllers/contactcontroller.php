<?php 
    class contactcontroller extends CI_Controller
    {
        public function index()
        {
            $this->load->model("contactmodel");
            $file['data']=$this->contactmodel->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("contact/showcontact",$file);
        }

        public function update($ecid)
        {
            $this->load->model('contactmodel');
            $file['data']=$this->contactmodel->update_status($ecid);
            redirect('contactcontroller/');  
        }
    }
?>  