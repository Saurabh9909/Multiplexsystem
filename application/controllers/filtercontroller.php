<?php 
    class filtercontroller extends CI_controller
    {
        public function __cunstruct()
        {
            parent :: __cunstruct();
        }
        public function getdata($id)
        {

            $this->db->from('movie');
            $this->db->join('movieindustry','movieindustry.industry_id = movie.industry_id');
            $this->db->join('moviecategory','moviecategory.category_id = movie.category_id');
            $this->db->join('multiplex','multiplex.multiplex_id = movie.multiplex_id');

            $lang = $this->input->get('lang');
            $mode = $this->input->post('mode');
            $cat = $this->input->post('cat');
            
            $language = json_decode($lang, true);
            $dimantion = json_decode($mode, true);
            $category = json_decode($cat, true);
            
          
            if($language != null)
            {
                foreach($language as $row) 
                {
                    $this->db->like('movie.movie_langauge',$row , 'both' );  
                }
            }
            if($dimantion != null)
            {
                foreach($dimantion as $row) 
                {
                    $this->db->like('movie.movie_experience',$row , 'both' );  
                }
            }
            if($category !=  null )
            {
                foreach($category as $row) 
                {
                    $this->db->like('moviecategory.category_name',$row , 'both' );  
                }
            }
            $this->db->where('movieindustry.industry_id',$id);
            $file['filter']=$this->db->get()->result();
       
            //   echo count($file['filter']);
              $this->load->view("movie/filter",$file);
        }
        
        public function getmatch($id)
        {
            $this->db->from('sportsmatches');
            $this->db->join('sportssubcategory','sportssubcategory.subcategory_id =sportsmatches.subcategory_id ');
            $this->db->join('sportsstadium','sportsstadium.stadium_id =sportsmatches.stadium_id ');
            $this->db->join('sportscategory','sportscategory.category_id =sportsmatches.category_id ');
            $this->db->get()->result();
            $team = $this->input->post('teamname');   

            $teamname = json_decode($team, true);

            // echo"<pre>";
            // print_r($teamname);
            // die();
            if($teamname !==  null )
            {
                foreach($teamname as $tm)
                {
                    $this->db->like('sportsmatches.team1_name',$tm , 'both' );
                    $this->db->or_like('sportsmatches.team2_name',$tm , 'both' );
                }
            }
            $this->db->where('subcategory_id',$id);
            $file['filter']=$this->db->get('sportsmatches')->result();
            
            // echo"<pre>";
            // print_r($file['filter']);
            // // echo json_encode($file['filter']);
            // die();
            $this->load->view("sports/filter",$file);
        
        }
    }
?>