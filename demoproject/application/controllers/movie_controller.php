<?php 
class movie_controller extends CI_Controller
{
    public function __construct()
    {
      parent ::__construct();
        $this->load->model('movie_model');
        if($this->session->userdata('adminname')=="")
        {
            redirect('logincontroller');
        }
     }
   
    public function index()
    {
        $this->load->model('movie_model');
        $file['data']=$this->movie_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/showmovie",$file);
    }
    public function status($id)
    {
        $this->load->model('movie_model');
        $this->movie_model->status($id);
        $this->index();
    }
     
    public function addmovie()
    {
       
       $file['movie']=$this->db->get('movieindustry')->result();
       $file['movie1']=$this->db->get('moviecategory')->result();
       $file['movie2']=$this->db->get('multiplex')->result();
       $file['cast']=$this->db->get('moviecast')->result();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/addmovie",$file);
    }
    public function insert()
    {
        $this->load->model('movie_model');
        $this->movie_model->insert();
        $this->index();
    }
    public function delete($mid)
    {
        $this->load->model('movie_model');
        $this->movie_model->delete($mid);
        $this->index();
    }

    public function edit($id)
    {
        
       $file['movie']=$this->db->get('movieindustry')->result();
       $file['movie1']=$this->db->get('moviecategory')->result(); 
       $file['movie2']=$this->db->get('multiplex')->result(); 
       $file['cast']=$this->db->get('moviecast')->result();
    
       $file['edit']=$this->movie_model->edit($id);   
       $this->load->view("templete/header");
       $this->load->view("templete/sidebar");
       $this->load->view("movies/updatemovie",$file);
    }
    public function update($id)
    { 
        $this->movie_model->update($id);
        $this->index();
    }
}
?>