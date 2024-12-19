<?php 
class event_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('event_model');
    }
    public function get_event($eid)
    {
        $this->load->model('event_model');
        $file['eventcat']=$this->event_model->get_event($eid);
        $this->load->view('template/header',$file);
        $this->load->view('event/content');
        $this->load->view('template/footer');
    }
    public function event($inid)
    {
        $file['data']=$this->event_model->event_details($inid);
        $this->load->view('template/header');
        $this->load->view('event/event',$file);
        $this->load->view('bollywood/footer');
    }
    public function event_details($inid)
    {
        $file['event_data']=$this->event_model->event_details($inid);
        $file['event_speaker']=$this->event_model->event_speakers($inid);
        $this->load->view('template/header');
        $this->load->view('event/event_detail',$file);
        $this->load->view('bollywood/footer');
    }
    public function event_category($eid)
    {
        $file['eventcatagory']=$this->event_model->event_category($eid);
        $this->load->view('template/header');
        $this->load->view('event/content',$file);
        $this->load->view('bollywood/footer');
    }
   
}
?>