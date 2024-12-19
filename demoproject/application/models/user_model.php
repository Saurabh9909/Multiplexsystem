<?php 
class user_model extends CI_Model
    {
        public function getdata()
        {
            return $this->db->get("user")->result();
        }
        public function update_status($eccid)
        {
            $this->db->where('user_id',$eccid);  
            $data= $this->db->get('user')->row();
            if($data->user_status == "unblocked" )
            {
                $update=array
                (
                    'user_status'=>'blocked'
                );
                    
                
            }
            else
            {
                $update=array
                (
                    'user_status'=> 'unblocked'
                );
            }
            $this->db->where('user_id',$eccid);
                $this->db->update('user',$update);
            
        }
    }
?>