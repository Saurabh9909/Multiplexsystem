<?php 
class area_model extends CI_Model
{
    public function getdata()
    {
        $this->db->from("area");
        $this->db->join("city","city.city_id=area.city_id");
        $this->db->join("state","state.state_id=area.state_id");
        return $this->db->get()->result();
    }

    public function update_status($eccid)
        {
        
            $this->db->where('area_id',$eccid);  
            $data= $this->db->get('area')->row();
            if($data->area_status == "unblocked" )
        {
            $update=array
            (
                'area_status'=>'blocked'
            );   
        }
        else
        {
            $update=array
            (
                'area_status'=> 'unblocked'
            );
        }
            $this->db->where('area_id',$eccid);
            $this->db->update('area',$update);
         
        }
    public function getstate()
    {
        return $this->db->get('state')->result();
    }
    public function getcity()
    {
        return $this->db->get('city')->result();
    }
    public function insarea()
    {
        $state=$this->input->post('txtstate');
        $city=$this->input->post('txtcity');
        $area=$this->input->post('txtarea');

        $ins=array
        (
            'state_id'=>$state,
            'city_id'=>$city,
            'area_name'=>$area
        );
        $this->db->insert('area',$ins);
    }

   
    public function getcity_op($id)
        {
            $this->db->where('state_id',$id);
            $data=$this->db->get('city')->result();
            foreach($data as $row)
            {
        ?>
                <option value="<?php echo $row->city_id ?>"> <?php echo $row->city_name ?> </option>
        <?php
            }
        }
}
?>