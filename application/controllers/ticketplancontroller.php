<?php
    class ticketplancontroller extends CI_Controller
    {
        public function __construct()
	    {
            parent::__construct();
            // $this->load->model('ticketmodel');
            $this->load->model('movie_model');
        }
        public function index($id)
        {
            $file['city']=$this->db->get('city')->result();
            $file['movie']=$this->db->get('movie')->result();
            $file['sports']=$this->db->get('sports')->result();
            $file['event']=$this->db->get('event')->result();
            $file['multiplex']=$this->db->get('multiplex')->result();
            $file['eventcategory']=$this->db->get('eventcategory')->result();
            $file['movieindustry']=$this->db->get('movieindustry')->result();
            $file['moviecategory']=$this->db->get('moviecategory')->result();

            $file['record']=$this->movie_model->getdata($id);

            $this->load->view('template/header',$file);
            $this->load->view('ticket/ticketplan',$file);
            $this->load->view('template/footer');
        }
       
        public function getmultiplex($id)
        {
            $this->db->where('city_id',$id);
            $file['multiplex'] = $this->db->get('multiplex')->result();
            $this->load->view('ticket/getmultiplex',$file);
        }
    }
?>