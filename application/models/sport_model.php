<?php  
class sport_model extends CI_Model
{
    public function getdata()
    {
        $this->db->from("sports");
        $this->db->join("state","state.state_id=sports.state_id");
        $this->db->join("city","city.city_id=sports.city_id");
        $this->db->join("area","area.area_id=sports.area_id");
        return $this->db->get()->result();
    }
    public function get_matchdata()
    {
        $this->db->from("sportsmatches");
        $this->db->join("sportsstadium","sportsstadium.stadium_id=sportsmatches.stadium_id");
        return $this->db->get()->result();
    }
    
    public function get_sports($sid)
    {
        $this->db->where('sports_id',$sid);
        return $this->db->get('sports')->row();
    }
    public function sports_details($sid)
    {
        $this->db->where('category_id',$sid);
        return $this->db->get('sportsmatches')->result();
    }
    public function match_details($sid)
    {
        $this->db->where('match_id',$sid);
        return $this->db->get('sportsmatches')->row();
    }
}
?>