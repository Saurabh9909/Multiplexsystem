<?php
class fbaddtocart_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('fbaddtocart_model');
    }
    public function index()
    {
        $file['data']=$this->fbaddtocart_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("food&bevrages/fbaddtocart",$file);
    }
    public function update($ecid)
    {
        $file['data']=$this->fbaddtocart_model->update_status($ecid);
        redirect('fbaddtocart_controller/');  
    }
    public function update_addtocart($facid)
    {
        $file['edit']=$this->fbaddtocart_model->update_addtocart($facid);
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("food&bevrages/update_fbaddtocart");
    }
}
?>