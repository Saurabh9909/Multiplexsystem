<?php 
    class admincontroller extends CI_Controller
    {
        public function index()
        {
            $this->load->model("showadminmodel");
            $file['data']=$this->showadminmodel->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("admin/showadmin",$file);  
        }
        public function update($ecid)
        {
            $this->load->model('showadminmodel');
            $file['data']=$this->showadminmodel->update_status($ecid);
            redirect('admincontroller/');  
        }
        public function add()
        {
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("admin/addadmin"); 
        }
        public function admin_detail_update()
        {
            $this->db->where('admin_email');
            $file['data']=$this->db->get('admin')->result();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("admin/update_profile"); 
        }
        public function profile()
        {
            $this->session->set_userdata('admin_email');
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("admin/profile"); 
        }
    }
?>      