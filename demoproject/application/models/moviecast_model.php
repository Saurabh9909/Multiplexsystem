<?php  
class moviecast_model extends CI_Model
{
    public function getdata()
    {

        // $this->db->from('moviecast');
        // $this->db->join('movie','movie.movie_id=moviecast.movie_id');
        return $this->db->get('moviecast')->result();
    }

    public function status($id)
    {
        $this->db->where('cast_id',$id);
        $data=$this->db->get('moviecast')->row();
       
        if($data->cast_status=="blocked")
        {
            $up=array(
                "cast_status"=>"unblocked"
            );
        }
        else
        {
            $up=array(
                "cast_status"=>"blocked"
            );
        }

        $this->db->where('cast_id',$id);
        $this->db->update('moviecast',$up);
    }
    
    public function insert()
    {
        // $movie=$this->input->post('movie');
        $castname=$this->input->post('castname');
        $image=$_FILES['image']['name'];
        $position=$this->input->post('position');

            $config = array
            (
                'upload_path' => "./images/",
                'allowed_types' => "jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encrypt_name' => true
            );
                $this->load->library('upload', $config);
                if($this->upload->do_upload('image'))
                {
                        $data = array('upload_data' => $this->upload->data());
                       
                        $ins=array(
                            
                            "cast_name"=>$castname,
                            "cast_img"=>$data['upload_data']['file_name'],
                            "cast_position"=> $position
                        );
                        
                        $this->db->insert('moviecast',$ins);
                        redirect('moviecast_controller');
                
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                    die();
                }          
        }

        
        public function delete($id)
        {
            $this->db->where('cast_id',$id);
            $this->db->delete('moviecast');
        }

        public function edit($id)
        {
            $this->db->where('cast_id',$id);
            return $this->db->get('moviecast')->row();
        }

        public function update($id)
        {
            // $movie=$this->input->post('movie');
            $castname=$this->input->post('castname');
            $image=$_FILES['image']['name'];
            
            $position=$this->input->post('position');
    
                $config = array
                (
                    'upload_path' => "./images/",
                    'allowed_types' => "jpg|png|jpeg|pdf",
                    'overwrite' => TRUE,
                    'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                    'max_height' => "1000000",
                    'max_width' => "1000000",
                    'encrypt_name' => true
                );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image'))
                    {
                            $data = array('upload_data' => $this->upload->data());
                           
                            $up=array(
                                
                                "cast_name"=>$castname,
                                "cast_img"=>$image,
                                "cast_position"=> $position
                            );
                            $this->db->where('cast_id',$id);
                            $this->db->update('moviecast',$up);
                    
                    }
                    else
                    {
                        $error = array('error' => $this->upload->display_errors());
                        print_r( $error);
                        die();
                    }          
            }
    
}
?>