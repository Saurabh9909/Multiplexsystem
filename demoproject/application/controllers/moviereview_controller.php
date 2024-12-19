<?php 
class moviereview_controller extends CI_Controller
{
    public function __construct()
    {
      parent ::__construct();
        $this->load->model('moviereview_model');
        if($this->session->userdata('adminname')=="")
        {
            redirect('logincontroller');
        }
       }
    public function index()
    { 
        $file['data']=$this->moviereview_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/moviereview",$file);
    }
    public function addreview()
    {
       $file['user']=$this->db->get('user')->result();
       $file['movie']=$this->db->get('movie')->result();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/addmovie_review",$file);
    }
    public function insert()
    {
        $this->moviereview_model->insert();
        $this->index();
    }

    public function delete($id)
    {
        $this->moviereview_model->delete($id);
        $this->index();
    }
}
?>