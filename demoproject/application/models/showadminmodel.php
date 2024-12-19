<?php 
    class showadminmodel extends CI_Model
    {
        public function getdata()
        {
            return $this->db->get('admin')->result();
        }
        public function update_status($eccid)
        {
         $this->db->where('admin_id',$eccid);  
        $data= $this->db->get('admin')->row();
         if($data->admin_status == "unblocked" )
         {
             $update=array
             (
                 'admin_status'=>'blocked'
             );
         }
         else
         {
             $update=array
             (
                 'admin_status'=> 'unblocked'
             );
         }
         $this->db->where('admin_id',$eccid);
             $this->db->update('admin',$update);
         
        }
    }
?>