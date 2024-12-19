<?php
class fbbooking_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('fbbooking_model');
    }   
     public function index()
    {
        $file['data']=$this->fbbooking_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("food&bevrages/fbbooking",$file);
    }

    public function update($ecid)
    {
        $file['data']=$this->fbbooking_model->update_status($ecid);
        redirect('fbbooking_controller/');  
    }
    public function fbform()
    {
        $file['data']=$this->fbbooking_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("food&bevrages/addfood&beverage",$file);
    }
    public function insert_fb()
    {
        $this->fbbooking_model->insert_fb();
       redirect('fbbooking_controller/');
    }
    public function edit_fb($fbid)
    {
       $file['edit']=$this->fbbooking_model->edit_fb($fbid);   
       $this->load->view("templete/header");
       $this->load->view("templete/sidebar");
       $this->load->view("food&bevrages/update_fbbooking",$file);
    }   
    public function update_fb($fbid)
    {
        $this->fbbooking_model->update_fb($fbid);
        redirect('fbbooking_controller');
    }
    public function delete_fb($fbid)
    {
        $this->fbbooking_model->delete_fb($fbid);
        redirect('fbbooking_controller');
    }
}
?>