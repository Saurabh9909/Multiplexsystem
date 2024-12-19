<?php  
class eventticket_model extends CI_Model
{
    public function getdata()
    {
        $this->db->from('eventticket');
        $this->db->join('eventcategory','eventcategory.eventcategory_id=eventticket.eventcategory_id');
        $this->db->join('eventspeaker','eventspeaker.eventspeaker_id=eventticket.eventspeaker_id');
        return $this->db->get('')->result();
    }
    public function update_status($eccid)
    {
     $this->db->where('eventticket_id',$eccid);  
    $data= $this->db->get('eventticket')->row();
     if($data->eventticket_status == "unblocked" )
     {
         $update=array
         (
             'eventticket_status'=>'blocked'
         );
             
         
     }
     else
     {
         $update=array
         (
             'eventticket_status'=> 'unblocked'
         );
     }
     $this->db->where('eventticket_id',$eccid);
         $this->db->update('eventticket',$update);
     
    }
}
?>