<?php 
class moviecast_controller extends CI_Controller
{
    public function __construct()
    {
      parent ::__construct();
        $this->load->model('moviecast_model');
        if($this->session->userdata('adminname')=="")
        {
            redirect('logincontroller');
        }
       }
    public function index()
    {
        $this->load->model('moviecast_model');
        $file['data']=$this->moviecast_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/moviecast",$file);
    }
    public function status($id)
    {
        $this->load->model('moviecast_model');
        $this->moviecast_model->status($id);
        $this->index();
    }

    public function addcast()
    {
        $file['movie']=$this->db->get('movie')->result();
        
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/addmovie_cast",$file);
    }
    public function insert()
    {
        $this->load->model('moviecast_model');
        $this->moviecast_model->insert();
    }

    public function delete($id)
    {
        $this->load->model('moviecast_model');
        $this->moviecast_model->delete($id);
        $this->index();
    }

    public function edit($id)
    {
       $file['movie']=$this->db->get('movie')->result();   
       $file['edit']=$this->moviecast_model->edit($id);   
       $this->load->view("templete/header");
       $this->load->view("templete/sidebar");
       $this->load->view("movies/updatemovie_cast",$file);
    }
    public function update($id)
    {
        $this->moviecast_model->update($id);
        redirect('moviecast_controller');
    }
}
?>