<?php 
class multiplex_controller extends CI_Controller
{
    public function __construct()
        {
          parent ::__construct();
            $this->load->model('multiplex_model');
            if($this->session->userdata('adminname')=="")
            {
                redirect('logincontroller');
            }
           }
    public function index()
    {
        $file['data']=$this->multiplex_model->getdata();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("multiplex/multiplex",$file);
    }
    public function status($id)
    {
        $this->multiplex_model->status($id);
        $this->index();
    }

    public function addmultiplex()
    {
        $file['area']=$this->db->get('area')->result();
        $file['city']=$this->db->get('city')->result();
        $file['state']=$this->db->get('state')->result();
        $this->load->view("templete/header");
        $this->load->view("templete/sidebar");
        $this->load->view("multiplex/addmultiplex",$file);
    }

    public function insert()
    {
        $this->multiplex_model->insert();
        $this->index();
    }
    public function delete($id)
    {
        $this->multiplex_model->delete($id);
        $this->index();
    }

    
    public function getcity($id)
    {
       
       $this->db->where('state_id',$id);
       $data=$this->db->get('city')->result();
       foreach($data as $row)
       {
       ?>
      
           <option value="<?php echo $row->city_id  ?>"><?php echo $row->city_name ?></option>
       <?php
       }
   }

   public function getarea($id)
   {
       $this->db->where('city_id',$id);
       $area=$this->db->get('area')->result();
       foreach($area as $rowarea)
       {
       ?>
       <option value="<?php echo $rowarea->area_id ?>"><?php echo $rowarea->area_area ?></option>
       <?php
       }
   }

}
?>