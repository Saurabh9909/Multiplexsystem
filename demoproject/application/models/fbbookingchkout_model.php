<?php 
class fbbookingchkout_model extends CI_Model
{
    public function getdata()
    {
        $this->db->from('fbbookingchkout');
        $this->db->join('foodbeveragebooking','foodbeveragebooking.foodbeverage_id=fbbookingchkout.foodbeverage_id');
        $this->db->join('user','user.user_id=fbbookingchkout.user_id');
        return $this->db->get()->result();
    }
    public function update_status($eccid)
    {
     $this->db->where('fbcheckout_id',$eccid);  
     $data= $this->db->get('fbbookingchkout')->row();
     if($data->fbcheckout_status == "unblocked" )
     {
         $update=array
         (
             'fbcheckout_status'=>'blocked'
         );
             
         
     }
     else
     {
         $update=array
         (
             'fbcheckout_status'=> 'unblocked'
         );
     }
     $this->db->where('fbcheckout_id',$eccid);
         $this->db->update('fbbookingchkout',$update);
     
    }
}
?>