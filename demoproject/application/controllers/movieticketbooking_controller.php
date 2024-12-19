<?php 
class movieticketbooking_controller extends CI_Controller
{
    public function __construct()
        {
          parent ::__construct();
            $this->load->model('movieticketbooking_model');
            if($this->session->userdata('adminname')=="")
            {
                redirect('logincontroller');
            }
           }
       
    public function index()
    {
        $file['data']=$this->movieticketbooking_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/movieticket_booking",$file);
    }
    public function status($id)
    {
        $this->movieticketbooking_model->status($id);
        $this->index();
    }

    public function addticket()
    {
       $file['movie']=$this->db->get('movie')->result();
       $file['multiplex']=$this->db->get('multiplex')->result();
       $file['ticket']=$this->db->get('movieticketplan')->result();
       $file['seatname']=$this->db->get('movieseatplan')->result();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/addmovie_ticketbooking",$file); 
    }

    public function insert()
    {
        $this->movieticketbooking_model->insert();
        $this->index();
    }

    public function delete($id)
    {
        $this->movieticketbooking_model->delete($id);
        $this->index();
    }
}
?>