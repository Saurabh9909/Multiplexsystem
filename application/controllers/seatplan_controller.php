<?php  
class seatplan_controller extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('seatplan/content');
        $this->load->view('template/footer');
    }
    public function ticket_chkout()
    {
        // $this->load->model('movie_model');
        // $file['data']=$this->movie_model->movie_details($mid);
        $this->load->view('template/header');
        $this->load->view('ticket/movie_ticketchkout');
        $this->load->view('template/footer');
    }
}
?>