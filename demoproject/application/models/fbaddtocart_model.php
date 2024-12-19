<?php 
class fbaddtocart_model extends CI_Model
{
    public function getdata()
    {
        $this->db->from("fbaddtocart");
        $this->db->join("foodbeveragebooking","foodbeveragebooking.foodbeverage_id=fbaddtocart.foodbeverage_id");
        return $this->db->get()->result();
    }
    public function update_status($eccid)
    {
     $this->db->where('atc_id',$eccid);  
    $data= $this->db->get('fbaddtocart')->row();
    if($data->atc_status == "unblocked" )
    {
        $update=array
        (
            'atc_status'=>'blocked'
        );
    }
    else
    {
        $update=array
        (
            'atc_status'=> 'unblocked'
        );
    }
       $this->db->where('atc_id',$eccid);
       $this->db->update('fbaddtocart',$update);
    }
    public function edit_addtocart($atcid)
    {
        $this->db->where('atc_id',$atcid);
        $this->db->get('fbaddtocart')->row();
    } 
    public function update_addtocart()
    {
        
    }
}
?>