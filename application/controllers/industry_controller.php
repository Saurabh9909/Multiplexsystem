<?php 
class industry_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('movie_model');
    }  
    public function display($mid)
    {
        $this->db->where('movie_id',$mid);
        $file['movieimages']=$this->db->get('movieimg')->result();
        $file['record']=$this->movie_model->getdata($mid);
        $this->load->view('template/header');
        $this->load->view('movie/moviedetails',$file);
        $this->load->view('bollywood/footer');
    }
    
}
?>