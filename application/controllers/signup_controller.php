<?php 

class signup_controller extends CI_Controller 
{
    public function index()
    {
        $this->load->view('sign-up');
    }
    public function insert_user()
    {
        $this->load->model('signup_model');
        $this->signup_model->insert_user();
        redirect('signin_controller');
    }
}
?>