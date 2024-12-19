<?php 
class state_model extends CI_Model
{
    public function getdata()
    {
        return $this->db->get('state')->result();
    }
    public function update_status($eccid)
        {
        
            $this->db->where('state_id',$eccid);  
            $data= $this->db->get('state')->row();
            if($data->state_status == "unblocked" )
        {
            $update=array
            (
                'state_status'=>'blocked'
            );   
        }
        else
        {
            $update=array
            (
                'state_status'=> 'unblocked'
            );
        }
            $this->db->where('state_id',$eccid);
            $this->db->update('state',$update);
         
        }
        public function insstate()
        {
            $statename=$this->input->post('txtstate');
            $ins= array
            (
                'state_name'=>$statename
            );
            $this->db->insert('state',$ins);
        }

}
?>