<?php 
    class matchticketbookcontroller  extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();
            $this->load->model('matchticketbookmodel');
        }
        
        public function display($id)
        {
            $file['city']=$this->db->get('city')->result();
            $file['movie']=$this->db->get('movie')->result();
            $file['sports']=$this->db->get('sports')->result();
            $file['event']=$this->db->get('event')->result();
            $file['multiplex']=$this->db->get('multiplex')->result();
            $file['eventcategory']=$this->db->get('eventcategory')->result();
            $file['movieindustry']=$this->db->get('movieindustry')->result();
            $file['moviecategory']=$this->db->get('moviecategory')->result();

            $file['stadium']= $this->matchticketbookmodel->getstadium();

            
            $file['match']=$this->matchticketbookmodel->showmatch($id);
            $this->load->view('template/header',$file);
            $this->load->view('sports/matchticketbooking',$file);
            $this->load->view('template/footer');
        }
        public function bookticket($id,$ticketno)
        {
            $file['city']=$this->db->get('city')->result();
            $file['movie']=$this->db->get('movie')->result();
            $file['sports']=$this->db->get('sports')->result();
            $file['event']=$this->db->get('event')->result();
            $file['multiplex']=$this->db->get('multiplex')->result();
            $file['eventcategory']=$this->db->get('eventcategory')->result();
            $file['movieindustry']=$this->db->get('movieindustry')->result();
            $file['moviecategory']=$this->db->get('moviecategory')->result();

            $file['stadium']= $this->matchticketbookmodel->getstadium();

            
            $file['match']=$this->matchticketbookmodel->showmatch($id);

            $file['book'] = array
            (
                "name" => $this->input->post('name'),
                "email" => $this->input->post('email'),
                "number" => $this->input->post('number'),
                "ticketqty" => $this->input->post('tctqty'),
                "ticketprice" => $this->input->post('ticketprice'),
                "total" => $this->input->post('total'),
                "ticketno" => $ticketno
            );
            // print_r($file['book']);
            // die();
            
            $this->load->view('sports/ticketbook',$file);

        } 
    }
?>