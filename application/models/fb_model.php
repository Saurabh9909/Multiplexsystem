<?php  
class fb_model extends CI_Model
{
    public function getdata()
    {
        $this->db->from('fbaddtocart');
        $this->db->join('foodbeveragebooking','foodbeveragebooking.foodbeverage_id=fbaddtocart.foodbeverage_id');
        return $this->db->get()->result();
    }
    public function atc_details($atcid)
    {
        $this->db->where('atc_id',$atcid);
        return $this->db->get('fbaddtocart')->row();
    }
}
?>