<?php

    class movieseatplan_controller extends CI_Controller
    {
        public function __construct()
        {
          parent ::__construct();
            $this->load->model('movieseatplan_model');
            if($this->session->userdata('adminname')=="")
            {
                redirect('logincontroller');
            }
           }
        public function index()
        {

            $file['data']=$this->movieseatplan_model->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("movies/movieseatplan",$file);
        }

        public function status($id)
        {
            $this->movieseatplan_model->status($id);
            $this->index();
        }

        public function addseatplan()
        {
            $file['ticket']=$this->db->get('movieticketplan')->result();
            $file['movie']=$this->db->get('movie')->result();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("movies/addmovie_seatplan",$file);
        }
        public function insert()
        {
            $this->movieseatplan_model->insert();
            $this->index();
        }

        public function delete($id)
        {
            $this->movieseatplan_model->delete($id);
            $this->index();
        }
        
    }
?>