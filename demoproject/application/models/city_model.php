<?php 
class city_model extends CI_Model
{
    public function getdata()
    {
        $this->db->from("city");
        $this->db->join("state","state.state_id=city.state_id");
        return $this->db->get()->result();
    }
    public function update_status($eccid)
    {
        
        $this->db->where('city_id',$eccid);  
        $data= $this->db->get('city')->row();
        if($data->city_status == "unblocked" )
        {
            $update=array
            (
                'city_status'=>'blocked'
            );   
        }
        else
        {
            $update=array
            (
                'city_status'=> 'unblocked'
            );
        }
        $this->db->where('city_id',$eccid);
        $this->db->update('city',$update);
         
        }
    public function getstate()
    {
        return $this->db->get('state')->result();
    }
    public function inscity()
    {
        $state=$this->input->post('txtstate');
        $city=$this->input->post('txtcity');

        $ins=array
        (
            'city_name'=>$city,
            'state_id'=>$state
        );
        $this->db->insert('city',$ins);
        echo "inserted...";
    }
}
?>