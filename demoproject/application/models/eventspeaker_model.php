<?php 
class eventspeaker_model extends CI_Model
{
    public function getdata()
    {
        $this->db->from('eventspeaker');
        $this->db->join('eventcategory','eventcategory.eventcategory_id=eventspeaker.eventcategory_id');
        return $this->db->get()->result();
    }
    public function update_status($eccid)
    {
        $this->db->where('eventspeaker_id',$eccid);  
        $data= $this->db->get('eventspeaker')->row();
        if($data->eventspeaker_status == "unblocked" )
        {
            $update=array
            (
                'eventspeaker_status'=>'blocked'
            );  
        }
        else
        {
            $update=array
            (
                'eventspeaker_status'=> 'unblocked'
            );
        }
        $this->db->where('eventspeaker_id',$eccid);
        $this->db->update('eventspeaker',$update);
    }
    public function get_eventcat()
    {
        return $this->db->get('eventcategory')->result();
    }
    public function insert_eventspeaker()
    {
        $eventcat_id=$this->input->post('eventcat_id');
        $eventspeaker_name=$this->input->post('eventspeaker_name');
        $eventspeaker_proffession=$this->input->post('eventspeaker_proffession');
        $eventspeaker_profileimg=$_FILES['eventspeaker_profileimg']['name'];
        $config = array
        (
            'upload_path' => "./images/",
            'allowed_types' => "*",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1000000",
            'max_width' => "1000000",
            'encryption_key' => true
        );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('eventspeaker_profileimg'))
            {
                    $data = array('upload_data' => $this->upload->data());
                    $ins=array
                    (
                        'eventcategory_id'=>$eventcat_id,
                        'eventspeaker_name'=>$eventspeaker_name,
                        'eventspeaker_proffession'=>$eventspeaker_proffession,
                        'eventspeaker_profileimg'=>$eventspeaker_profileimg
                    );
                    echo "<pre>";
                    $this->db->insert('eventspeaker',$ins);
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                print_r( $error);
            }
    }
        public function edit_es($esid)
        {
            $this->db->where('eventspeaker_id',$esid);
            return $this->db->get('eventspeaker')->row();
        }
        public function update_es($esid)
        {
            $eventcat_id=$this->input->post('eventcat_id');
            $eventspeaker_name=$this->input->post('eventspeaker_name');
            $eventspeaker_proffession=$this->input->post('eventspeaker_proffession');
            $eventspeaker_profileimg=$_FILES['eventspeaker_profileimg']['name'];
            $config = array
            (
                'upload_path' => "./images/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encryption_key' => true
            );
            $this->db->where('eventspeaker_id',$esid);
            $esrow=$this->db->get('eventspeaker')->row();
            if($eventspeaker_profileimg=="")
            {
                        $update=array
                        (
                            'eventcategory_id'=>$eventcat_id,
                            'eventspeaker_name'=>$eventspeaker_name,
                            'eventspeaker_proffession'=>$eventspeaker_proffession,
                            'eventspeaker_profileimg'=>$esrow->eventspeaker_profileimg
                        );
                        
                        $this->db->where('eventspeaker_id',$esid);
                        $this->db->update('eventspeaker',$update);
                        
            }
            else
            {
                $this->load->library('upload', $config);
                if($this->upload->do_upload('eventspeaker_profileimg'))
                {
                        $data = array('upload_data' => $this->upload->data());
                        $update=array
                        (
                            'eventcategory_id'=>$eventcat_id,
                            'eventspeaker_name'=>$eventspeaker_name,
                            'eventspeaker_proffession'=>$eventspeaker_proffession,
                            'eventspeaker_profileimg'=>$eventspeaker_profileimg
                        );
                        echo "<pre>";
                        $this->db->where('eventspeaker_id',$esid);
                        $this->db->update('eventspeaker',$update);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
            }
        }
        public function delete_es($esid)
        {
            $this->db->where('eventspeaker_id',$esid);
            return $this->db->delete('eventspeaker');
        }
    }
?>