<?php 
    class sportsdetailscontroller extends CI_Controller
    {
        public function __constract()
        {
            parent :: __constract();
        }
        public  function display($id)
        {
            $file['spoartsid']=$id;
            $file['city']=$this->db->get('city')->result();
            $file['movie']=$this->db->get('movie')->result();
            $file['sports']=$this->db->get('sports')->result();
            $file['event']=$this->db->get('event')->result();
            $file['multiplex']=$this->db->get('multiplex')->result();
            $file['eventcategory']=$this->db->get('eventcategory')->result();
            $file['movieindustry']=$this->db->get('movieindustry')->result();
            $file['moviecategory']=$this->db->get('moviecategory')->result();

            $this->db->from('sportsstadium');
            $this->db->join('area','area.area_id=sportsstadium.area_id');
            $this->db->join('state','state.state_id=sportsstadium.state_id');
            $this->db->join('city','city.city_id=sportsstadium.city_id');
            $file['stadium']= $this->db->get()->result();

            $this->db->where('subcategory_id',$id);
            $file['match']=$this->db->get('sportsmatches')->result();
            $this->load->view('template/header',$file);
            $this->load->view('sports/sportsdetails',$file);
            $this->load->view('template/footer');
        }
    }
?>