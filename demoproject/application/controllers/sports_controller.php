<?php 
    class sports_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('sports_model');

        }
        public function index()
        {
            $file['data']=$this->sports_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("sports/sports",$file);
        }
        public function update($ecid)
        {
            $file['data']=$this->sports_model->update_status($ecid);
            redirect('sports_controller/');  
        }
        public function sportsform()
        {
            $file['data']=$this->sports_model->getdata();
            $file['state']=$this->sports_model->getstate();
            $file['area']=$this->sports_model->getarea();
            $file['city']=$this->sports_model->getcity();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("sports/addsports",$file);
        } 
        public function addsports()
        {
            $this->sports_model->addsports();
            $this->index();
        }
        public function edit_sports($sid)
        {
            $file['state']=$this->sports_model->getstate();
            $file['area']=$this->sports_model->getarea();
            $file['city']=$this->sports_model->getcity();
            $file['edit']=$this->sports_model->edit_sports($sid);
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("sports/update_sports",$file);
        }
        public function update_sports($sid)
        {
            $this->sports_model->update_sports($sid);
            redirect('sports_controller');
        }
        public function delete_sports($sid)
        {
            $this->sports_model->delete_sports($sid);
            reidrect('sports_controller');
        } 
        public function addstadium()
        {
            $file['state']=$this->sports_model->getstate();
            $file['area']=$this->sports_model->getarea();
            $file['city']=$this->sports_model->getcity();
            // $file['edit']=$this->sports_model->edit_sports();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("sports/addstadium",$file);
        }
        public function insert_stadium()
        {
            $this->sports_model->insert_stadium();
            redirect('sports_controller/showstadium');
            
        }
        public function showstadium()
        {
            $file['data']=$this->sports_model->stadium_data();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("sports/show_stadium",$file);
        }
        public function update_stadium_status($sid)
        {
            $this->sports_model->update_stadium_status($sid);
            redirect('sports_controller/showstadium');
        }
        public function edit_sports_stadium($sid)
        {
            $file['state']=$this->sports_model->getstate();
            $file['area']=$this->sports_model->getarea();
            $file['city']=$this->sports_model->getcity();
            $file['edit']=$this->sports_model->edit_stadium($sid);
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("sports/update_stadium",$file);
        }
        public function update_stadium($sid)
        {
            $this->sports_model->update_stadium($sid);
            redirect('sports_controller/showstadium');
        }
    }

?>