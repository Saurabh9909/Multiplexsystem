<?php 
    class ticketbookingcontroller extends  CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();
            $this->load->model('movie_model');
        }
        public function getmulid($id,$movie,$date,$time)
        {
            $this->session->set_userdata('movie_id',$movie);
            $this->session->set_userdata('multiplex_id',$id);
            $this->session->set_userdata('date',$date);
            $this->session->set_userdata('time',$time);
            echo $id;

        } 
        public  function display($id)
        {

            $file['city']=$this->db->get('city')->result();
            $file['movie']=$this->movie_model->getdata($id);
            $file['sports']=$this->db->get('sports')->result();
            $file['event']=$this->db->get('event')->result();
            $file['multiplex']=$this->db->get('multiplex')->result();
            $file['eventcategory']=$this->db->get('eventcategory')->result();
            $file['movieindustry']=$this->db->get('movieindustry')->result();
            $file['moviecategory']=$this->db->get('moviecategory')->result();
            
            $this->db->from('movieticketbooking');
            $this->db->join('movieseatplan','movieseatplan.seatplan_id=movieticketbooking.seatplan_id');
            $this->db->join('movieticketplan','movieticketplan.movieticket_id=movieticketplan.movieticket_id');
            
            $this->db->where('movieticketbooking.multiplex_id',$this->session->userdata('multiplex_id'));
            $this->db->where('movieticketbooking.movie_id',$this->session->userdata('movie_id'));
            $this->db->where('movieticketplan.movieticket_time',$this->session->userdata('time'));
            $this->db->where('movieticketplan.movieticket_date',$this->session->userdata('date'));
            $this->db->group_by('movieticketbooking.ticketbooking_id');
            $data=$this->db->get()->result();
            
            $file['bookseat'][] = "";
            
            // echo "<pre>";
            // print_r( $data);
            // die();

            for($i=0;$i<count($data);$i++)
            {
                $file['bookseat'][$i] = $data[$i]->seat_name;
                // print_r($data[$i]->seat_name);
            }
            // echo "<pre>";
            // print_r( $file['bookseat']);
            // die();

            $file['record']=$this->movie_model->getdata($id);
            $this->session->set_userdata('movieprice',$file['record']->movie_price);
            // echo '<pre>';
            // print_r($file['record']);
            // die();
            

            $this->load->view('template/header');
            $this->load->view('seatplan/seatplan',$file);
            $this->load->view('template/footer');
        }
        public function getmovie($id)
        {
   
            $this->db->where('movie_id',$id);
            $file['record']=$this->movie_model->getdata($id);
            $this->load->view('ticket/getmultiplex',$file);
        }
        
    }
?>