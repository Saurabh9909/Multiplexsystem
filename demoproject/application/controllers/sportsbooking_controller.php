<?php
class sportsbooking_controller extends CI_Controller
{
    public function index()
    {
        $this->load->model("sportsbooking_model");
        $file['data']=$this->sportsbooking_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("sports/sportsbooking",$file);
    }
    public function update($ecid)
    {
        $this->load->model('sportsbooking_model');
        $file['data']=$this->sportsbooking_model->update_status($ecid);
        redirect('sportsbooking_controller/');  
    }
}
?>