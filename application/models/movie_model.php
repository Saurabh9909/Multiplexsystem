<?php  
    class movie_model extends CI_Model
    {
        public function getdata($mid)
        {
            $this->db->where('movie_id',$mid);
            $this->db->from("movie");
            $this->db->join("movieindustry","movieindustry.industry_id=movie.industry_id");
            $this->db->join("moviecategory","moviecategory.category_id=movie.category_id");
            $this->db->join("multiplex","multiplex.multiplex_id=movie.multiplex_id");
            return $this->db->get('')->row();
        }
        public function get_movie($mid)
        {
            $this->db->where('industry_id',$mid);
            return $this->db->get('movie')->row();
        }
        public function indusrty_details($inid)
        {
            $this->db->where('industry_id',$inid);
            return $this->db->get('movie')->result();
        }
        public function movie_details($mid)
        {
            $this->db->where('movie_id',$mid);
            return $this->db->get('movie')->row();
        }
    }
?>