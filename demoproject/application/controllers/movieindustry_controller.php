<?php 
class movieindustry_controller extends CI_Controller
{
    public function __construct()
    {
      parent ::__construct();
        $this->load->model('movieindustry_model');
        if($this->session->userdata('adminname')=="")
        {
            redirect('logincontroller');
        }
       }
    public function index()

    {
        $file['data']=$this->movieindustry_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("movies/movieindustry",$file);
    }
    public function status($id)
    {
        $this->movieindustry_model->status($id);
        $this->index();
    }
    public function addindustry()
    {
       
        $this->load->view("templete/header");
         $this->load->view("templete/sidebar");
        $this->load->view("movies/addmovie_industry");
    }

    public function insert()
    {
        $this->movieindustry_model->insert();
    }

    public function delete($id)
    {
        $this->movieindustry_model->delete($id);
        $this->index();
    }
    public function edit($id)
    {
       $file['edit']=$this->movieindustry_model->edit($id);   
       $this->load->view("templete/header");
       $this->load->view("templete/sidebar");
       $this->load->view("movies/updatemovie_industry",$file);
    }
    public function update($id)
    {
        $this->movieindustry_model->update($id);
        redirect('movieindustry_controller');
    }
}
?>