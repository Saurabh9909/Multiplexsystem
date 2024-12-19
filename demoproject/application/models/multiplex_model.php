<?php
    class multiplex_model extends CI_Model
    {
        public function getdata()
        {
            $this->db->from('multiplex');
            $this->db->join('area','area.area_id=multiplex.area_id');
            $this->db->join('city','city.city_id=multiplex.city_id');
            $this->db->join('state','state.state_id=multiplex.state_id');
            return $this->db->get()->result();
        }
        public function status($id)
        {
            $this->db->where('multiplex_id',$id);
            $data=$this->db->get('multiplex')->row();
           
            if($data->multiplex_status=="blocked")
            {
                $up=array(
                    "multiplex_status"=>"unblocked"
                );
            }
            else
            {
                $up=array(
                    "multiplex_status"=>"blocked"
                );
            }
    
            $this->db->where('multiplex_id',$id);
            $this->db->update('multiplex',$up);
        }

        public function insert()
        {
            $area=$this->input->post('area');
            $city=$this->input->post('city');
            $state=$this->input->post('state');
            $multiplex=$this->input->post('multiplex');
            $screen=$this->input->post('screen');

            $ins=array
            (
                "area_id"=> $area,
                "city_id"=> $city,
                "state_id"=> $state,
                "multiplex_name"=> $multiplex,
                "no_of_screen"=> $screen,

            );
            $this->db->insert('multiplex',$ins);
     }
        public function delete($id)
        {
            $this->db->where('multiplex_id',$id);
            $this->db->delete('multiplex');        }

    }
?>

