<?php  
class sports_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sport_model');
    }
    public function get_sports($sid)
    {
        $file['sport']=$this->sport_model->get_sports($sid);
        $this->load->view('template/header',$file);   
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }
    public function sports_details($sid)
    {
        $file['data']=$this->sport_model->sports_details($sid);
        $this->load->view('template/header');   
        $this->load->view('sports/sports',$file);
        $this->load->view('template/footer');
    }
    public function match_details($sid)
    {

        $file['match']=$this->sport_model->match_details($sid);
        $this->load->view('template/header');   
        $this->load->view('sports/match_details',$file);
        $this->load->view('template/footer');
    }
}
?>