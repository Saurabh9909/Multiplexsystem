<?php  
class sportsbooking_model extends CI_Model
    {
        public function getdata()
        {
            $this->db->from("sportsbooking");
            $this->db->join("sports","sports.sports_id=sportsbooking.sports_id");
            return $this->db->get()->result();
        }
        public function update_status($eccid)
        {   
            $this->db->where('sportsbooking_id',$eccid);  
            $data= $this->db->get('sportsbooking')->row();
            if($data->sportsbooking_status == "unblocked" )
            {
                $update=array
                (
                    'sportsbooking_status'=>'blocked'
                );
                    
                
            }
            else
            {
                $update=array
                (
                    'sportsbooking_status'=> 'unblocked'
                );
            }
            $this->db->where('sportsbooking_id',$eccid);
            $this->db->update('sportsbooking',$update);
        
        }
    }
?>