<?php 
class movieimg_controller extends CI_Controller
{
    public function __construct()
    {
      parent ::__construct();
        $this->load->model('movieimg_model');
        if($this->session->userdata('adminname')=="")
        {
            redirect('logincontroller');
        }
       }
    public function index()

    {
        $file['data']=$this->movieimg_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/movieimg",$file);
    }
    public function status($id)
    {
        $this->movieimg_model->status($id);
        $this->index();
    }
    public function addimg()
    {
        $file['img']=$this->db->get('movie')->result();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/addmovie_image",$file); 
    }

    public function insert()
    {
        $this->movieimg_model->insert();
        $this->index();
    }
    public function delete($id)
    {
        $this->movieimg_model->delete($id);
        $this->index();
    }

    public function edit($id)
    {
        
       $file['img']=$this->db->get('movie')->result(); 
      
       $file['edit']=$this->movieimg_model->edit($id);   
       $this->load->view("templete/header");
       $this->load->view("templete/sidebar");
       $this->load->view("movies/updatemovie_img",$file);
    }
    public function update($id)
    { 
        $this->movieimg_model->update($id);
        $this->index();
    }
}
?>