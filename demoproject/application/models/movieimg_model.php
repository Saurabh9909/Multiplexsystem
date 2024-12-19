<?php  
class movieimg_model extends CI_Model
{
    public function getdata()
    {
       $this->db->from('movieimg');
       $this->db->join('movie','movie.movie_id=movieimg.movie_id');

        return $this->db->get()->result();

    }

    public function status($id)
    {
        $this->db->where('movieimg_id',$id);
        $data=$this->db->get('movieimg')->row();
       
        if($data->movieimg_status=="blocked")
        {
            $up=array(
                "movieimg_status"=>"unblocked"
            );
        }
        else
        {
            $up=array(
                "movieimg_status"=>"blocked"
            );
        }

        $this->db->where('movieimg_id',$id);
        $this->db->update('movieimg',$up);
    }

    public function insert()
    {
        $movie=$this->input->post('name');
        $image=$_FILES['img']['name'];

        
        $config = array
        (
            'upload_path' => "./images/",
            'allowed_types' => "jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1000000",
            'max_width' => "1000000",
            'encryption_key' => true
        );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('img'))
            {
                    $data = array('upload_data' => $this->upload->data());
                    $ins=array(
                        "movie_id"=>$movie,
                        "movieimg"=>$image
            
                    );
                    $this->db->insert('movieimg',$ins);
  
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
        $this->db->where('movieimg_id',$id);
        $this->db->delete('movieimg');
     }

     public function edit($id)
         {
             $this->db->where('movieimg_id',$id);
            return $this->db->get('movieimg')->row();
        }

        public function update($id)
    {
        $movie=$this->input->post('name');
        $image=$_FILES['img']['name'];


         
        $config = array
        (
            'upload_path' => "./images/",
            'allowed_types' => "jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1000000",
            'max_width' => "1000000",
            'encryption_key' => true
        );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('img'))
            {
                    $data = array('upload_data' => $this->upload->data());
                    $up=array(
                        "movie_id"=>$movie,
                        "movieimg"=>$image
            
                    );
                    $this->db->where('movieimg_id',$id);
                    $this->db->update('movieimg',$up);
  
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