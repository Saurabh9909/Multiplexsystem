<?php 
class moviecat_controller extends CI_Controller
{
    
    public function __construct()
    {
      parent ::__construct();
        $this->load->model('moviecat_model');
        if($this->session->userdata('adminname')=="")
        {
            redirect('logincontroller');
        }
       }
    public function index()
    {
       
        $file['data']=$this->moviecat_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/moviecat",$file);
    }
    public function status($id)
    {
        $this->moviecat_model->status($id);
        $this->index();
    }

    public function addcat()
    {
        $file['cat']=$this->db->get('movieindustry')->result();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/addmovie_cat",$file); 
    }

    public function insert()
    {
        
        $this->moviecat_model->insert();
    }
    public function delete($id)
    {
       
        $this->moviecat_model->delete($id);
        $this->index();
    }

    public function edit($id)
    {
        
       $file['cat']=$this->db->get('movieindustry')->result();
 
       $file['edit']=$this->moviecat_model->edit($id);   
       $this->load->view("templete/header");
       $this->load->view("templete/sidebar");
       $this->load->view("movies/updatemovie_cat",$file);
    }
    public function update($id)
    { 
        $this->moviecat_model->update($id);
        $this->index();
    }
}
?>