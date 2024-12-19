<?php 
class contactmodel extends CI_Model
{
    public function getdata()
    {
        return $this->db->get('contact')->result();
    }

    public function update_status($eccid)
    {
     $this->db->where('contact_id',$eccid);  
    $data= $this->db->get('contact')->row();
     if($data->contact_status == "unblocked" )
     {
         $update=array
         (
             'contact_status'=>'blocked'
         );
             
         
     }
     else
     {
         $update=array
         (
             'contact_status'=> 'unblocked'
         );
     }
     $this->db->where('contact_id',$eccid);
         $this->db->update('contact',$update);
     
    }
}
?>