<?php  
    class homecontroller extends CI_Controller
    {
        public function index()
         {
            $file1['industry']=$this->db->get('movieindustry')->result();
            $file1['industry']=$this->db->get('event')->result();
            $file['data']=$this->db->get('movie')->result();
            $this->load->view('template/header',$file1);
            $this->load->view('template/content',$file);
            $this->load->view('template/footer');
        }

        
    }
?>