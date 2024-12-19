<?php  
    class  movie_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('movie_model');
        }
        public function get_movie($mid)
        {
            $file['industry']=$this->movie_model->get_movie($mid);
            $this->load->view('template/header',$file);   
            $this->load->view('bollywood/content');
            $this->load->view('bollywood/footer');
        } 
        public function industry_details($inid)
        {
            $file['record']=$this->movie_model->getdata($inid);
            $file['sports']=$this->db->get('sports')->result();
            $file['eventcategory']=$this->db->get('eventcategory')->result();
            $file['movieindustry']=$this->db->get('movieindustry')->result();
            $file['moviecategory']=$this->db->get('moviecategory')->result();

            $file['data']=$this->movie_model->indusrty_details($inid);
            $this->load->view('template/header');
            $this->load->view('bollywood/content',$file);
            $this->load->view('bollywood/footer');
        }

        public function comingsoon()
    {
        $this->db->like('status','Coming');
        $file['data']=$this->db->get('movie')->result();
        $this->load->view('template/header');
        $this->load->view('template/content',$file);
        $this->load->view('template/footer');
        
        $file['data']=$this->db->get('movie')->result();
        $file['data1']=$this->db->get('event')->result();
        $file['sport']=$this->db->get('sports')->result();
        $file['city']=$this->db->get('city')->result();
    }
    public function nowshowing()
    {
        
        $this->db->like('status','current');
        $file['data']=$this->db->get('movie')->result();
        $this->load->view('template/header');
        $this->load->view('template/content',$file);
        $this->load->view('template/footer');
        $file['data']=$this->db->get('movie')->result();
        $file['data1']=$this->db->get('event')->result();
        $file['sport']=$this->db->get('sports')->result();
        $file['city']=$this->db->get('city')->result();
    }
    }
?>