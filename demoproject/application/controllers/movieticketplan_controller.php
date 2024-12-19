<?php 
class movieticketplan_controller extends CI_Controller
{
    public function __construct()
        {
          parent ::__construct();
            $this->load->model('movieticketplan_model');
            if($this->session->userdata('adminname')=="")
            {
                redirect('logincontroller');
            }
           }
    public function index()
    {
        $file['data']=$this->movieticketplan_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/movieticket_plan",$file);
    }
    public function status($id)
    {
        $this->movieticketplan_model->status($id);
        $this->index();
    }

    public function addticketplan()
    {
        $file['movie']=$this->db->get('movie')->result();
        $file['multiplex']=$this->db->get('multiplex')->result();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/addmovie_ticketplan",$file);
    }

    public function insert()
    {
        $this->movieticketplan_model->insert();
        $this->index();
    }
    public function delete($id)
    {
        $this->movieticketplan_model->delete($id);
        $this->index();
    }
}
?>