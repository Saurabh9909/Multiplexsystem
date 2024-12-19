<?php  
class contact_controller extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('contact_us');
        $this->load->view('template/footer');
    }
}
?>