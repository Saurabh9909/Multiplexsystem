<?php 
class eventcat_model extends CI_Model
    {
       public function getdata()
       {
        return $this->db->get('eventcategory')->result();
       }
       public function update_status($eccid)
       {
        $this->db->where('eventcategory_id',$eccid);  
       $data= $this->db->get('eventcategory')->row();
        if($data->eventcategory_status == "unblocked" )
        {
            $update=array
            (
                'eventcategory_status'=>'blocked'
            );
                
            
        }
        else
        {
            $update=array
            (
                'eventcategory_status'=> 'unblocked'
            );
        }
        $this->db->where('eventcategory_id',$eccid);
            $this->db->update('eventcategory',$update);
        
       }
       public function insert_eventcategory()
       {
            $eventcat_title=$this->input->post('eventcategory_title');
            $ins=array
            (
                'eventcategory_title'=> $eventcat_title
            );
            $this->db->insert('eventcategory',$ins);
       }
    }
?>